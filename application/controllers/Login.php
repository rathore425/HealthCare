<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->model('loginmodel', 'Mlogin');
    }

	public function index()
	{
		if(isset($_SESSION['id'])){
        	redirect('dashboard','refresh');
        }
        
		$this->load->view('login');
	}
	
	public function register()
	{
		if(isset($_SESSION['id'])){
        	redirect('dashboard','refresh');
        }
        
		$this->load->view('register');
	}
	
	public function forgotpass()
	{
		if(isset($_SESSION['id'])){
        	redirect('dashboard','refresh');
        }
        
		$this->load->view('forget_pass');
	}
	
	function send_email(){
	    
	    array_walk_recursive($_POST, 'trim');
	    extract($_POST);
	    
	    if(isset($name) && isset($email) && isset($mobile) && isset($password) && isset($cnf_pass)){
	        if($this->db->where('email', $email)->get('users')->row()){
	            exit(json_encode(array('type'=>'error','text'=>'Email already registered with us.')));
	        }
	        
	        if($this->db->where('mobile', $mobile)->get('users')->row()){
	            exit(json_encode(array('type'=>'error','text'=>'Mobile No already registered with us.')));
	        }
	        
	        if($password != $cnf_pass){
	            exit(json_encode(array('type'=>'error','text'=>'Password did not match.')));
	        }
	        
	        $from = 'no-reply@sattamatkakhel.com';
    	    $from_name = 'Matka Play';
    	    $to = $_POST['email'];
    	    $subject = 'Verify Your Email';
    	    $main_code = 1234;
    	    $message = '<b>Hi, '.$_POST['email'].'</b><br>Kindly verify your email to register. Your verify code mentioned below -<br>'.$main_code;
    	    send_ci_email($from,$from_name,$to,$subject,$message);
    	    exit(json_encode(array('type'=>'success','text'=>'Verify Email has been sent to your email. Kindly verify the same.', 'main_code'=>sha1($main_code))));
	    }
	    
	    exit(json_encode(array('type'=>'error','text'=>'All Fields are required.')));
	}
	
	function send_femail(){
	    
	    array_walk_recursive($_POST, 'trim');
	    extract($_POST);
	    
	    if(isset($email)){
	        if(!$this->db->where('email', $email)->get('users')->row()){
	            exit(json_encode(array('type'=>'error','text'=>'Email is not registered with us.')));
	        }
	        
	        $from = 'no-reply@sattamatkakhel.com';
    	    $from_name = 'Matka Play';
    	    $to = $_POST['email'];
    	    $subject = 'Verify Your Email';
    	    $main_code = mt_rand(1000,9999);
    	    $message = '<b>Hi, '.$_POST['email'].'</b><br>Kindly verify your email to change your password. Your verify code mentioned below -<br>'.$main_code;
    	    send_ci_email($from,$from_name,$to,$subject,$message);
    	    exit(json_encode(array('type'=>'success','text'=>'Verify Email has been sent to your email. Kindly verify the same.', 'main_code'=>sha1($main_code))));
	    }
	    
	    exit(json_encode(array('type'=>'error','text'=>'All Fields are required.')));
	}
	
	function verify_email(){
	    extract($_POST);
	    
	    if(!isset($main_code) && !isset($user_code)){
	        exit(json_encode(array('type'=>'error','text'=>'Kindly fill the details correctly.')));
	    }
	    
	    if($main_code == sha1($user_code)){
	        exit(json_encode(array('type'=>'success','text'=>'Thank you for your paitence.')));
	    }
	    
	    exit(json_encode(array('type'=>'error','text'=>'Verification code does not match.')));
	}

	public function validate(){
		$response = $this->Mlogin->validate();
		exit(json_encode($response));
	}
	
	public function updatepass(){
	    array_walk_recursive($_POST, 'trim');
	    extract($_POST);
	    
	    if(isset($email) && isset($password) && isset($cnf_pass)){
	        
	        if($password != $cnf_pass){
	            exit(json_encode(array('type'=>'error','text'=>'Password did not match.')));
	        }
	        
	        $response = $this->Mlogin->updatepass();
		    exit(json_encode($response));
	    }
	    
	    exit(json_encode(array('type'=>'error','text'=>'All Fields are required.')));
	}
	
	public function registration(){
	    $response = $this->Mlogin->register();
		exit(json_encode($response));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
