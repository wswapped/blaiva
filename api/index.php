<?php
	ob_start();
	header("Content-Type:application/json");
	include_once '../conn.php';
	$request = array_merge($_POST, $_GET);
	$action = $request['action']??"";


	$response = '';

	if($action == 'subscribe'){
		//get email
		$email = $request['email']??'';

		if(filter_var($email, FILTER_VALIDATE_EMAIL)){

			//check if user is already subscribed
			$query = $conn->query("SELECT * FROM subscribers WHERE email = \"$email\" ") or trigger_error($conn->error);
			if(!$query->num_rows){
				//insterting in db
				$q = $conn->query("INSERT INTO subscribers(email) VALUES(\"$email\")");
				if($q){
					$response = array('status'=>true, 'msg'=>"", 'data'=>$conn->insert_id);
				}else{
					$response = array('status'=>false, 'msg'=>"Error $conn->error", 'data'=>'');
				}
			}else{
				$response = array('status'=>false, 'msg'=>"Already subscribed", 'data'=>'');
			}
		}else{
			$response = array('status'=>false, 'msg'=>'Invalid email address', 'data'=>'');
		}
	}
	echo json_encode($response);
?>