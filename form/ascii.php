<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ascii</title>
	</head>
	<body>
		<p>Alphabet</p>
		<p> <input type="text" id="i1" onkeyup="fun()"></p>
		<p id="op"></p>
		<script type="text/javascript">
			//ascii code with length 
			i1 = document.getElementById('i1');
			op = document.getElementById('op');

			function fun(){
				length = i1.value.length;
				asci = i1.value.charCodeAt(length-1);

				if(asci >= 65 && asci<=90){
					op.innerHTML="You entered Uppercase ascii code "+asci;
				}
				else if(asci >=97 && asci<=122){
					op.innerHTML="You entered Lowercase "+asci;
				}
				else{
					op.innerHTML="You have entered number or special character "+asci;
				}
			}
		</script>
	</body>
</html>