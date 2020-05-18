<?php 
	require_once "db.php";

?>


<!DOCTYPE html>
<html>

<head>
    <!-- <script src="js/jquery-3.5.1.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>ANA SAYFA</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" </head>

<body>
    <div class="form">
        <!-- <button id="sub"><a href="subscribe.php">sub</a></button><br> -->
        <!-- <button id="sub_and_wait"><a href="subscribe2.php">sub and wait</a></button><br> -->
        Client ID:<br>
        <!-- <input type="text" name="client_id" id="client_id"><br> -->
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

            <!-- <option value="onurum.3411@hotmail.com">onurum.3411@hotmail.com</option>
			<option value="receiver1">receiver1</option>0 -->
        </select><br>
        Başlığı girin:<br>
        <!-- <input type="text" name="topic" id="topic"><br> -->
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
            <!-- <option value="message/istanbul">message/istanbul</option>
			<option value="weather/istanbul">weather/istanbul</option> -->
        </select><br>
        Mesajınızı girin:<br>
        <textarea name="message" id="message"></textarea><br>
        <!-- <input type="text" name="message" id="message"><br> -->
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