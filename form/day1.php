<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h2>Form selector</h2>
	<p>
		<input type="text" id="i1" onkeyup="fun()">
	</p>
	<p id="op"></p>

	<script type="text/javascript">
		inputForm = document.getElementById('i1');
		op = document.getElementById('op');
		
		function fun(){
			op.innerHTML = inputForm.value;
			console.log(inputForm.value);
		}
		

	</script>
</body>
</html>