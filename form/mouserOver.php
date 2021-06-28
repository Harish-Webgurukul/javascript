<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mouseover mouse out</title>
	<style type="text/css">
		#div1{
			height: 100px;
			width: 100px;
			background: green;
		}
	</style>
</head>
<body>
	<div id="div1" onmouseover="fun1()" onmouseout="fun2()">
	</div>
	<script type="text/javascript">
		d1 = document.getElementById('div1');

		function fun1(){
			d1.style.background="green";
		}
		function fun2(){
			d1.style.background="red";

		}
	</script>
</body>
</html>