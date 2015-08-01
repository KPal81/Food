<html>
<body style="background-color:rgb(16, 161, 50)">
<style>
a {
    color: #FFFFFF;
    font-family: Franklin Gothic Medium Cond, sans-serif;
    text-decoration: none;
    font-size: 200%;
}
#full {
    color: #FFFFFF;
    font-family: Franklin Gothic Medium Cond, sans-serif;
    text-decoration: none;
    font-size: 200%;  
}  
#st2{
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
#st3{
    text-align: center;
	position: absolute;
	top: 50%;
	left: 0%;
	-ms-transform: translate(0%,-50%); /* IE 9 */
   	-webkit-transform: translate(0%,-50%); /* Safari */
    transform: translate(0%,-50%);
    -moz-transform: translate(0%, -50%);
}
#desc1{
    color: #FFFFFF;
    font-family: Franklin Gothic Medium Cond, sans-serif;
    text-decoration: none;
    font-size: 300%;
	position: absolute;
	top: 30%;
	left: 30px;
	z-index: 20;
}
#desc2{
    color: #FFFFFF;
    font-family: Franklin Gothic Medium Cond, sans-serif;
    text-decoration: none;
    font-size: 100%;
	position: absolute;
	top: 60%;
	left: 30px;
	z-index: 20;
}	
#desc3{
    color: #FFFFFF;
    font-family: Franklin Gothic Medium Cond, sans-serif;
    text-decoration: none;
    font-size: 100%;
	position: absolute;
	top: 65%;
	left: 30px;
	z-index: 20;
}
</style>
<div id="desc1">
Welcome to 
</div>
<br>
<div id="desc2">
The simple and fast way to browse recipes.
</div>
<br>
<div id="desc3">
Find the Feaster for you.
</div>
</body>
<div id="st2">
<?php
$chars = "abcdefghijklmnopqrstuvwxyz1234567890";
$charArray = str_split($chars);
$randuser="";
for ($i=0;$i< 10;$i++) {
	$randItem = array_rand($charArray);
	$randuser=$randuser.$charArray[$randItem];
}
$temp=fopen("temp.txt","r+");
$user=fgets($temp);
fclose($temp);
if ($user == "") {
	echo '<a href="input.php?username='.$randuser.'" target="_blank">ENTER SITE</a>'."<br />";
} else {
	echo '<div id="full">Server Full. Please Wait</div>';
}

?>
</div>
<div id="st3">
<img src="https://food.cable.st/FeastersBanner2.png" />
</div>
<img src="https://food.cable.st/Icon.png" style="width:304px;height:228p; position:absolute; top:40%; left:25%;" >
</html>