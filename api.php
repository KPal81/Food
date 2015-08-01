<html>

<body style="background-color:rgb(16, 161, 50)">
<style>
a {
    color: #FFFFFF;
    font-family: Franklin Gothic Medium Cond, sans-serif;
    text-decoration: none;
    font-size: 100%;
}
#g {
	text-align: center;
}
</style>
</body>

<div id="g">
<?php
	$temp=fopen("temp.txt","r+");
	$user=fgets($temp);
	fclose($temp);
	$myfile = fopen($user.".txt", "r+") or die("Unable to open file!");
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
	$all=$stem.$furl."&limit=3000";
	$data = file_get_contents($all);
	$js = json_decode($data, true);
	$tot = $js["total"];
	for ($z=0; $z<$tot; $z++){
		$u=$js["results"][$z]["name"];
		$id=$js["results"][$z]["url"];
		$pic=$js["results"][$z]["image"];
		echo '<a href="direct.php?recipe='.$id.'">'.$u.'</a>'."<br />";	
	}
	fclose($myfile);
	unlink($user.".txt");
	$myfile = fopen("temp.txt", "w+");
	fclose($myfile);	
?>
</div>
</html>