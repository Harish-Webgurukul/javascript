<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rotate</title>
	<style type="text/css">
		#div1{
			height: 100px;
			width: 100px;
			background: red;
			margin: 50px;
		}
	</style>
</head>
<body>
	<button onclick="rotate1()">Rotate</button>

	<div id="div1"></div>
	
	<script type="text/javascript">
		d1 = document.getElementById('div1');
		i=0;
		function rotate1(){
			d1.style.transform = "rotate("+-i+"deg)";
			i=i+10
			console.log(i);
		}
	</script>
</body>
</html>




