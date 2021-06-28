<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rotate</title>
	<style type="text/css">
		#div1{
			margin:  100px;
			height: 100px;
			width: 100px;
			background: red;
		}
	</style>
</head>
<body>
	
	<div id="div1"></div>
	
	<script type="text/javascript">
		d1 = document.getElementById('div1');
		i=0;
		j=0;
		k=0;
		function rotate1(){
			d1.style.transform = "rotate("+i+"deg)";
			d1.style.background = "rgb("+i+","+j+","+k+")";

			i=i+5
			j=j+10
			k=k+15
			if(i>=255){i=0}
			if(j>=255){j=0}
			if(k>=255){k=0}
			console.log(i,j,k);
		}
		a = setInterval("rotate1()", 100);
	</script>
</body>
</html>




