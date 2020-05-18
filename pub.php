<?php 
	require_once "connect.php";
	require_once 'phpMQTT.php';
	
	$topic = $_POST["topic"];
	$message = $_POST["message"];
	$client_id = $_POST["client_id"];

	if($message != "" && $message != " "){
		$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
		if ($mqtt->connect(true, NULL, $user, $pass)) {
			$mqtt->publish($topic, $message, 0);
			$mqtt->close();
			$return = array($topic, "\n", $client_id, "\n", $message);
			// $return = "mesaj iletildi";
			echo json_encode($return);
		}else{
			echo json_encode("Basarisiz ya da zaman asimi");
		}
	}
?>