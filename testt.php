<form action ="testt.php" method="POST">
<input type="text" name="text" />
<input type ="submit" value="Send">
</form>

<?php
 $ingredientName = $_POST['text'];
	
	
 $url = "http://api.pearson.com:80/kitchen-manager/v1/recipes?name-contains=pizza&ingredients-any=".$ingredientName;
 $data = file_get_contents($url);
 //echo $data;
 $x = json_decode($data, true);
 echo $x["results"][0]["name"];
echo $ingredientName;
 //echo $url;







?> 