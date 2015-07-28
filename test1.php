<form action="test1.php" method="POST">
<input type="text" name="input" />
</form>
<?php
	if(isset($_POST['input'])){
		$input = $_POST['input']; 
		$myfile = fopen("ing.txt", "a+") or die("Unable to open file!");
		fwrite($myfile, $input);
		fclose($myfile);
	}
?>
