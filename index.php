<?php 
	require_once "db.php";
?>

<!DOCTYPE html>
<html>

<head>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>ANA SAYFA</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" </head>

<body>
    <div class="form">
        Client ID:<br>
        <select id="client_id">
            <?php
			$sql = "SELECT * FROM devices";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$client_id = $row['client_id'];
					echo "<option value='$client_id'>$client_id</option>";
				}
			}	
		?>

        </select><br>
        Başlığı girin:<br>
        <select id="topic">
            <?php 
			$sql = "SELECT * FROM topics";
			$result = $conn->query($sql);

			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$topic = $row['topic_name'];
					echo "<option value='$topic'>$topic</option>";
				}
			}
		?>
        </select><br>
        Mesajınızı girin:<br>
        <textarea name="message" id="message"></textarea><br>
        <button onclick="yayinla()">Yayinla</button>
        <button onclick="takipEt()">Takip Et</button>
    </div>

    <div class="return" id="panel">
        Takip Edilen Topic: 
        <div class="topic-name" id="topic-name">
            
        </div>
    </div>

</body>

</html>