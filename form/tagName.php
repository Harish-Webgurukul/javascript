<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<p class="paraG">paragraph</p>
		<p class="paraG">paragraph</p>
		<hr>
		<p class="paraG">paragraph</p>
		<p class="paraG">paragraph</p>
		<script type="text/javascript">
			p1 = document.getElementsByTagName('p');
			console.log(p1);
			p1[0].style.color="red";
			p1[2].style.color="green";
		</script>
	</body>
</html>