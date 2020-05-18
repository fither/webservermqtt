<?php
	require_once "connect.php";
	require_once "phpMQTT/phpMQTT.php";

	$topic = $_POST['topic'];
	$client_id = $_POST['client_id'];

	$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
	if(!$mqtt->connect(true, NULL, $user, $pass)) {
		exit(1);
	}

	echo @$mqtt->subscribeAndWaitForMessage($topic, 0);

	$mqtt->close();

?>