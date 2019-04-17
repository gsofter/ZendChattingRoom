var lastLine_ = 0;
var lineCount_ = 0;

$(document).ready(function(){
	// $.post("php/main.php",{action: "getSession"}, function(data) {
	// 	var json = jQuery.parseJSON(data);
	// 	$("#currentUsername").text(json["username"]);
	// });

	
	$("#sendMsg").click(function() {
		var userMsg = $("#message").val();
		console.log(userMsg);
		$.post("/user/message",{action: "post", content: userMsg});
		$("#message").val("");
		return false;
	});
	

	setInterval (loadChatLog, 1000);
});


function loadChatLog() {
	var lastScrollHeight = $("#chatBox").prop('scrollHeight');
	var chatbox = $("#chatBox");
	
	$.get("/user/listuser", function(txt) {
		// console.log(txt.users);
		var users = txt.users;
		var innerHtml = '';
		$("tbody").empty();
		for (var i = 0; i < users.length; i++) {
			innerHtml += '<tr><td>'
			innerHtml += users[i]['date']
			innerHtml += '</td>'

			innerHtml += '<td>'
			innerHtml += users[i]['content']
			innerHtml += '</td></tr>'
		}
		$(innerHtml).appendTo("tbody");
	});
}

//Get the line count and the line to append to the chat 
function setLines(lineCount, lastLine) {
	lineCount_ = lineCount;
	lastLine_ = lastLine;
}