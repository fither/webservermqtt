<!DOCTYPE html>
<html>
<head>
	<title>SUBSCRIBE</title>
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<div id="panel">


	</div>

	<script type="text/javascript">
		function getir(){
			$.ajax({
				url: 'sub2.php',
				type: 'post',
				datatype: 'json',
				data: {'topic': 'message/#', 'client_id': 'client1'},
				success: function(veri){
					console.log(veri);
					var panel = document.getElementById("panel");
					var satir = document.createElement("p");
					$(satir)
					.html(veri)
					.appendTo(panel);
					getir();
				}
			});
		}

		$(document).ready(function(){
			getir();
		});
	</script>

</body>
</html>
