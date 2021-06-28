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
			//op.innerHTML = "Your Input is "+inputForm.value;
			op.innerHTML = "Your Input is "+inputForm.value.length;
			console.log(inputForm.value);
		}
		

	</script>
</body>
</html>