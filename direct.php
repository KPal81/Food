<?php
	$recipe=$_GET["recipe"];
	$yo = file_get_contents($recipe);
	$str = json_decode($yo, true);
	echo $str["name"]."<br />";
	echo "<br />";
	echo "<img src=\"".$str["image"]."\">"."<br />";
	echo "<br />";
	echo "CUISINE: ";		
	echo $str["cuisine"]."<br />";
	echo "COOKING METHOD: ";
	echo $str["cooking_method"]."<br />";
	echo "SERVES: ";
	echo $str["serves"]."<br />";
	echo "YIELDS: ";
	echo $str["yields"]."<br />";
	echo "COST: ";
	echo "$".$str["cost"]."<br />";
	echo "<br />";
	echo "INGREDIENTS:"."<br />";
	foreach ($str["ingredients"] as $y){
		echo $y["name"]."<br />";
		echo $y["quantity"];
		echo $y["unit"]."<br />";
		echo $y["preparation"]."<br />";
		echo "<br />";
	}
	echo "<br />";
	echo "DIRECTIONS: "."<br />";
	foreach ($str["directions"] as $q){
		echo $q."<br />";
	}
	echo "<br />"; 
?>