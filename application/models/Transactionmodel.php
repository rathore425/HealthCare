<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactionmodel extends CI_Model {

	public function transactions(){
	    if($_SESSION['usertype'] == 'Admin'){
	        return $this->db
    		->select('a.*, b.name, b.email')
    		->join('users b','a.userid = b.id', 'left')->get("transactions a");
	    }else{
	        return $this->db
    		->select('a.*, b.name, b.email')
    		->join('users b','a.userid = b.id', 'left')->where('a.userid', $_SESSION['id'])->get("transactions a");
	    }
	}
	public function get_last_deposit_id()
	{
		$last_deposit_id=$this->db->select_max('depositId')->get("transactions")->row_array();
		$last_deposit_id=$last_deposit_id['depositId']+0;
		

		return $last_deposit_id;
	}
	public function changestatus(){
		array_walk_recursive($_POST, 'trim');
		extract($_POST);

		$this->db->where('id', $id)->update('transactions', array('status' => $status));
		return array('type'=>'success','text'=>'Update Success');
	}
	
	public function deposit(){
	    array_walk_recursive($_POST, 'trim');
	    extract($_POST);
	    
		$txnid = "Txn".$_SESSION['id'].date('YmdHis');

		$last_deposit_id=$this->db->select_max('depositId')->get("transactions")->row_array();
		$last_deposit_id=$last_deposit_id['depositId']+0;

		

		if($deposit_id>0 && $last_deposit_id+1==$deposit_id)
		{

			//

			$member_id=$deposit_member_id;
			$amount=$deposit_amount;
			


			if($amount < 0.001){
				return array('type'=>'error','text'=>'Coin should be greater than or equal to 0.001.');
			}

			$data = array(
				'userid' => $member_id,
				'amount' => $amount,
				'txnid' => $txnid,
				'status' => 1,
				'CD' => 'Debit',
				'depositId' => $deposit_id,
				'description' => 'Sent to Admin',
			);
			
			$this->db->insert('transactions', $data);
			$balance = $this->db->where('userid', $member_id)->get('user_balance')->row_array();
			if(!empty($balance)){
			$this->db->where('userid', $member_id)->update('user_balance', array('balance' => ($balance['balance'] - $amount)));
			}else{
				$this->db->insert('user_balance', array('userid' => $member_id, 'balance' => $amount, 'updated_at' => date('Y-m-d H:i:s')));
			}
		}
        return array('type'=>'success','text'=>'Update Success', 'amount' => $amount);
	}
	
	public function tsuccess(){
	    
	    $info = $this->db->where('txnid', $_GET['txnid'])->where('status', '2')->from('transactions')->get()->row_array();
	    if(!empty($info)){
		    $balance = $this->db->where('userid', $_SESSION['id'])->get('user_balance')->row_array();
		    if(!empty($balance)){
	           $this->db->where('userid', $_SESSION['id'])->update('user_balance', array('balance' => ($balance['balance'] + $info['amount'])));
	        }else{
	            $this->db->insert('user_balance', array('userid' => $_SESSION['id'], 'balance' => $info['amount'], 'updated_at' => date('Y-m-d H:i:s')));
	        }
		    
		    $this->db->where('id', $info['id'])->update('transactions', array('status' => 1));
	        return array('type'=>'success','text'=>'Update Success');
	    }

	    return array('type'=>'success','text'=>'Update Success');
	}
	
	public function tfailed(){
	    
	    $info = $this->db->where('txnid', $_GET['txnid'])->where('status', '2')->from('transactions')->get()->row_array();
	    
	    $this->db->where('id', $info['id'])->update('transactions', array('status' => 2));
        return array('type'=>'success','text'=>'Update Success');
	}
}
