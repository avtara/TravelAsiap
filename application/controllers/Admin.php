<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Admin');
	}
	public function index()
	{
        $data['rute'] = $this->M_Admin->count_rute();
        $data['akun'] = $this->M_Admin->count_akun();
        $data['customer'] = $this->M_Admin->count_customer();
        $data['transportation'] = $this->M_Admin->count_transportation();
		
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/v_index',$data);
		}else{
			redirect('home');
		}
    }
    public function ticket()
	{
        // $data['rute'] = $this->M_Admin->count_rute();
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/v_ticket');
		}else{
			redirect('home');
		}
    }

    public function transport()
	{
        // $data['rute'] = $this->M_Admin->count_rute();
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/v_transport');
		}else{
			redirect('home');
		}
    }

    public function rute()
	{
        // $data['rute'] = $this->M_Admin->count_rute();
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/v_rute');
		}else{
			redirect('home');
		}
    }
}