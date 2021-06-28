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
		<button onclick="ltor()">Left to Right</button>
		<button onclick="rtol()">Right to Left</button>

		<div id="div1"></div>
			<script type="text/javascript">
			
			d = document.getElementById('div1'); //element fetch using id 
			i=0
			function ltor() {
				console.log(i)
				d.style.marginLeft = i+"px";
				i=i+10	
			}

			
			function rtol() {
				console.log(i)
				if(i>0){
					i=i-10;
				  d.style.marginLeft = i+"px";
				  	}
				}
		</script>
	</body>
</html>	