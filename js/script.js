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
	var client_id = document.getElementById("client_id").value;
	var topic = document.getElementById("topic").value;
	var topic_name = document.getElementById("topic-name");
	topic_name.innerText = topic;
	
	$.ajax({
		type:"post",
		url:"sub2.php",
		data:{'client_id': client_id, 'topic': topic},
		datatype: "json",
		success:function(veri){
			console.log(veri);
			var panel = document.getElementById("panel");
			var satir = document.createElement("p");
			$(satir)
			.html(veri)
			.appendTo(panel);
			takipEt();
		}
	})
}