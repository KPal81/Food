<html>
<body style="background-color:rgb(16, 161, 50)">
<style>
	.shah {
    	border-radius: 12px;
    	border:1px solid #74D600;
    	background-color: #74D600;
    	color: #FFFFFF;
    	font-family: Franklin Gothic Medium Cond, sans-serif;
    	font-size: 200%;
	}
	#patel {
		text-align: center;
		position: absolute;
		top: 50%;
		left: 50%;
		z-index: 20;
		-ms-transform: translate(-50%,-50%); /* IE 9 */
	   	-webkit-transform: translate(-50%,-50%); /* Safari */
	    transform: translate(-50%,-50%);
	    -moz-transform: translate(-50%, -50%);
	}
</style>
<div id="patel">
<form action="main.php">
<button class="shah">GO HOME</button>
</form>
</div> 
<?php
	$temp=fopen("temp.txt","r+");
	$user=fgets($temp);
	fclose($temp);
	unlink($user.".txt");
	$myfile = fopen("temp.txt", "w+");
	fclose($myfile);

?>
</body>
</html>
