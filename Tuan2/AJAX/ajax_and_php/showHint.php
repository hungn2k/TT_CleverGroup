<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<script >
	function showHint(str){
		if(str.length == 0){
			document.getElementById("txtHint").innerHTML = "";
		return;
		}
	}else {
		var xmlhttp = new new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status ==200) {
				document.getElementById("txtHint").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", 'gethint.php?q=' + str , true);
		xmlhttp.send();
	}
</script>
</head>
<body>
	<p><b>Start typing a name in the input field below:</b></p>
	<form action="">
		<label for="fname">First name:</label>
		<input type="text" name="fmame" id="fname" onkeyup="showHint($this.value) ">
	</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>