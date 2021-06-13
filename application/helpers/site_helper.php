<?php defined('BASEPATH') OR exit('No direct script access allowed');


function send_ci_email($from = 'no-reply@sattamatkakhel.com',$from_name = 'Matka Play',$to,$subject,$body)
{
	$ci=& get_instance();
	$ci->load->library('email');
	$config = array(
        'mailtype'  => 'html',
        'charset'   => 'utf-8'      
    );
    
    // 'smtp_host' => 'smtp.elasticemail.com',
    // 'smtp_user' => 'care@kartiy.com', 
    // 'smtp_pass' => 'a6b39abf-3a57-45a5-ab6c-41aee6be2e60',
    
	$ci->email->initialize($config);
	$ci->email->set_newline("\r\n");		
	$ci->email->from($from,$from_name);		 
	$ci->email->to($to);		
	$ci->email->subject($subject);
	$ci->email->message($body); 				
	$result=$ci->email->send();
	if(!$result)
	{
		$error=$ci->email->print_debugger();
	}
	
	return true;
}

function balance(){
    $CI =& get_instance();
    $balance = $CI->db->where('userid', $_SESSION['id'])->get('user_balance')->row()->balance;
    
    if($balance > 0){
        return $balance;
    }else{
        return 0;
    }
}

function totalbids(){
    $CI =& get_instance();
    $bids = $CI->db->where('userid', $_SESSION['id'])->where('CD','Credit')->get('transactions')->result_array();
    
    return count($bids);
}

function totalwins(){
    $CI =& get_instance();
    $bids = $CI->db->where('userid', $_SESSION['id'])->where('CD','Debit')->where('status', 1)->get('transactions')->result_array();
    
    return count($bids);
}