<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnostictests_model extends CI_Model{
	
    public $table = 'diagnostictests'; 
 
    public $id = 'creat_id'; 
 
    public $order = 'DESC'; 
 
    function __construct() 
        { 
        parent::__construct(); 
      $this->load->database();

        } 
 
    // get all 
 
    function get_all() 
        { 
        $this->db->order_by($this->id, $this->order); 
        return $this->db->get($this->table)->result(); 
        } 
 
    public function add_user($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('diagnostictests', $data);
    }
}
