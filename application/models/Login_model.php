<?php

class Login_model extends CI_Model{

    public function check_login($table,$where){
        return $this->db->get_where($table,$where);
    }


}