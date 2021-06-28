<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<p> Username : <input type="text" id="i1" onkeyup="check(this, 'Username')"> </p>
	<p> Email: <input type="text" id="i1" onkeyup="check(this, 'Email')"> </p>
	<p> Password <input type="text" id="i1"  onkeyup="check(this, 'Passwords')"> </p>
	<p id="op"></p>
		
	<script type="text/javascript">
		op = document.getElementById('op');

		function check(arg, nm){
			if(arg.value == ""){
				op.innerHTML = "Please Enter Something in "+nm;
				op.style.color="red";
			}
			else{
				op.innerHTML="";
			}
		}

	</script>
</body>
</html>