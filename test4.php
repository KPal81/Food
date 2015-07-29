<?php
	$thing = "http://api.pearson.com:80/kitchen-manager/v1/recipes?ingredients-any=cheese%2C%20tomatoes&limit=3000";
	$data = file_get_contents($thing);
	$js = json_decode($data, true);
	$tot = $js["total"];
	for ($z=0; $z<$tot; $z++){
		echo $js["results"][$z]["name"]."<br />";
		echo $js["results"][$z]["cuisine"]."<br />";
		echo $js["results"][$z]["cooking_method"]."<br />";
		foreach ($js["results"][$z]["ingredients"] as $y) 
			echo $y;
		
		;	
	}

?>