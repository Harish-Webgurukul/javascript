<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rotate</title>
	<style type="text/css">
		#div1{
			height: 900px;
			width: 100%;
			background: red;
			margin: 10px;
		}
	</style>
</head>
<body>
	<div id="div1" onclick="clearInterval(a)"></div>
	
	<script type="text/javascript">
		d1 = document.getElementById('div1');
		i=0;
		j=0;
		k=0;
		function change(){
			d1.style.background = "rgb("+i+","+j+","+k+")";
			i=i+10
			j=j+20
			k=k+30
			if(i>=255){i=0}
			if(j>=255){j=0}
			if(k>=255){k=0}
			console.log(i,j,k);
		}
		a = setInterval("change()", 100);

	</script>
</body>
</html>




