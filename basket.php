<?php
	$myfile = fopen("ing.txt", "r+") or die("Unable to open file!");
	$array = array();
	$i=0;
	while(! feof($myfile)){
		$array[$i] = fgets($myfile)."<br />";
		$i++;
	}
	$j=0;
	for($j = 0; $j < $i; $j++){
		echo $array[$j];
	}
	fclose($myfile);
	unlink("ing.txt")
?>