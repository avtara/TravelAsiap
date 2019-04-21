<?php 
	class M_Home extends CI_Model
	{
		function rute_from(){
			$this->db->select("rute_from");
			$this->db->distinct("rute_from");
			$this->db->from('rute');
			return $this->db->get()->result();
		}

		function rute_to(){
			$this->db->select("rute_to");
			$this->db->distinct("rute_to");
			$this->db->from('rute');
			return $this->db->get()->result();
		}

		function search(){
			$this->db->select('*');
			$this->db->from('rute');
			$this->db->where('rute_from', $this->input->get('rute_from'));
			$this->db->where('rute_to', $this->input->get('rute_to'));
			$this->db->like('depart_at', $this->input->get('depart_at'));
			$this->db->join('transportation', 'rute.id_transportation = transportation.id_transportation');
			return $this->db->get()->result();
		}

		function remains(){
			$this->db->select('count(id_reservation) as uhuy');
			$this->db->from('rute');
			$this->db->where('rute_from', $this->input->get('rute_from'));
			$this->db->where('rute_to', $this->input->get('rute_to'));
			$this->db->where('status', 2);
			$this->db->like('reservation.depart_at', $this->input->get('depart_at'));
			$this->db->join('reservation', 'rute.id_rute = reservation.id_rute');
			return $this->db->get()->row();
		}

		function payment($kode){
			$this->db->select('*');
			$this->db->from('reservation');
			$this->db->where('reservation_code', $kode);
			$this->db->join('rute', 'reservation.id_rute = rute.id_rute');
			$this->db->join('transportation', 'reservation.id_transportation = transportation.id_transportation');
			return $this->db->get()->row();
		}

		function hitung_penumpang($kode){
			$this->db->select('count(*) AS "penumpang"');
			$this->db->from('reservation');
			$this->db->where('reservation_code', $kode);
			return $this->db->get()->row();
		}

		function send_payment(){
			$data=array(
				'price' => $this->input->post('price'),
				'status' => 3
			);
			$this->db->where('reservation_code', $this->input->post('rcode'));
			$this->db->update('reservation', $data);
		}

		function send_transfer(){
			$data=array(
				'price' => $this->input->post('price'),
				'status' => 2
			);
			$this->db->where('reservation_code', $this->input->post('rcode'));
			$this->db->update('reservation', $data);
		}

		function view_booking(){
			$this->db->select('*');
			$this->db->from('rute');
			$this->db->where('rute_from', $this->input->get('rute_from'));
			$this->db->where('rute_to', $this->input->get('rute_to'));
			$this->db->where('depart_at', $this->input->get('depart_at'));
			$this->db->where('id_rute', $this->input->get('id_rute'));
			$this->db->join('transportation', 'rute.id_transportation = transportation.id_transportation');
			return $this->db->get()->row();
		}

		function view_seat(){
			$this->db->select('seat_code');
			$this->db->from('reservation');
			$this->db->where('id_rute',  $this->input->get('id_rute'));
			$this->db->where('status', 2);
			return $this->db->get()->result();
		}

		function booking(){

			$this->db->set('seat_qty', 'seat_qty'.-$this->input->post('penumpang'), FALSE);
			$this->db->where('id_transportation', $this->input->post('id_transportation[0]'));
			$this->db->update('transportation');

			for ($i=0; $i < $this->input->post('penumpang') ; $i++) { 
				
				$data=array(
					'reservation_code' => $this->input->post('reservation_code['.$i.']'),
					'reservation_at' => $this->input->post('reservation_at['.$i.']'),
					'reservation_date' => $this->input->post('reservation_date['.$i.']'),
					'id_customer' => $this->input->post('id_customer['.$i.']'),
					'id_transportation' => $this->input->post('id_transportation['.$i.']'),
					'id_rute' => $this->input->post('id_rute['.$i.']'),
					'depart_at' => $this->input->post('depart_at['.$i.']'),
					'price' => $this->input->post('price['.$i.']'),
					'id_user' => $this->input->post('id_user['.$i.']'),
					'seat_code' => $this->input->post('seat_code['.$i.']'),
					'status' => 0
				);

				$this->db->insert('reservation', $data);

				$cust=array(
					'id_customer' => $this->input->post('id_customer['.$i.']'),
					'name' => $this->input->post('name['.$i.']'),
					'address' => $this->input->post('address['.$i.']'),
					'phone' => $this->input->post('phone['.$i.']'),
					'gender' => $this->input->post('gender['.$i.']'),
					'no_identitas' => $this->input->post('identitas['.$i.']')
				);

				$this->db->insert('customer', $cust);

			}
		}

		function kode_cust(){
			$this->db->select_max('id_customer');
			return $this->db->get('customer')->row();
		}

		function kode_seat( $code){
			$this->db->select_max('seat_code');
			$this->db->where('id_rute', $code);
			return $this->db->get('reservation')->row();
		}

		function setting($ids){
			$this->db->select('*');
			$this->db->where('id_user', $ids);
			$this->db->join('rute',  'reservation.id_rute = rute.id_rute');
			$this->db->join('customer', 'reservation.id_customer = customer.id_customer');
			$this->db->order_by('id_reservation', 'desc');
			return $this->db->get('reservation')->result_array();


		}

		function print_tiket(){
			$id_customer = $this->input->post('cust');
			$this->db->select('*');
			$this->db->from('reservation');
			$this->db->where('customer.id_customer', $id_customer);
			$this->db->join('customer', 'reservation.id_customer = customer.id_customer');
			$this->db->join('rute', 'reservation.id_rute = rute.id_rute');
			return $this->db->get()->row();
		}

		function add($data)
	{
		$this->db->insert("user",$data);
	}
	function kode(){
		$this->db->select_max('id_user');
		return $this->db->get('user')->row();
	}
	}