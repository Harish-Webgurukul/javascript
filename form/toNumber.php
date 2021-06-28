<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ascii</title>
	</head>
	<body>
		<p>ASCII code to Character</p>
		<p> <input type="text" id="i1" onkeyup="fun()"></p>
		<p id="op"></p>
		<script type="text/javascript">
			//ascii code with length 
			i1 = document.getElementById('i1');
			op = document.getElementById('op');

			function fun(){
			//convert to character 
				op.innerHTML = String.fromCharCode(i1.value);	
			}
		</script>
	</body>
</html>