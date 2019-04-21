<?php 
	class M_Admin extends CI_Model
	{
        public function count_rute(){
            $query = $this->db->count_all('rute');
            return $query;
        }
        public function count_akun(){
            $query = $this->db->count_all('user');
            return $query;
        }
        public function count_customer(){
            $query = $this->db->count_all('customer');
            return $query;
        }
        public function count_transportation(){
            $query = $this->db->count_all('transportation');
            return $query;
        }

        function ticket(){
			$this->db->select('*');
            $this->db->from('reservation');
            $this->db->join('customer', 'reservation.id_customer = customer.id_customer');
			$this->db->join('rute', 'reservation.id_rute = rute.id_rute');
			$this->db->join('transportation', 'reservation.id_transportation = transportation.id_transportation');
			return $this->db->get()->result_array();
        }
        
        function transport(){
			$this->db->select('*');
            $this->db->from('transportation');
			return $this->db->get()->result_array();
        }
        
        function rute(){
			$this->db->select('*');
            $this->db->from('rute');
            $this->db->join('transportation', 'rute.id_transportation = transportation.id_transportation');
			return $this->db->get()->result_array();
        }

        function confirm(){
			$data=array(
				'status' => 3
			);
			$this->db->where('reservation_code', $this->input->post('rcode'));
			$this->db->update('reservation', $data);
        }
        
        function add_transport(){
			$data=array(
                'code' => $this->input->post('kode'),
                'armada'=>$this->input->post('armada'),
                'seat_qty'=>$this->input->post('seat'),
                'id_transportation'=>$this->input->post('id_transportation'),
			);
			$this->db->insert('transportation', $data);
        }

        function add_rute(){
			$data=array(
                'depart_at' => $this->input->post('depart_at'),
                'arrival'=>$this->input->post('arrival'),
                'rute_from'=>$this->input->post('rute_from'),
                'rute_to'=>$this->input->post('rute_to'),
                'price'=>$this->input->post('price'),
                'id_transportation'=>$this->input->post('armada'),
			);
			$this->db->insert('rute', $data);
        }
        
        function view_kode(){
            $this->db->select_max('id_transportation');
            return $this->db->get('transportation')->row();
        }

        function armada(){
			$this->db->select("*");
			$this->db->from('transportation');
			return $this->db->get()->result();
		}

    }
