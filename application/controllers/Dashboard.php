<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		if(!isset($_SESSION['id'])){
        	redirect('login','refresh');
        }
        
		$this->load->view('dashboard');
	}
}
