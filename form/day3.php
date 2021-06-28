<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h2>Form selector</h2>
	<p>
		First Name: <input type="text" id="i1" onkeyup="fun()">
	</p>
	<p id="op"></p>

	<script type="text/javascript">
		inputForm = document.getElementById('i1');
		op = document.getElementById('op');
		
		function fun(){
			l = inputForm.value.length;  //it will return the length
			if(l>10){
				op.style.color="red";
				op.innerHTML = "Name should be less than 10";
			}
			else{
				op.style.color="green";
				op.innerHTML = "Valid!";
			}
			
			
		}
		

	</script>
</body>
</html>