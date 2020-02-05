<html>
	<head>
		<title>My First Javascript Query</title>
	</head>
	<body onload="makeRequest();">

<script>
  	var req;

	function makeRequest() {
    if (window.XMLHttpRequest) { 
        req = new XMLHttpRequest(); 
    }
    else if (window.ActiveXObject) {    	
        req = new ActiveXObject("Msxml2.XMLHTTP");
    }
    else {
    	// Ajax not supported
			return;
    }
        
		req.onreadystatechange = function() {
		var txt = "";
    if (this.readyState == 4 && this.status == 200) {
			var response = this.responseText;	
			console.log (response);						
							
			
     document.getElementById("answer").innerHTML = response;
     
     
    }
	};
	
}

	function askQuestion() {
		question = document.getElementById ("question").value;
		ball_type = document.getElementById ("ball_type");
			
	  selected_type_index = ball_type.selectedIndex;
	  selected_type = ball_type.options[selected_type_index].value;
	  
			
	  req.open("GET", "http://imaginary-realities.com/hate_ball_get_post_no_format.php?question=" + question + "&action=" + selected_type, true);
  	req.send();

	}
</script>

<p>Question: <input type = "text" id = "question"></input></p>

<p>
<select id = "ball_type">
	<option value = "standard">Standard eight ball</option>
	<option value = "hate">Standard hate ball</option>
</select>	
</p>

<h1>Hate Ball Answer</h1>

<p id="answer">Answer will go here</p>

<input type = "button" value = "Ask your question!" onclick = "askQuestion();" />
</body>
</html>