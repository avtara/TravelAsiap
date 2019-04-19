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
		// $data['rute_to'] = $this->M_Home->rute_to();
		// $this->session->set_userdata('referred_from', current_url());
		
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/index',$data);
		}else{
			redirect('home');
		}
    }
}