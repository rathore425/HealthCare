<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biding extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('bidingmodel', 'Mbiding');
    }

	public function index()
	{
		if(!isset($_SESSION['id'])){
        	redirect('login','refresh');
        }
        
        $data['matkas'] = $this->Mbiding->matkas();
		$data['rates'] = $this->Mbiding->mrates();
		$this->load->view('biding', $data);
	}
	
	public function mrates(){
	    if(!isset($_SESSION['id'])){
        	redirect('login','refresh');
        }
        
        $data['rates'] = $this->Mbiding->mrates();
		$this->load->view('mrates', $data);
	}

	public function matkainfo(){
		exit(json_encode($this->Mbiding->matkainfo()));
	}

	public function bid(){
		exit(json_encode($this->Mbiding->bid()));
	}
	
	public function prebids(){
	    exit(json_encode($this->Mbiding->prebids()));
	}
	
	public function bidnow(){
	    exit(json_encode($this->Mbiding->bidnow()));
	}
}
