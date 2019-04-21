<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
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
		
		
		if($this->session->userdata('ses_level')=='3'){
			$this->load->view('petugas/v_index',$data);
		}else{
			redirect('home');
		}
    }
    public function ticket()
	{
        $data['ticket'] = $this->M_Admin->ticket();
		
		if($this->session->userdata('ses_level')=='3'){
			$this->load->view('petugas/v_ticket',$data);
		}else{
			redirect('home');
		}
    }

    public function transport()
	{
        $data['transport'] = $this->M_Admin->transport();
		
		if($this->session->userdata('ses_level')=='3'){
			$this->load->view('petugas/v_transport',$data);
		}else{
			redirect('home');
		}
    }

    public function rute()
	{
        $data['rute'] = $this->M_Admin->rute();
		
		if($this->session->userdata('ses_level')=='3'){
			$this->load->view('petugas/v_rute',$data);
		}else{
			redirect('home');
		}
	}
	
	public function confirm(){
		$data=array();
		$this->M_Admin->confirm();

		redirect('/petugas/ticket/','refresh');
	}
}