<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidingmodel extends CI_Model {

	public function matkas(){
		return $this->db->where_not_in('status','0')->get("matkas")->result_array();
	}
	
	public function mrates(){
		return $this->db->where_not_in('status','0')->get("market")->result_array();
	}

	public function matkainfo(){
		extract($_POST);
		return $this->db->select('matka')->where('id',$id)->get("matkas")->row_array();
	}

	public function bid(){
		extract($_POST);
		$matka = $this->db->select('matka')->where('id',$matkaid)->get("matkas")->row()->matka;
		$data['matka'] = $matka.' | <img src="'.base_url('assets/images/').strtolower(str_replace(' ','',$playtype)).'.png" style="width: 30px; margin-right: 5px; vertical-align: middle;" />'.$playtype.'';

		$dates = '<option value="">Select Date</option>';
		for ($i=0; $i < 5; $i++) { 
			$dates .= '
			<option value="'.date('Y-m-d', strtotime('+'.$i.' days')).'">'.date('Y-m-d', strtotime('+'.$i.' days')).'</option>
			';
		}
		$data['dates'] = $dates;
		
		if(strtolower($playtype) == 'single'){
			
			$numbers = '';
			for ($i=0; $i < 10; $i++) { 
				$numbers .= '
				<option value="'.$i.'">'.$i.'</option>
				';
			}
			$data['numbers'] = $numbers;
			$data['choose_bid_type'] = '
			<label>Choose Slot</label>
			<select class="form-control" name="coloumn_type">
			    <option value="opening_single">Opening Slot</option>
			    <option value="closing_single">Closing Slot</option>
			</select>
			';
		}else if(strtolower($playtype) == 'double'){
			
			$numbers = '';
			for ($i=0; $i < 100; $i++) {
				if(strlen($i) < 2){
					$numbers .= '
					<option value="0'.$i.'">0'.$i.'</option>
					';
				}else{
					$numbers .= '
					<option value="'.$i.'">'.$i.'</option>
					';
				}
			}
			$data['numbers'] = $numbers;
			$data['choose_bid_type'] = '
			<label>Choose Slot</label>
			<select class="form-control" name="coloumn_type">
			    <option value="doubles">Opening Slot</option>
			</select>
			';
		}else if(strtolower($playtype) == 'single patti'){
			
			$numbers = [128, 137, 146, 236, 245, 290, 380, 470, 489, 560, 579, 678,129, 138, 147, 156, 237, 246, 345, 390, 480, 570, 589, 679,120, 139, 148, 157, 238, 247, 256, 346, 490, 580, 670, 689,130, 149, 158, 167, 239, 248, 257, 347, 356, 590, 680, 789,140, 159, 168, 230, 249, 258, 267, 348, 357, 456, 690, 780,123, 150, 169, 178, 240, 259, 268, 349, 358, 367, 457, 790,124, 160, 278, 179, 250, 269, 340, 359, 368, 458, 467, 890,125, 134, 170, 189, 260, 279, 350, 369, 468, 378, 459, 567,126, 135, 180, 234, 270, 289, 360, 379, 450, 469, 478, 568,127, 136, 145, 190, 235, 280, 370, 389, 460, 479, 569, 578];
			sort($numbers);
			$numbershtml = '';
			foreach ($numbers as $value) {
				$numbershtml .= '
				<option value="'.$value.'">'.$value.'</option>
				';
			}
			$data['numbers'] = $numbershtml;
			$data['choose_bid_type'] = '
			<label>Choose Slot</label>
			<select class="form-control" name="coloumn_type">
			    <option value="opening_single_patti">Opening Slot</option>
			    <option value="closing_single_patti">Closing Slot</option>
			</select>
			';
		}else if(strtolower($playtype) == 'double patti'){
			
			$numbers = [110,112,113,114,115,116,117,118,119,220,221,223,224,225,226,227,228,229,330,331,332,334,335,336,337,338,339,440,441,442,443,445,446,447,448,449,550,551,552,553,554,556,557,558,559,660,661,662,663,664,665,667,668,669,770,771,772,773,774,775,776,778,779,880,881,882,883,884,885,886,887,889,990,991,992,993,994,995,996,997,998];
			$numbershtml = '';
			foreach ($numbers as $value) {
				$numbershtml .= '
				<option value="'.$value.'">'.$value.'</option>
				';
			}
			$data['numbers'] = $numbershtml;
			$data['choose_bid_type'] = '
			<label>Choose Slot</label>
			<select class="form-control" name="coloumn_type">
			    <option value="opening_double_patti">Opening Slot</option>
			    <option value="closing_double_patti">Closing Slot</option>
			</select>
			';
		}else{
			
			$numbers = [111,222,333,444,555,666,777,888,999,'000'];
			$numbershtml = '';
			foreach ($numbers as $value) {
				$numbershtml .= '
				<option value="'.$value.'">'.$value.'</option>
				';
			}
			$data['numbers'] = $numbershtml;
			$data['choose_bid_type'] = '
			<label>Choose Slot</label>
			<select class="form-control" name="coloumn_type">
			    <option value="opening_triple_patti">Opening Slot</option>
			    <option value="closing_triple_patti">Closing Slot</option>
			</select>
			';
		}

		return $data;
	}
	
	function prebids(){
	    array_walk_recursive($_POST, 'trim');
        extract($_POST);
        
        $bidinfo = $this->db->where('userid', $_SESSION['id'])->where('created_at', $created_at)->where('matkaid', $matkaid)->get('bids')->result_array();
        $html = '
        <table class="table table-bordered table-responsive" id="bidingtable">
        	<thead class="bg-dark">
        	    <tr>
        	        <td>Bidding Date</td>
        	        <td>Slot Info</td>
        	        <td>Bid Point</td>
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
        	    
        	    if($value['opening_single'] != ''){
        	        $html .= '
        	            <td>Opening Slot | <img src="'.site_url("assets/images/single.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Single</td>
            	    ';
        	    }
        	    
        	    if($value['closing_single'] != ''){
        	        $html .= '
        	            <td>Closing Slot | <img src="'.site_url("assets/images/single.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Single</td>
            	    ';
        	    }
        	    
        	    if($value['doubles'] != ''){
        	        $html .= '
        	            <td>Opening Slot | <img src="'.site_url("assets/images/double.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Double</td>
            	    ';
        	    }
        	    
        	    if($value['opening_single_patti'] != ''){
        	        $html .= '
        	            <td>Opening Slot | <img src="'.site_url("assets/images/singlepatti.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Single Patti</td>
            	    ';
        	    }
        	    
        	    if($value['closing_single_patti'] != ''){
        	        $html .= '
        	            <td>Closing Slot | <img src="'.site_url("assets/images/singlepatti.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Single Patti</td>
            	    ';
        	    }
        	    
        	    if($value['opening_double_patti'] != ''){
        	        $html .= '
        	            <td>Opening Slot | <img src="'.site_url("assets/images/doublepatti.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Double Patti</td>
            	    ';
        	    }
        	    
        	    if($value['closing_double_patti'] != ''){
        	        $html .= '
        	            <td>Closing Slot | <img src="'.site_url("assets/images/doublepatti.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Double Patti</td>
            	    ';
        	    }
        	    
        	    if($value['opening_triple_patti'] != ''){
        	        $html .= '
        	            <td>Opening Slot | <img src="'.site_url("assets/images/triple_patti.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Tripple Patti</td>
            	    ';
        	    }
        	    
        	    if($value['closing_triple_patti'] != ''){
        	        $html .= '
        	            <td>Closing Slot | <img src="'.site_url("assets/images/triple_patti.png").'" style="width: 30px; margin-right: 5px; vertical-align: middle;"> Tripple Patti</td>
            	    ';
        	    }
        	    
        	    $html .= '
        	        <td>'.$value['points'].'</td>
        	    </tr>
        	    ';
        	
        	}
        }else{
        	$html .= '
                <tr>
                    <td>No Data Found</td>
                    <td></td>
                    <td></td>
                </tr>
            ';
        }
        
        $html .= '
            </tbody>
        </table>
        ';
	    
	    return array('html' => $html);
	}
	
	function bidnow(){
	    array_walk_recursive($_POST, 'trim');
        extract($_POST);
        
        if($_POST['matkaid'] == '' || $_POST['points'] == '' || $_POST['bidnumber'] == '' || $_POST['created_at'] == ''){
            return array('type' => 'error', 'text' => 'All fields are required');
        }
        
        $balanceinfo = $this->db->where('userid',$_SESSION['id'])->get('user_balance')->row()->balance;
        
        if($balanceinfo < $points){
            return array('type' => 'error', 'text' => 'Do not have sufficient wallet balance to bid.');
        }
        
        if(strpos($coloumn_type,"patti") == ''){
            $result_coloumn_type = $coloumn_type;
        }else{
            $result_coloumn_type = current(explode('_',$coloumn_type)).'_lucky_patti';
        }
        $checkresult = $this->db->where('created_at', $created_at)->get('results')->row()->$result_coloumn_type;
        if($checkresult != ''){
            return array('type' => 'error', 'text' => 'You have missed it. Kindly select other Slot or Date to bid.');
        }
        
        $data[matkaid] = $matkaid;
        $data[userid] = $_SESSION['id'];
        $data[created_at] = $created_at;
        $data[$coloumn_type] = $bidnumber;
        $data[points] = $points;
        
        $this->db->insert('bids', $data);
        
        
        $data = array(
	        'userid' => $_SESSION['id'],
	        'amount' => $points,
	        'txnid' => 'Txn'.$_SESSION['id'].date('YmdHis'),
	        'status' => 1,
	        'CD' => 'Debit',
	        'description' => 'Bid Points Debited',
        );
        
        $this->db->insert('transactions', $data);
        $this->db->where('userid', $_SESSION['id'])->update('user_balance', array('balance' => ($balanceinfo-$points)));
        return array('type' => 'success', 'text' => 'Bid Successful');
	}
}
