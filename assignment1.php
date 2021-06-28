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
			/*margin: 50px;*/
		}
	</style>
</head>
<body>
	

	<div id="div1" ></div>
	
	<script type="text/javascript">
d=document.getElementById('div1')
		i=200
		j=0;
		k=0;
		l=0;

		//function move(){
			// d.style.marginLeft=i+"px";
			setTimeout("ltor()", 2000);

			setTimeout("ttob()", 4000);
			setTimeout("btol()", 6000);
			setTimeout("btot()", 8000);
			
		
		//}

		function ltor(){
		d.style.marginLeft=i+"px";
			d.style.background = "rgb("+j+","+k+","+l+")";
			j=j+5
			k=k+10
			l=l+15
			if(j>=255){j=0}
			if(k>=255){k=0}
			if(l>=255){l=0}	
			
			
		}



		function ttob(){
			d.style.marginTop=i+"px";
			
			d.style.background = "rgb("+j+","+k+","+l+")";
			j=j+5
			k=k+10
			l=l+15
			if(j>=255){j=0}
			if(k>=255){k=0}
			if(l>=255){l=0}	
			
		}

		function btol(){
			i=i-200
			d.style.marginLeft=i+"px";
		
			d1.style.background = "rgb("+j+","+k+","+l+")";
			j=j+5
			k=k+10
			l=l+15
			if(j>=255){j=0}
			if(k>=255){k=0}
			if(l>=255){l=0}	
				
			
			
		}
		function btot(){
			console.log(i)
			// d.style.marginTop="20px";
				d.style.marginTop=i+"px";

			d.style.background = "rgb("+j+","+k+","+l+")";
			j=j+5
			k=k+10
			l=l+15
			if(j>=255){j=0}
			if(k>=255){k=0}
			if(l>=255){l=0}	
				
			
			
		}
		a = setInterval("ltor()","ttob()","btol()","btot()" ,100);

		
	</script>
</body>
</html>

