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
    }
