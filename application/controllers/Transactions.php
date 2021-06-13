<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('transactionmodel', 'Mtransaction');
    }

	public function index()
	{
		if(!isset($_SESSION['id'])){
        	redirect('login','refresh');
        }
		$last_deposit_id= $this->Mtransaction->get_last_deposit_id();

		
		$_SESSION['last_deposit_id']=$last_deposit_id;

        
		$this->load->view('transactions');
	}

	function jsonData(){
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

      	$query = $this->Mtransaction->transactions();
		  

      	$data = [];
		foreach($query->result() as $r) {

			if($r->status == 1){
				$status = '<span class="badge badge-success">Approved</span>';
			}else if($r->status == 2){
				$status = '<span class="badge badge-danger">Not Approved</span>';
			}else{
			    $status = '<span class="badge badge-warning">Pending For Approval</span>';
			}
            
            if($_SESSION['usertype'] == 'Admin'){
                if($r->status == 1){
    				$action = '<i class="fa fa-check text-success"></i>';
    			}else if($r->status == 2){
    				$action = '<i class="fa fa-times text-danger"></i>';
    			}else{
    			    $action = '<button class="btn btn-xs btn-success" type="button" onclick="changestatus('.$r->id.',1)">Approve</button><button class="btn btn-xs btn-success" type="button" onclick="changestatus('.$r->id.',0)">Disapprove</button>';
    			}
    			
    			$data[] = array(
    				$r->email.' ('.$r->name.')',
    				$r->description,
    				$r->amount,
    				$r->CD,
    				$status,
    				$action
    			);
            }else{
                if($r->status == 1){
    				$action = '<i class="fa fa-check text-success"></i>';
    			}else if($r->status == 2){
    				$action = '<i class="fa fa-times text-danger"></i>';
    			}else{
    			    $action = '<i class="fa fa-exclamation-triangle text-warning"></i>';
    			}   
    			
    			$data[] = array(
    				$r->description,
    				$r->amount,
    				$r->CD,
    				$status,
    				$action
    			);
            }
      	}

      	$result = array(
           	"draw" => $draw,
            "recordsTotal" => $query->num_rows(),
            "recordsFiltered" => $query->num_rows(),
            "data" => $data
        );

      exit(json_encode($result));
	}

	public function changestatus(){
		$response = $this->Mtransaction->changestatus();
		exit(json_encode($response));
	}
	
	public function deposit(){
	    $response = $this->Mtransaction->deposit();
		exit(json_encode($response));
	}
	
	public function tsuccess(){
        if(isset($_GET['txnid'])){
            $this->Mtransaction->tsuccess();
        }

		redirect('transactions','refresh');
	}
	
	public function tfailed(){
        if(isset($_GET['txnid'])){
            $this->Mtransaction->tfailed();
        }

		redirect('transactions','refresh');
	}
}
