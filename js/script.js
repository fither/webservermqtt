function yayinla(){
	var client_id = document.getElementById("client_id").value;
	var topic = document.getElementById("topic").value;
	var message = document.getElementById("message").value;

	$.ajax({
		type:"post",
		url:"pub.php",
		data:{'client_id': client_id, 'topic': topic, 'message': message},
		datatype: "json",
		success:function(veri){
			console.log(veri);
		}
	})
}

function takipEt(){
	var topic = document.getElementById("topic").value;
	var topc_name = document.getElementById("topic-name");
	topc_name.innerHTML = topic;
	takipEt2();
}

function takipEt2(){
	var client_id = document.getElementById("client_id").value;
	var topic = document.getElementById("topic").value;
	
	$.ajax({
		type:"post",
		url:"sub.php",
		data:{'client_id': client_id, 'topic': topic},
		datatype: "json",
		success:function(veri){
			var date = new Date();
			veri += '<br>';
			veri += date.getHours();
			veri += ':';
			veri += date.getMinutes();
			veri += ':';
			veri += date.getSeconds();
			console.log(veri);
			var panel = document.getElementById("panel");
			var satir = document.createElement("p");
			$(satir)
			.html(veri)
			.appendTo(panel);
			takipEt2();
		}
	})
}