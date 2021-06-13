<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {

	public function validate(){
		array_walk_recursive($_POST, 'trim');
		extract($_POST);

		if (isset($email) && isset($password)) {
		    if(is_numeric($email)){
		        $user_info = $this->db->where(array('mobile'=>$email, 'status' => 1, 'password'=>sha1($password)))->get('users')->row_array();
		    }else{
		        $user_info = $this->db->where(array('email'=>$email, 'status' => 1, 'password'=>sha1($password)))->get('users')->row_array();   
		    }
			if(!empty($user_info)){
				$this->session->set_userdata($user_info);
				return array('type'=>'success','text'=>'Login success');
			}else{
				return array('type'=>'error','text'=>'Invalid Credentials. Kindly Contact to Admin.');
			}
		}

		return array('type'=>'error','text'=>'Both fields are required');
	}
	
	public function register(){
	    extract($_POST);

        $data['name'] = $name;
        $data['mobile'] = $mobile;
        $data['email'] = $email;
        $data['password'] = sha1($password);

		if ($this->db->insert('users', $data)) {
			return array('type'=>'success','text'=>'Registration success');
		}else{
			return array('type'=>'error','text'=>'Something went wrong.');
		}	
	}
	
	public function updatepass(){
	    extract($_POST);
	    $data['password'] = sha1($password);
	    
	    if ($this->db->where('email', $email)->update('users', $data)) {
			return array('type'=>'success','text'=>'Password has been changed.');
		}else{
			return array('type'=>'error','text'=>'Something went wrong.');
		}
	}
}
