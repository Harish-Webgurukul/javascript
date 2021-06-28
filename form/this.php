<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

		<p>Username <input type="text"  id="i1" onkeyup="fun(this)"></p>
		<p id="op"></p>
		

	<script type="text/javascript">
		op = document.getElementById('op');

		function fun(arg){
			op.innerHTML = arg.value.toUpperCase();
		}

	</script>
</body>
</html>