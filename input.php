<html>
<style>
#sty {
	text-align: center;
}
</style>
<div id="sty">
<form align="center" action="input.php" method="POST" >
<input type="text" name="input" />
</form>
</div>
</html>
<?php
	if(isset($_POST['input'])){
		$input = $_POST['input']; 
		$myfile = fopen("ing.txt", "a+") or die("Unable to open file!");
		fwrite($myfile, $input." ");
		fclose($myfile);
	}
?>
