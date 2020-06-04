<?php
function insertRouter($routerData){ 		
	$routersapid=$routerData["routersapid"];
	$routerhostname=$routerData["routerhostname"];
	$routerloopback=$routerData["routerloopback"];
	$routermac=$routerData["routermac"];		
	$empQuery="
		INSERT INTO ".$this->router_details." 
		SET sapid='".$routersapid."', hostname='".$routerhostname."', loopback='".$routerloopback."', mac_address='".$routermac.'";
	if( mysqli_query($this->dbConnect, $empQuery)) {
		$messgae = "router record created Successfully.";
		$status = 1;			
	} else {
		$messgae = "router record creation failed.";
		$status = 0;			
	}
	$routerResponse = array(
		'status' => $status,
		'status_message' => $messgae
	);
	header('Content-Type: application/json');
	echo json_encode($empResponse);
}
?>
