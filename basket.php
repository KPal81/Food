<?php
	$myfile = fopen("ing.txt", "r+") or die("Unable to open file!");
	$ingred = array();
	$iurl="";
	$nurl="";
	$furl="";
	$iurl = fgets($myfile);
	for ($i=0;$i<strlen($iurl);$i++){
		if ($iurl[$i]==" ") {
			$nurl=$nurl."%2C%20";			
		} else {
			$nurl=$nurl.$iurl[$i];
		}

	}
	$len=strlen($nurl)-6;
	for ($j=0;$j<$len;$j++){
		$furl=$furl.$nurl[$j];
	}
	$stem="http://api.pearson.com:80/kitchen-manager/v1/recipes?ingredients-any=";
	$all=$stem.$furl;
	echo $all;
	fclose($myfile);
	unlink("ing.txt")
?>