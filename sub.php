<!DOCTYPE html>
<html>
<head>
	<title>SUBSCRIBE</title>
	<meta charset="UTF-8">
</head>
<body>

	<div style="width: 500px;height: 500px;color: black">
		
	</div>

</body>
</html>

<?php 

	require_once "connect.php";
	require_once "phpMQTT/phpMQTT.php";

	// $client_id = $_POST['client_id'];
	// $topic = $_POST['topic'];

	$client_id = "onurum.3411@hotmail.com";
	$topic = "message/istanbul";

	$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
	if(!$mqtt->connect(true, NULL, $user, $pass)) {
		exit(1);
	}

	$mqtt->debug = true;

	$topics[$topic] = array('qos' => 0, 'function' => 'procMsg');
	$mqtt->subscribe($topics, 0);

	while($mqtt->proc()) {
	}

	$mqtt->close();

	function procMsg($topic, $msg){
			// echo 'Msg Recieved: ' . date('r') . "\n";
			// echo "Topic: {$topic}\n\n";
			// echo "\t$msg\n\n";
			echo "$msg alindi";
	}
?>