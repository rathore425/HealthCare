<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkamodel extends CI_Model {

	public function matkas(){
		return $this->db->get("matkas");
	}

	public function rates(){
		return $this->db->get("market");
	}

	public function editmatka(){
		extract($_POST);
		return $this->db->where('id', $id)->get("matkas")->row_array();
	}

	public function addmatka(){
		array_walk_recursive($_POST, 'trim');
		extract($_POST);

		if(isset($matka) && isset($opening_time) && isset($closing_time)){
			$this->db->insert('matkas', $_POST);
			return array('type'=>'success','text'=>'Matka Addedd Successfully');
		}

		return array('type'=>'error','text'=>'All Fields are required');
	}

	public function updatematka(){
		array_walk_recursive($_POST, 'trim');
		extract($_POST);

		if(isset($id) &&isset($matka) && isset($opening_time) && isset($closing_time)){
			
			$updates = array(
				'matka'=>$matka,
				'opening_time'=>$opening_time,
				'closing_time'=>$closing_time
			);

			$this->db->where('id', $id)->update('matkas', $updates);
			return array('type'=>'success','text'=>'Matka Updated Successfully');
		}
		
		return array('type'=>'error','text'=>'All Fields are required');
	}
	
	public function editematka(){
		extract($_POST);
		return $this->db->where('id', $id)->get("market")->row_array();
	}

	public function addematka(){
		array_walk_recursive($_POST, 'trim');
		extract($_POST);

		if(isset($play_type) && isset($rate)){
			$this->db->insert('market', $_POST);
			return array('type'=>'success','text'=>'Rate Addedd Successfully');
		}

		return array('type'=>'error','text'=>'All Fields are required');
	}

	public function updateematka(){
		array_walk_recursive($_POST, 'trim');
		extract($_POST);

		if(isset($id) &&isset($play_type) && isset($rate)){
			
			$updates = array(
				'play_type'=>$play_type,
				'rate'=>$rate
			);

			$this->db->where('id', $id)->update('market', $updates);
			return array('type'=>'success','text'=>'Rate Updated Successfully');
		}
		
		return array('type'=>'error','text'=>'All Fields are required');
	}

	public function changestatus(){
		array_walk_recursive($_POST, 'trim');
		extract($_POST);

		$this->db->where('id', $id)->update('matkas', array('status' => $status));
		return array('type'=>'success','text'=>'Update Success');
	}

	public function changeratestatus(){
		array_walk_recursive($_POST, 'trim');
		extract($_POST);

		$this->db->where('id', $id)->update('market', array('status' => $status));
		return array('type'=>'success','text'=>'Update Success');
	}
}
