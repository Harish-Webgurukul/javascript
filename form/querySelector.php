<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<p class="paraG" id="para1">paragraph</p>
		<p class="paraG">paragraph</p>
		<hr>
		<p class="paraG">
			<a href="#">Click</a>
		</p>
		<p class="paraG">paragraph</p>

		<script type="text/javascript">
			//select first Element
			//p1 = document.querySelector('p');

			//select all elements by tag name
			//p1 = document.querySelectorAll('p');

			//select element by id
			//p1 = document.querySelectorAll('#para1');

			//select element by class
			//p1 = document.querySelectorAll('.paraG');


			//select element by class
			p1 = document.querySelectorAll('.paraG a');
			console.log(p1);

		</script>
	</body>
</html>