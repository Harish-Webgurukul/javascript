<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movement</title>
	<style type="text/css">
		body{
	
			padding:20px;
		}
		.box{
			width:100px;
			height:100px;
			background-color:green;
			margin-top:0px;
			margin-left:0px;
		}
		button{
			margin-bottom:20px;
		}
	</style>
</head>
<body>
    <button onclick="clearInterval(a)">stop</button>
    <div class="box" id="box"></div>

    <script type="text/javascript">
    	d=document.getElementById('box');
    	console.log(d);
    	i=0;
    	a=0;
    	b=0;
      
    	function move(){
    		d.style.background= "rgb("+a+","+i+","+b+")";
    		if(i<=100)
    		{
    		d.style.marginLeft= a + "px";

    		a=a+5;

    	    }
    	    else if(i>=100 && i<=200)
    		{
    		d.style.marginTop= b + "px";
    		b=b+5;
    	    }
    	    else if(i>=200 && i<=300)
    		{
    		d.style.marginLeft= a + "px";
    		a=a-5;
    	    }
    	    else if(i>=300 && i<=400)
    		{
    		d.style.marginTop= b + "px";
    		b=b-5;
    	    }
    	    if(i>400){
    	    	i=0;
    	    }
    		i=i+5;
    		console.log(i);
    	}

    	a = setInterval("move()",100);
    	
    </script>
</body>
</html>