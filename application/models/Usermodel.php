<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

	public function users(){
		return $this->db->where_not_in('usertype','Admin')->get("users");
	}
	
	public function balance_info(){
	    array_walk_recursive($_POST, 'trim');
		extract($_POST);
		
		$userinfo = $this->db->where('id', $userid)->get('users')->row_array();
		$userbalance = $this->db->where('userid', $userid)->get('user_balance')->row_array();
		
		if(count($userbalance) > 0){
		    $balance = $userbalance['balance'];
		}else{
		    $balance = 0;
		}
		
		return array('type'=>'success', 'user_info' => $userinfo['name'].' (<span class="text-primary">'.$userinfo['btc_address'].'</span>)', 'balance' => $balance);
	}
	
	public function bid_info(){
	    array_walk_recursive($_POST, 'trim');
		extract($_POST);
		
		$userinfo = $this->db->where('id', $userid)->get('users')->row_array();
		$bidinfo = $this->db->select('a.*, b.matka')->join('matkas b', 'a.matkaid = b.id')->where('a.created_at', date('Y-m-d', strtotime('- 1 days')))->where('a.userid', $userid)->get('bids a')->result_array();
		$html = '
		<code>Bidding Date : '.date('Y-m-d', strtotime('- 1 days')).'</code>
		<table class="table table-bordered table-responsive" id="bidingtable">
    		<thead class="bg-dark">
    		    <tr>
    		        <td>Bidding Date</td>
    		        <td>Matka Details</td>
    		        <td>Bid Point</td>
    		        <td>Status</td>
    		    </tr>
    		</thead>
    		<tbody>
		';
		
		if(count($bidinfo) > 0){
		    foreach($bidinfo as $key => $value){
    		    $html .= '
    		        <tr>
    		            <td>'.$value['created_at'].'</td>
    		    ';
    		    
    		    if($value['opening_single'] != '' || $value['closing_single'] != ''){
    		        $html .= '
    		            <td>'.$value['matka'].' | <img src="'.site_url("assets/images/single.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Single</td>
    		        ';
    		    }
    		    
    		    if($value['doubles'] != ''){
    		        $html .= '
    		            <td>'.$value['matka'].' | <img src="'.site_url("assets/images/double.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Double</td>
    		        ';
    		    }
    		    
    		    if($value['opening_single_patti'] != '' || $value['closing_single_patti'] != ''){
    		        $html .= '
    		            <td>'.$value['matka'].' | <img src="'.site_url("assets/images/singlepatti.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Single Patti</td>
    		        ';
    		    }
    		    
    		    if($value['opening_double_patti'] != '' || $value['closing_double_patti'] != ''){
    		        $html .= '
    		            <td>'.$value['matka'].' | <img src="'.site_url("assets/images/doublepatti.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Double Patti</td>
    		        ';
    		    }
    		    
    		    if($value['opening_triple_patti'] != '' || $value['closing_triple_patti'] != ''){
    		        $html .= '
    		            <td>'.$value['matka'].' | <img src="'.site_url("assets/images/triplepatti.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Tripple Patti</td>
    		        ';
    		    }
    		    
    		    $html .= '
    		        <td>'.$value['points'].'</td>
    		    ';
    		    
    		    if($value['status'] == 0){
    		        $html .= '
        		        <td><span class="badge badge-warning">Pending</span></td>
        		    ';
    		    }else if($value['status'] == 1){
    		        $html .= '
        		        <td><span class="badge badge-success">Winner</span></td>
        		    ';
    		    }else{
    		        $html .= '
        		        <td><span class="badge badge-danger">Unlucky</span></td>
        		    ';
    		    }
    		    
    		    $html .= '</tr>';
    		}   
		}else{
		    $html .= '
		        <tr>
		            <td>No Data Found</td>
		            <td></td>
		            <td></td>
		            <td></td>
		        </tr>
		    ';
		}
		
		$html .= '
		    </tbody>
		</table>
		';
		
		return array('type'=>'success', 'html' => $html);
	}
	
	public function addbalance(){
	    array_walk_recursive($_POST, 'trim');
		extract($_POST);
		$mainbalance = $balance;
		$data = array(
	        'userid' => $userid,
	        'amount' => $mainbalance,
	        'txnid' => 'Txn'.$userid.date('YmdHis'),
	        'status' => 1,
	        'description' => 'Coins credited By Admin',
        );
        
        $this->db->insert('transactions', $data);
        
        $balance = $this->db->where('userid', $userid)->get('user_balance')->row_array();
	    if(!empty($balance)){
           $this->db->where('userid', $userid)->update('user_balance', array('balance' => ($balance['balance'] + $mainbalance)));
        }else{
            $this->db->insert('user_balance', array('userid' => $userid, 'balance' => $mainbalance, 'updated_at' => date('Y-m-d H:i:s')));
        }
	    
        return array('type'=>'success','text'=>'Update Success');
	}

	public function changestatus(){
		array_walk_recursive($_POST, 'trim');
		extract($_POST);

		$this->db->where('id', $id)->update('users', array('status' => $status));
		return array('type'=>'success','text'=>'Update Success');
	}
}
