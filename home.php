<html>
<body style="background-color:rgb(16, 161, 50)">
<style>
#sty {
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
</style>

<form align="center" action="home.php" method="POST" >
<div id="sty">
Ingredients<br>
<input type="text" name="input">
<input type="submit" value="ADD">
<a href="list.php">GO-></a>
</div>

</form>

<div id="sty2">
<h1 align="center">
	
</h1>

	<img src="https://food.cable.st/FeastersBanner.png" />
</div>
</body>


</html>
<?php
	if(isset($_POST['input'])){
		$input = $_POST['input']; 
		$myfile = fopen("ing.txt", "a+") or die("Unable to open file!");
		fwrite($myfile, $input." ");
		fclose($myfile);
	}
?>
