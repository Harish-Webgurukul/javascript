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
	<button onclick="change()">Change Color</button>

	<div id="div1"></div>
	
	<script type="text/javascript">
		d1 = document.getElementById('div1');
		i=0;
		j=0;
		k=0;
		function change(){
			d1.style.background = "rgb("+i+","+j+","+k+")";
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




