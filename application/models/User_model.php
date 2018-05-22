<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


	public function addUser($data)
		{
			$this->db->insert('users', $data);
		}

	 public function login($username, $password){
       // Validasi
       $result = $this->db->query("SELECT * from users where username = '".$username."' and password = '".$password."'");

       if($result->num_rows() == 1){
           return $result->row(0)->user_id;
       } else {
           return false;
       }
   }


}
?>