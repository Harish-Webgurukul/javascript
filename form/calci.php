<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h2>Calculator </h2>
	<p>Num1<input type="text" id="i1" onkeyup="fun()"></p>
	<p>Num1<input type="text" id="i2" onkeyup="fun()"></p>
	<p id="op"></p>

	<script type="text/javascript">
		i1 = document.getElementById('i1');
		i2 = document.getElementById('i2');
		op = document.getElementById('op');
		console.log(i1);
		function fun(){
			total = parseInt(i1.value) +  parseInt(i2.value)
			
			//it will check total is number or Not
			if(isNaN(total)){
				op.innerHTML = "Input both the number!";
			}
			else{
				op.innerHTML = "sum is "+total; //concatenate
			} 
		}
		
	</script>
</body>
</html>