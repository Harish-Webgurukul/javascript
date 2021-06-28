<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<p onmouseover="fun(this, 'red')">this is para1</p>
	<p onmouseover="fun(this, 'blue')">this is para2</p>
	<p onmouseover="fun(this, 'red')" onmouseout="fun(this, 'yellow')">this is para2</p>
		
	<script type="text/javascript">
	
		function fun(arg, cs){
			console.log(arg)
			arg.style.color=cs
		}

	</script>
</body>
</html>