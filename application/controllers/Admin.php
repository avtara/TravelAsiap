<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Admin');
		$this->load->library('pdf');
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

	function ticket_pdf(){
        $pdf = new FPDF('l','mm','A4');
		// membuat halaman baru
		$pdf->SetTitle("Laporan Tiket ".date("F j, Y, g:i a"));
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(275,7,'Daftar Pemesanan Tiket',0,1,'C');
		$pdf->SetFont('Arial','I',8);
		$pdf->Cell(10,7,'',0,1);
		$pdf->Cell(382,7,'*Untuk status 0 berarti Belum Membayar,2 berarti menunggu Konfimasi, 3 berarti sudah Terkonfirmasi',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(15,7,'',0,0);
        $pdf->Cell(32,6,'Reservation Code',1,0);
		$pdf->Cell(60,6,'Nama',1,0);
		$pdf->Cell(32,6,'Pemesanan',1,0);
		$pdf->Cell(27,6,'Nama Armada',1,0);
		$pdf->Cell(38,6,'Dari',1,0);
		$pdf->Cell(38,6,'Ke',1,0);
		$pdf->Cell(13,6,'Status',1,1);
        $pdf->SetFont('Arial','',10);
			$reservation = $this->db->select('*');
            $reservation = $this->db->from('reservation');
            $reservation = $this->db->join('customer', 'reservation.id_customer = customer.id_customer');
			$reservation = $this->db->join('rute', 'reservation.id_rute = rute.id_rute');
			$reservation = $this->db->join('transportation', 'reservation.id_transportation = transportation.id_transportation');
			$reservation = $this->db->get()->result_array();
        foreach ($reservation as $row){
			$pdf->Cell(15,7,'',0,0);
            $pdf->Cell(32,6,$row['reservation_code'],1,0);
			$pdf->Cell(60,6,$row['name'],1,0);
			$pdf->Cell(32,6,date("D, d M Y", strtotime($row['reservation_date'])),1,0);
            $pdf->Cell(27,6,$row['armada'],1,0);
			$pdf->Cell(38,6,strstr($row['rute_from'],'-', true),1,0);
			$pdf->Cell(38,6,strstr($row['rute_to'],'-', true),1,0);
			$pdf->Cell(13,6,$row['status'],1,1);

			
        }
        $pdf->Output();
    }
}