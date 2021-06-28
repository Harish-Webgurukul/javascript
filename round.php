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
    <button onclick="start()">Start</button>
    <button onclick="stop()">Stop</button>
    <div class="box" id="box"></div>

    <script type="text/javascript">
    	d=document.getElementById('box');
    	console.log(d);
    	i=0;
    	j=0;

    	function lTor(){
    	d.style.marginLeft= i+"px";
    	
    	if(i>=200){ 
    		clearInterval(a)
    		b = setInterval("tTob()",10);
    	 }

    	i++;
    	}

    	function tTob(){
    	d.style.marginTop= j+"px";
    	if(j>=200){ 
    		clearInterval(b) 
    		c = setInterval("rTol()", 10)
    	}

    	j++;
    	}

    	function rTol(){
    	d.style.marginLeft= i+"px";
    	
    	if(i<=0){ 
    		clearInterval(c)
    		x = setInterval("bTot()", 10)
    	 }
    	i--;
    	}


    	function bTot(){
    	d.style.marginTop= j+"px";
    	if(j<=0){ 
    		clearInterval(x) 
			start(); // for repeatation
    	}
    	j--;
    	}

    	function start(){
    			a = setInterval("lTor()",10);
    	}

    	function stop(){
    			clearInterval(a); 
    			clearInterval(b); 
    			clearInterval(c); 
    			clearInterval(x); 
    	}
    	
    </script>
</body>
</html>