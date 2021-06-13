<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('usermodel', 'Muser');
    }

	public function index()
	{
		if(!isset($_SESSION['id'])){
        	redirect('login','refresh');
        }
        
		$this->load->view('users');
	}

	function jsonData(){
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

      	$query = $this->Muser->users();
      	$data = [];
		foreach($query->result() as $r) {

			if($r->status == 1){
				$status = '<span class="badge badge-success">Active</span>';
			}else{
				$status = '<span class="badge badge-danger">Inactive</span>';
			}

			if($r->status == 1){
				$action = '<button class="btn btn-xs btn-warning" type="button" onclick="changestatus('.$r->id.',0)">Deactivate</button>';
			}else{
				$action = '<button class="btn btn-xs btn-success" type="button" onclick="changestatus('.$r->id.',1)">Activate</button>';
			}
			
			$action .= '<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#balanceModal" onclick="balance_info('.$r->id.',this)" id="balance_info_btn">Balance Info</button>';
			
			$data[] = array(
				$r->name,
				$r->email,
				$r->mobile,
				$status,
				$action
			);
      	}

      	$result = array(
           	"draw" => $draw,
            "recordsTotal" => $query->num_rows(),
            "recordsFiltered" => $query->num_rows(),
            "data" => $data
        );

      exit(json_encode($result));
	}

	public function balance_info(){
		$response = $this->Muser->balance_info();
		exit(json_encode($response));
	}
	
	public function bid_info(){
		$response = $this->Muser->bid_info();
		exit(json_encode($response));
	}
	
	public function addbalance(){
	    $response = $this->Muser->addbalance();
		exit(json_encode($response));
	}
	
	public function changestatus(){
		$response = $this->Muser->changestatus();
		exit(json_encode($response));
	}
}
