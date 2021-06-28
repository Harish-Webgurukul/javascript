<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>javascript</title>
		<style type="text/css">
			#div1{
				height: 100px;
				width:  100px;
				background: red;
			}
		</style>
	</head>
	<body>

		<button onclick="clearInterval(a)">Stop</button>

		<div id="div1"></div>
			<script type="text/javascript">
			
			d = document.getElementById('div1'); //element fetch using id 
			i=0;
			function ltor() {
				d.style.marginLeft = i+"px";
				i=i+5;
				console.log(i);		
   			}

			//setTimeout("ltor()", 5000); //call only once
			a = setInterval("ltor()", 100); //call every 100 milisecond

		</script>
	</body>
</html>	