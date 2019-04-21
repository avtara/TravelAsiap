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
        $data['ticket'] = $this->M_Admin->ticket();
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/v_ticket',$data);
		}else{
			redirect('home');
		}
    }

    public function transport()
	{
        $data['transport'] = $this->M_Admin->transport();
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/v_transport',$data);
		}else{
			redirect('home');
		}
    }

    public function rute()
	{
        $data['rute'] = $this->M_Admin->rute();
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/v_rute',$data);
		}else{
			redirect('home');
		}
	}
	
	public function confirm(){
		$data=array();
		$this->M_Admin->confirm();

		redirect('/admin/ticket/','refresh');
	}

	public function add_transport()
	{
		$data['transport'] = $this->M_Admin->transport();
		$data['kode'] = $this->M_Admin->view_kode();
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/v_addtransport',$data);
		}else{
			redirect('home');
		}
	}
	
	public function add_trans(){
		$data=array();
		$this->M_Admin->add_transport();
		

		redirect('/admin/transport/','refresh');
	}

	public function add_rute()
	{
		$data['armada'] = $this->M_Admin->armada();
		
		if($this->session->userdata('ses_level')=='2'){
			$this->load->view('admin/v_addrute',$data);
		}else{
			redirect('home');
		}
	}
	
	public function add_rut(){
		$data=array();
		$this->M_Admin->add_rute();
		

		redirect('/admin/rute/','refresh');
	}
}