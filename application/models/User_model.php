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
           return $result->result_array();
       } else {
           return false;
       }
   }

   public function lihatSemuaUser()
   {
      $result = $this->db->query("SELECT * from users");
      return $result->result_array();
   }

   public function getUserbyID($idUser)
   {
      $result = $this->db->query("SELECT * from users where user_id = ".$idUser);
      return $result->result_array();
   }

   public function editUser($data)
   {
      $query = $this->db->query("UPDATE users set nama = '".$data['nama']."', email = '".$data['email']."', kodepos = '".$data['kodepos']."', username = '".$data['username']."' where user_id = ".$data['user_id']);
   }

   public function deleteUser($id)
   {
     $query = $this->db->query("DELETE From users where user_id = ".$id);
   }


}
?>