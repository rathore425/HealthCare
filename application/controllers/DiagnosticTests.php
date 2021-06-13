<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnostictests extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

        
	 public function __construct() {
        parent::__construct(); 
        
        $this->load->database();
        
        //load our Register model here
        $this->load->model('Diagnostictests_model');
    }
	public function index()
	{
		$diagnostictests = $this->Diagnostictests_model->get_all(); 
        $data = array('diagnostictests_data' => $diagnostictests); 
        $this->load->view('diagnostictests',$data);

	}

	public function from1() {
        //set the form validation here
        
            //if not get the input values
            $de = $this->input->post('de');
            $price = $this->input->post('price');


            $data = [
                'de' => $de, 'price' => $price, 'date_time' => date('Y-m-d H:i:s')
            ];

            //pass the input values to the register model
            $insert_data = $this->Diagnostictests_model->add_user($data);

            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                
                redirect(base_url() . 'dortor');
            }
            }
}

	

