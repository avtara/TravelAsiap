<?php
class M_auth extends CI_Model{
    function auth($username,$password){
        $query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
}
