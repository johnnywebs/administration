<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estimation_controller extends CI_Controller {
	
	public function redirector($path,$flashmsg,$flashmsgtype) {
		if($flashmsgtype == "error") {
			$toast = "$.toast({
				heading: 'An error occurred!',
				text: '$flashmsg',
				position: 'top-center',
				loaderBg:'#ff6849',
				icon: 'error',
				hideAfter: 3500
			});";
			$this->session->set_flashdata('global_message', $toast);
		} 
		elseif($flashmsgtype == "success") {
			$toast = "$.toast({
				heading: 'Congratulations!',
				text: '$flashmsg',
				position: 'top-center',
				loaderBg:'#ff6849',
				icon: 'success',
				hideAfter: 3500
			});";
			$this->session->set_flashdata('global_message', $toast);
		} 
		elseif($flashmsgtype == "warning") {
			$toast = "$.toast({
				heading: 'Warning!',
				text: '$flashmsg',
				position: 'top-center',
				loaderBg:'#ff6849',
				icon: 'warning',
				hideAfter: 3500
			});";
			$this->session->set_flashdata('global_message', $toast);
		}
		redirect(base_url($path));
	}
	
	public function crud($action = '',$module = '',$search = '') {
		if($action == "create") {
			if($module == "projectestimate") {				
				if($this->input->post('admin_id') <> "" ) {	
					$data = array();
					$postdata = $this->input->post('formdata');
					$params = array();
					parse_str($postdata, $params);
					$code = date('YmdHis');
					$data = array('code' => $code,
						'estimatedby' =>  addslashes($params['etimatedby']),
						'estimateddate' =>  addslashes($params['etimateddate']),
						'client' =>  addslashes($params['client']),
						'filename' =>  addslashes($params['filename']),
						'location' =>  addslashes($params['location']),
						'typeofwork' =>  addslashes($params['typeofwork']),
						'stdshift' =>  addslashes($params['stdshift']),
						'premshift1' =>  addslashes($params['premshift1']),
						'premshift2' =>  addslashes($params['premshift2']),
						'totaldays' =>  addslashes($params['totaldays']),
						'unitqty' =>  addslashes($params['unitqty']),
						'points' =>  addslashes($params['points']),
						'prt' =>  addslashes($this->numericOnly($params['prtval'])),
						'fuelcost' =>  addslashes($this->numericOnly($params['galval'])),
						'sales_tax' =>  addslashes($this->numericOnly($params['sales_tax'])),
						'createdby' => $this->session->userdata('username'),
						);
					//print_r($params);
					//echo "success: " . $code;
					
					$result = $this->buildestimate($data);
					if($result == true){
						echo $code;
					}else{
						echo "error ". "You have and error in the data you are tying to Upload! Kindly Retry Again!";
					}
					
				}
				else {
					show_404();
				}
			}
			elseif($module == "projectdetails"){
				if($this->input->post('admin_id') <> "") {	
					//print_r($_POST);
					//echo $params['labordescription'][0];
					$prcode =  $this->input->post('code');
					$postdata = $this->input->post('formdata');
					$params = array();
					parse_str($postdata, $params);
					
					//print_r($params);
					//exit;
					
					
					//processlabor
					if(isset($params['labordescription'])){
						for ($x = 0; $x <= count($params['labordescription']) - 1; $x++) {
							$laborarray = array('code' => addslashes(trim($prcode)),
								'description' => addslashes($params['labordescription'][$x]),
								'quantity' => $params['laborquantity'][$x],
								'rate' => $this->numericOnly($params['laborrate'][$x]),
								'fringe_perhour' => $this->numericOnly($params['laborfringehour'][$x]),
								'cost_perhour' => $this->numericOnly($params['laborcostperhour'][$x]),
								'diem_pershift' => $this->numericOnly($params['labordiemshift'][$x]),
								'cost_pershift' => $this->numericOnly($params['laborcostshift'][$x]),
								'prt' => $params['prt'],
								'createdby' => $this->session->userdata('username')
							);
							$this->buildlabor($laborarray);
							$laborarray = array('');
						}
					}
					
					//processmaterials
					if(isset($params['materialdescription'])){
						for ($x = 0; $x <= count($params['materialdescription']) - 1; $x++) {
							$materialarray = array('code' => addslashes(trim($prcode)),
								'description' => addslashes($params['materialdescription'][$x]),
								'units' => addslashes($params['materialunits'][$x]),
								'quantity' => $params['materialquantity'][$x],
								'costperunit' => $this->numericOnly($params['materialcostperunit'][$x]),
								'totalcost' => $this->numericOnly($params['materialtotalcost'][$x]),
								'salestax' => addslashes($params['salestax']),
								'createdby' => $this->session->userdata('username')
							);
							$this->buildmaterial($materialarray);
							$materialarray = array('');
						}
					}
					
					//processmisc
					if(isset($params['miscdescription'])){
						for ($x = 0; $x <= count($params['miscdescription']) - 1; $x++) {
							$miscarray = array('code' => addslashes(trim($prcode)),
								'description' => addslashes($params['miscdescription'][$x]),
								'units' => addslashes($params['miscunits'][$x]),
								'quantity' => $params['materialquantity'][$x],
								'costperunit' => $this->numericOnly($params['misccostperunit'][$x]),
								'totalcost' => $this->numericOnly($params['misctotalcost'][$x]),
								'createdby' => $this->session->userdata('username')
							);
							$this->buildmisc($miscarray);
							$miscarray = array('');
						}
					}
					
					//processsubcon
					if(isset($params['subcondesc'])){
						for ($x = 0; $x <= count($params['subcondesc']) - 1; $x++) {
							$subconarray = array('code' => addslashes(trim($prcode)),
								'subcon' => addslashes($params['subcondesc'][$x]),
								'typeofwork' => addslashes($params['typeofwork'][$x]),
								'quote' => $this->numericOnly($params['quote'][$x]),
								'createdby' => $this->session->userdata('username')
							);
							$this->buildsubcon($subconarray);
							$subconarray = array('');
						}
					}
					
					
					//processequip own
					if(isset($params['equipdescription'])){
						for ($x = 0; $x <= count($params['equipdescription']) - 1; $x++) {
							$ownequiparray = array('code' => addslashes(trim($prcode)),
								'type' => 'own',
								'description' => addslashes($params['equipdescription'][$x]),
								'quantity' => $params['equipquantity'][$x],
								'rateperhour' => $this->numericOnly($params['equipratehour'][$x]),
								'rateperhour' => $this->numericOnly($params['equiprateshift'][$x]),
								'fuelgalpershift' => $this->numericOnly($params['equipfuelgalshift'][$x]),
								'consumedgalpershift' => $this->numericOnly($params['equipconsumegalshift'][$x]),
								'fuelpergal' => $params['fuelpergal'],
								'createdby' => $this->session->userdata('username')
							);
							$this->buildequipment($ownequiparray);
							$ownequiparray = array('');
						}
					}
					
					//processequip rented
					if(isset($params['rentequipdescription'])){
						for ($x = 0; $x <= count($params['rentequipdescription']) - 1; $x++) {
							$rentequiparray = array('code' => addslashes(trim($prcode)),
								'type' => 'rented',
								'description' => addslashes($params['rentequipdescription'][$x]),
								'quantity' => $params['rentequipquantity'][$x],
								'rateperhour' => $this->numericOnly($params['rentequipratehour'][$x]),
								'rateperhour' => $this->numericOnly($params['rentequiprateshift'][$x]),
								'fuelgalpershift' => $this->numericOnly($params['rentequipfuelgalshift'][$x]),
								'consumedgalpershift' => $this->numericOnly($params['rentequipconsumegalshift'][$x]),
								'fuelpergal' => $params['fuelpergal'],
								'createdby' => $this->session->userdata('username')
							);
							$this->buildequipment($rentequiparray);
							$rentequiparray = array('');
						}
					}
					//process bidsummary
					
					if(isset($params['bidsumdescription'])){
						for ($x = 0; $x <= count($params['bidsumdescription']) - 1; $x++) {
							$bidsumarray = array('code' => addslashes(trim($prcode)),
								'description' => addslashes($params['bidsumdescription'][$x]),
								'subdesc' => $params['bidsumsubdesc'][$x],
								'cost' => $this->numericOnly($params['bidsumcost'][$x]),
								'markup' => $this->numericOnly($params['bidsummarkup'][$x]),
								'totalbid' => $this->numericOnly($params['bidsumtotalbid'][$x]),
								'createdby' => $this->session->userdata('username')
							);
							$this->buildbidsum($bidsumarray);
							$bidsumarray = array('');
						}
					}
					
					//processsummary
					$summary = array('code' => addslashes(trim($prcode)),
							'laborstd' => addslashes($this->numericOnly($params['qslaborstd'])),
							'labor1' => addslashes($this->numericOnly($params['qslabor1'])),
							'labor2' => addslashes($this->numericOnly($params['qslabor2'])),
							'equipment' => addslashes($this->numericOnly($params['qsequipment'])),
							'material' => addslashes($this->numericOnly($params['qsmaterial'])),
							'mobilization' => addslashes($this->numericOnly($params['qsmobilization'])),
							'subcontract' => addslashes($this->numericOnly($params['qssubcontract'])),
							'liabilities' => addslashes($this->numericOnly($params['qsliabilities'])),
							'pricecf' => addslashes($this->numericOnly($params['qspricecf'])),
							'pricept' => addslashes($this->numericOnly($params['qspricept'])),
							'createdby' => $this->session->userdata('username')
						);
					$this->buildsummary($summary);
					$summary = array('');

					//processjobbudget
					$jobbudget = array('code' => addslashes(trim($prcode)),
							'actualmisc' => addslashes($this->numericOnly($params['actualmisc'])),
							'actuallabor' => addslashes($this->numericOnly($params['actuallabor'])),
							'actualequipment' => addslashes($this->numericOnly($params['actualequipment'])),
							'actualmaterial' => addslashes($this->numericOnly($params['actualmaterial'])),
							'actualsubcon' => addslashes($this->numericOnly($params['actualsubcon'])),
							'jblabor' => addslashes($this->numericOnly($params['jblabor'])),
							'jbmisc' => addslashes($this->numericOnly($params['jbmisc'])),
							'jbpermmaterial' => addslashes($this->numericOnly($params['jbpermmaterial'])),
							'jbsupplies' => addslashes($this->numericOnly($params['jbsupplies'])),
							'jboutequip' => addslashes($this->numericOnly($params['jboutequip'])),
							'jbsubstence' => addslashes($this->numericOnly($params['jbsubstence'])),
							'jbbackcharge' => addslashes($this->numericOnly($params['jbbackcharge'])),
							'grossmargin' => addslashes($this->numericOnly($params['grossmargin'])),
							'internalequip' => addslashes($this->numericOnly($params['internalequip'])),
							'ohprofit' => addslashes($this->numericOnly($params['ohprofit'])),
							'createdby' => $this->session->userdata('username')
						);
					$this->buildjobcost($jobbudget);
					$jobbudget = array('');
					
					echo "done";
				}
				else {
					show_404();
				}
			}
			
		}
		elseif($action == "update") {

		}
		elseif($action == "delete") {
			if($module == "estimatelist"){
				if($this->input->post('admin_id') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_Estimation($this->input->post('admin_id'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("estimation/preview","An error occurred when deleting record!","error");
						} else {
							echo true;
						}
					}
					else {
						$this->redirector("estimation/preview","Invalid parameters passed!","error");
					}
			}
		}
		elseif($action == "retrieve") {
			if($module == "typeofwork") {		
				$work = $this->showworktypes();
				$htm = "";
				foreach($work as $key=>$val){
					$htm .= '<option value="'.$val->id.'">'.$val->description.'</option>';
				}
				echo $htm;
			}
			elseif($module == "labortemplate"){
				if($search <> ""){
					$temp = $this->showtemplate('labor', trim($search));
					$laborarray['labor'] = $temp;
					echo json_encode($laborarray);
				}
			}
			elseif($module == "materialtemplate"){
				if($search <> ""){
					$temp = $this->showtemplate('material', trim($search));
					$materialarray['material'] = $temp;
					echo json_encode($materialarray);
				}
			}
			elseif($module == "misctemplate"){
				if($search <> ""){
					$temp = $this->showtemplate('misc', trim($search));
					$miscarray['misc'] = $temp;
					echo json_encode($miscarray);
				}
			}
			elseif($module == "subcontemplate"){
				if($search <> ""){
					$temp = $this->showtemplate('subcon', trim($search));
					$subconarray['subcon'] = $temp;
					echo json_encode($subconarray);
				}
			}
			elseif($module == "equipmenttemplate"){
				if($search <> ""){
					$temp = $this->showtemplate('equipment', trim($search));
					$equiparray['equipment'] = $temp;
					echo json_encode($equiparray);
				}
			}
			elseif($module == "bidsumtemplate"){
				if($search <> ""){
					$temp = $this->showtemplate('bidsummary', trim($search));
					$bidsumarray['bidsummary'] = $temp;
					echo json_encode($bidsumarray);
				}
			}
			elseif($module == "projectestimation"){
				if($search <> ""){
					$estimation = array();
					
					$maintemp = $this->showestimation('master', trim($search));
					$mainarray['main'] = $maintemp;
					
					array_push($estimation, $mainarray);
					
					$bidsumtemp = $this->showestimation('bidsummary', trim($search));
					$bidsumarray['bidsummary'] = $bidsumtemp;
					
					array_push($estimation, $bidsumarray);
					
					$labortemp = $this->showestimation('labor', trim($search));
					$laborarray['labor'] = $labortemp;
					
					array_push($estimation, $laborarray);
					
					$materialtemp = $this->showestimation('material', trim($search));
					$materialarray['material'] = $materialtemp;
					
					array_push($estimation, $materialarray);

					$misctemp = $this->showestimation('misc', trim($search));
					$miscarray['misc'] = $misctemp;
					
					array_push($estimation, $miscarray);

					$subcontemp = $this->showestimation('subcon', trim($search));
					$subconarray['subcon'] = $subcontemp;
					
					array_push($estimation, $subconarray);

					$equiptemp = $this->showestimation('equipment', trim($search));
					$equiparray['equipment'] = $equiptemp;
					
					array_push($estimation, $equiparray);

					$jbcosttemp = $this->showestimation('jobcost', trim($search));
					$jbarray['jobcost'] = $jbcosttemp;
					
					array_push($estimation, $jbarray);
					
					$data['data'] = $estimation;
					
					echo json_encode($data);
				}
			}
			elseif($module == "estimatelist"){
				$html = "";
				$data = $this->showprojectestimation();
				if($data != false){
					foreach($data as $row) {
						$html .= "<tr>";
						$html .= "<td>$row->code</td>";
						$html .= "<td>$row->client</td>";
						$html .= "<td>$row->typeofwork</td>";
						$html .= "<td>$row->location</td>";
						$html .= "<td>$row->estimatedby</td>";
						$html .= "<td>$row->estimateddate</td>";
						$html .= "<td>
									<button data-toggle='tooltip' title='Preview Record' type='button' onclick=\"renderestimation('".$row->code."');\" class='btn btn-info'><i class='fa fa-eye'></i></button>
									<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"deleteEstimate('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
								  </td>";
					}
				}
				echo $html;
			}
			
		}
		else {
			show_404();
		}
	}
	
	public function buildestimate($data){
		$this->load->model('Estimation', 'estimate');
		return $this->estimate->insert_estimate($data);
	}
	
	public function buildlabor($data){
		$this->load->model('Estimation', 'newlabor');
		return $this->newlabor->insert_labor($data);
	}
	
	public function buildmaterial($data){
		$this->load->model('Estimation', 'newmaterial');
		return $this->newmaterial->insert_material($data);
	}
	
	public function buildmisc($data){
		$this->load->model('Estimation', 'newmisc');
		return $this->newmisc->insert_misc($data);
	}
	
	public function buildsubcon($data){
		$this->load->model('Estimation', 'newsubcon');
		return $this->newsubcon->insert_subcon($data);
	}
	
	public function buildequipment($data){
		$this->load->model('Estimation', 'newequip');
		return $this->newequip->insert_equip($data);
	}
	
	public function buildsummary($data){
		$this->load->model('Estimation', 'newsummary');
		return $this->newsummary->insert_summary($data);
	}
	
	public function buildbidsum($data){
		$this->load->model('Estimation', 'newbidsum');
		return $this->newbidsum->insert_bidsummary($data);
	}
	
	public function buildjobcost($data){
		$this->load->model('Estimation', 'newjobbudjet');
		return $this->newjobbudjet->insert_jobbudget($data);
	}
	
	public function showworktypes(){
		$this->load->model('Estimation', 'worktype');
		return $this->worktype->gettypeofwork();
	}
	
	public function showtemplate($tbl, $code){
		$this->load->model('Estimation', 'template');
		return $this->template->getTemplate('template_'.$tbl, $code);
	}
	
	public function showestimation($tbl, $code){
		$this->load->model('Estimation', 'calculation');
		return $this->calculation->getEstimate('estimate_'.$tbl, $code);
	}
	
	public function showprojectestimation(){
		$this->load->model('Estimation', 'projestimate');
		return $this->projestimate->getProject();
	}
	
	public function Delete_Estimation($adminid,$id){
		if($adminid <> "" && $id <> "") {
			$this->load->model('Estimation','estimate');
			$rr = $this->estimate->delete_Estimate($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function numericOnly($str){
		return preg_replace("/[^0-9.]/", "", $str);
	}
	
	
	
}