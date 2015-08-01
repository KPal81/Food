<html>
<style>
body {
	overflow:hidden;
}
</style>
<body style="background-color:rgb(16, 161, 50)">
<style>
#sty {
	text-align: center;
	position: absolute;
	top: 50%;
	left: 50%;
	z-index: 20;
	-ms-transform: translate(37%,-50%); /* IE 9 */
   	-webkit-transform: translate(37%,-50%); /* Safari */
    transform: translate(37%,-50%);
    -moz-transform: translate(37%, -50%);

}

#sty2 {
    text-align: center;
	position: absolute;
	top: 50%;
	left: 0%;
	-ms-transform: translate(0%,-50%); /* IE 9 */
   	-webkit-transform: translate(0%,-50%); /* Safari */
    transform: translate(0%,-50%);
    -moz-transform: translate(0%, -50%);
}

#c {
    color: #FFFFFF;
    font-family: Franklin Gothic Medium Cond, sans-serif;
    font-size: 200%
}
#d {
    color: #FFFFFF;
    font-family: Franklin Gothic Medium Cond, sans-serif;
    font-size: 200%;


}
.ing{
    	border-radius: 12px;
    	border:3px solid #74D600;
}

.add{
    	border-radius: 12px;
    	border:1px solid #74D600;
    	background-color: #74D600;
    	color: #FFFFFF;
    	font-family: Franklin Gothic Medium Cond, sans-serif;
    	font-size: 100%;
}
.go{
    	border-radius: 12px;
    	border:1px solid #74D600;
    	background-color: #74D600;
    	color: #FFFFFF;
    	font-family: Franklin Gothic Medium Cond, sans-serif;
    	font-size: 100%;
    	width:194px;
}
#bar{
		border-radius: 50px;
    	border:1px solid #74D600;
    	background-color: #74D600;
		height: 60px; width: 100%;
		position:absolute;
		top:4px;
		left:0px; 
}

</style>
<?php

?>

<div id="sty">

<form align="center" action="input.php" method="GET" >
<div id="c">Ingredients<br><br></div>
<input class="ing" type="text" name="input">
<input class="add" type="submit"  value="ADD">
</form>
<form action="api.php" target="_blank">
<button class="go">GO</button>
</form>
<form action="clear.php">
<button class="add">CLEAR BASKET</button>
</form>
</div>







<div id="sty2">
<h1 align="center">
	
</h1>

	<img src="https://food.cable.st/FeastersBanner2.png" />
</div>
<img src="https://food.cable.st/Icon.png" style="width:304px;height:228p; position:absolute; top:40%; left:25%;" >
<?php
	$username=$_GET['username'];
	$temp=fopen("temp.txt","a+");
	fwrite($temp, $username);
	fclose($temp);
	if(isset($_GET['input'])){
		$input = $_GET['input'];
		$temp=fopen("temp.txt","r+");
		$user=fgets($temp);
		fclose($temp);
		$myfile = fopen($user.".txt", "a+") or die("Unable to open file!");
		fwrite($myfile, $input." ");
		fclose($myfile);
		$myfile = fopen($user.".txt", "a+") or die("Unable to open file!");
		$basket = fgets($myfile);
		for ($i=0;$i<strlen($basket);$i++){
			if ($basket[$i]==" ") {
				$b=$b."|";			
			} else {
				$b=$b.$basket[$i];
			}
		}
		fclose($myfile);
		echo '<div id="d">ITEMS: '.$b.'</div>';
		
		
	}
?>
</body>



</html>
