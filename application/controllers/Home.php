<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Home');
		$this->load->model('M_auth');
	}
	public function index()
	{
		$data['rute'] = $this->M_Home->rute_from();
		$data['rute_to'] = $this->M_Home->rute_to();
		$this->session->set_userdata('referred_from', current_url());
		
		
		if($this->session->userdata('ses_level')=='1'){
			$this->load->view('pessanger/logged/index',$data);
		}else{
			$this->load->view('pessanger/index',$data);
		}
	}
	public function result(){
		$currentURL = current_url(); 
		$params   = $_SERVER['QUERY_STRING']; 
		$fullURL = $currentURL . '?' . $params; 
		$data['rute'] = $this->M_Home->search();
		$data['remains'] = $this->M_Home->remains();
		$this->session->set_userdata('referred_from', $fullURL);

		if($this->session->userdata('ses_level')=='1'){
			$this->load->view('pessanger/logged/v_ticket',$data);
		}else{
			$this->load->view('pessanger/v_ticket',$data);
		}	
	}

	public function user_booking(){
		$currentURL = current_url(); 
		$params   = $_SERVER['QUERY_STRING']; 
		$fullURL = $currentURL . '?' . $params; 
		$this->session->set_userdata('referred_from', $fullURL);
		$data['book'] = $this->M_Home->view_booking();
		$data['customer'] = $this->M_Home->kode_cust();
		$data['seat'] = $this->M_Home->view_seat(); 
		if($this->session->userdata('ses_level')=='1'){
			$this->load->view('pessanger/v_reservation',$data);	
		}else{
			redirect(site_url('home/login'));
		}	 
	}

	public function booking(){
		
		$data=array();
		$this->M_Home->booking();
		// $this->Home_Model->add_cust();
		$kode = $this->input->post('reservation_code[0]');
		redirect('/Home/payment/'.$kode,'refresh');
	}

	public function login()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required',array('required'=>'Username masih kosong !'));
		$this->form_validation->set_rules('password', 'Password', 'required',array('required'=>'Password masih kosong !'));

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('pessanger/v_login');
		}else
		{
			$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
			$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

			$cek_login=$this->M_auth->auth($username,$password);

			if($cek_login->num_rows() > 0)
			{
				$data=$cek_login->row_array();
				$this->session->set_userdata('masuk',TRUE);
				if($data['level']=='1'){
					$this->session->set_userdata('ses_id',$data['id_user']);
					$this->session->set_userdata('ses_fullname',$data['fullname']);
					$this->session->set_userdata('ses_level',$data['level']);
					$this->session->set_userdata('ses_email',$data['email']);
					$this->session->set_userdata('ses_handphone',$data['handphone']);
					$referred_from = $this->session->userdata('referred_from');
redirect($referred_from, 'refresh');
				}else{ 
					$this->session->set_userdata('akses','2');
					$this->session->set_userdata('ses_id',$data['username']);
					$this->session->set_userdata('ses_nama',$data['fullname']);
					$this->session->set_userdata('ses_level',$data['level']);
					redirect('home/index');
				}
			}else{$this->session->set_flashdata('msg', '<div class="alert alert-icon alert-danger" role="alert">
				<i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> <b>Username</b> atau <b>Password</b> anda salah, silahkan coba lagi!
				</div>');
			redirect('home/login');};
		}
	}

	public function faq()
	{
		$this->load->view('index/faq');
	}

	public function register()
	{	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[20]', array('required'=>'Username masih kosong !','min_length'=>'Minimal Karakter adalah 2!','max_length'=>'Maksimal Karakter hanya 12'));
		$this->form_validation->set_rules('fullname', 'Fullname', 'required',array('required'=>'Nama Panjang masih kosong !'));
		$this->form_validation->set_rules('password', 'Password','required|min_length[6]',array('required'=>'Password masih kosong !','min_length'=>'Minimal Karakter adalah 6!'));



		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('index/register');
		}else
		{
			$data = array(
				"username"=>$this->input->post("username"),
				"fullname"=>$this->input->post("fullname"),
				"password"=>md5($this->input->post("password")),
				"level"=>2
			);
			$this->user_m->add($data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible" >
				<button data-dismiss="alert" class="close"></button>
				<h4>Berhasil</h4>
				<p>
				Anda telah berhasil register ke situs TravelID, silahkan login  💗
				</p>
				<div class="btn-list">
				</div>
				</div>');
			redirect('welcome/register');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}

	
}
