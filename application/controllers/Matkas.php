<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkas extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('matkamodel', 'Mmatka');
    }

	public function index()
	{
		if(!isset($_SESSION['id'])){
        	redirect('login','refresh');
        }
        
		$this->load->view('matkas');
	}

	function jsonData(){
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

      	$query = $this->Mmatka->matkas();
      	$data = [];
		foreach($query->result() as $r) {

			if($r->status == 1){
				$status = '<span class="badge badge-success">Active</span>';
			}else{
				$status = '<span class="badge badge-danger">Inactive</span>';
			}

			$action = '<button class="btn btn-xs btn-info" type="button" onclick="edit('.$r->id.')">Edit</button>';
			if($r->status == 1){
				$action .= '<button class="btn btn-xs btn-warning" type="button" onclick="changestatus('.$r->id.',0)">Deactivate</button>';
			}else{
				$action .= '<button class="btn btn-xs btn-success" type="button" onclick="changestatus('.$r->id.',1)">Activate</button>';
			}
			
			$data[] = array(
				$r->matka,
				$r->opening_time,
				$r->closing_time,
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

	function editmatka(){
        $response = $this->Mmatka->editmatka();
		exit(json_encode($response));
    }

    function addmatka(){
    	$response = $this->Mmatka->addmatka();
		exit(json_encode($response));
    }

    function updatematka(){
    	$response = $this->Mmatka->updatematka();
		exit(json_encode($response));
    }

	public function rates()
	{
		if(!isset($_SESSION['id'])){
        	redirect('login','refresh');
        }
        
		$this->load->view('rates');
	}
	
	function editematka(){
        $response = $this->Mmatka->editematka();
		exit(json_encode($response));
    }

    function addematka(){
    	$response = $this->Mmatka->addematka();
		exit(json_encode($response));
    }

    function updateematka(){
    	$response = $this->Mmatka->updateematka();
		exit(json_encode($response));
    }

	function jsonRateData(){
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

      	$query = $this->Mmatka->rates();
      	$data = [];
		foreach($query->result() as $r) {

			if($r->status == 1){
				$status = '<span class="badge badge-success">Active</span>';
			}else{
				$status = '<span class="badge badge-danger">Inactive</span>';
			}

			$action = '<button class="btn btn-xs btn-info" type="button" onclick="edit('.$r->id.')">Edit</button>';
			if($r->status == 1){
				$action .= '<button class="btn btn-xs btn-warning" type="button" onclick="changestatus('.$r->id.',0)">Deactivate</button>';
			}else{
				$action .= '<button class="btn btn-xs btn-success" type="button" onclick="changestatus('.$r->id.',1)">Activate</button>';
			}
			
			$data[] = array(
				$r->play_type,
				$r->rate,
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

	public function changestatus(){
		$response = $this->Mmatka->changestatus();
		exit(json_encode($response));
	}

	public function changeratestatus(){
		$response = $this->Mmatka->changeratestatus();
		exit(json_encode($response));
	}
}
