<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clock</title>
</head>
<body>
	<h2>Digital Clock</h2>
	<p id="op"></p>
	<script type="text/javascript">
		op = document.getElementById('op');
	function fun() {
		//Date is object 
		//new is used to create new object from Date
			d = new Date();
			hr = d.getHours();
			mn = d.getMinutes();
			sec = d.getSeconds();
			mnsec = d.getMilliseconds();
			op.innerHTML = hr+":"+mn+":"+sec+":"+mnsec;
			op.style.color= "rgb("+(sec+20)+","+(sec+90)+","+(sec+65)+")";
	}


	setInterval("fun()", 1000);
	</script>
</body>
</html>