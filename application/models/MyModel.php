<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model {

    public function login($username,$password)
    {
	   $query  = $this->db->select('*')->from('users')->where('username',$username)->get()->row();	
        if($query == ""){
            return array('status' => 204,'message' => 'Username not found.');
        } else {
            $password1		 = $query->password;
            $id              = $query->id;
			$childs		 	 = $query->childs;
			
            if (hash_equals($password1, $password)) {
			   $last_login = date('Y-m-d H:i:s');
               $token = crypt(substr( md5(rand()), 0, 7));
               $expired_at = date("Y-m-d H:i:s", strtotime('+12 hours'));
               $this->db->trans_start();		
               $this->db->where('childs',$childs)->update('users',array('last_login' => $last_login));
               $this->db->insert('users_authentication',array('childs_id' => $childs,'token' => $token,'expired_at' => $expired_at));
               if ($this->db->trans_status() === FALSE){
                  $this->db->trans_rollback();
                  return array('status' => 500,'message' => 'Internal server error.');
				 
               } else {
                  $this->db->trans_commit();
                  
				  return array('status' => 200,'message' => 'Successfully login.','token' => $token, 'childs' => $childs);
			   }
            } else {
               return array('status' => 204,'message' => 'Wrong password.');
            }
        }
    }
	
}
