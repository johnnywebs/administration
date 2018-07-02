<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Google\Cloud\Firestore\FirestoreClient;
class Firebase_controller extends CI_Controller {
	
	public function index() {
		$firestore = new FirestoreClient(['projectId' => 'mytimesheet-9d4a0',"keyFilePath" => "./key.json"]);
		$empLogs = $firestore->collection('employee_logs');
		$docEmpLogs = $empLogs->documents();
		$result = array();
		foreach ($docEmpLogs as $document) {
			if ($document->exists()) {
				foreach($document->data() as $key=>$val) {
					if(is_object($val)) { 
						$objClass = get_class($val);
						switch($objClass) {
							case "Google\Cloud\Core\GeoPoint":
								$res = $val->latitude() . "," . $val->longitude();
								$result[$key] = $res;
							break;
							case "Google\Cloud\Core\Timestamp":
								$res = date("Y-m-d H:i:s",strtotime($val));
								$result[$key] = $res;
							break;
						}
					} 
					else { 
						$result[$key] = $val;
					}
				}
			}
		}

		foreach($result as $key => $val) {
			echo $key . " - " . $val . "<br/>";
		}
	}
	
	public function retrieveData($database) {
		$firestore = new FirestoreClient(['projectId' => 'mytimesheet-9d4a0',"keyFilePath" => "./key.json"]);
		$empLogs = $firestore->collection($database);
		$docEmpLogs = $empLogs->documents();
		$result = array();
		foreach ($docEmpLogs as $document) {
			if ($document->exists()) {
				foreach($document->data() as $key=>$val) {
					if($key != "uploaded") {
						if(is_object($val)) { 
							$objClass = get_class($val);
							switch($objClass) {
								case "Google\Cloud\Core\GeoPoint":
									$res = $val->latitude() . "," . $val->longitude();
									$result[$key] = $res;
								break;
								case "Google\Cloud\Core\Timestamp":
									$res = date("Y-m-d H:i:s",strtotime($val));
									$result[$key] = $res;
								break;
							}
						} 
						else { 
							$result[$key] = $val;
						}
					}
				}
			}
		}
		
		$this->load->model('Firebase','fbase');
		$result = $this->fbase->saveData($database,$result);
		if($result) { print("success".PHP_EOL); } else { print("failed".PHP_EOL); }
	}
	
}