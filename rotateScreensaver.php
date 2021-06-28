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
			margin: 10px;
		}
	</style>
</head>
<body>


	<div id="div1" onclick="change()"></div>
	
	<script type="text/javascript">
		d1 = document.getElementById('div1');
		i=0;
		j=0;
		k=0;
		function change(){
			d1.style.background = "rgb("+i+","+j+","+k+")";
			d1.style.transform = "rotate("+i+"deg)";
			i=i+5
			j=j+10
			k=k+15
			if(i>=255){i=0}
			if(j>=255){j=0}
			if(k>=255){k=0}
			console.log(i,j,k);
		}
	</script>
</body>
</html>




