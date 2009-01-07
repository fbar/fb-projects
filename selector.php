<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Vozmob foto selector</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
body {
	background-color: #000000;
}
h1,h2,h3,h4,h5,h6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
div.img
{
  margin: 2px;
  border: 0px solid #ffffff;
  height: auto;
  width: auto;
  float: left;
  text-align: center;
}	
div.img img
{
  display: inline;
  width: 120px;
  margin: 3px;
  border: 1px solid #000000;
}
div.img a:hover img {border: 1px solid #ffffff;}
div.desc
{
  text-align: center;
  font-weight: normal;
  font-size: 80%;
  width: 120px;
  margin: 2px;
}
-->
</style></head>

<body>

<h1><img src="man-thumb.jpg" width="98" height="160" align="left">VozMob Foto Selector</h1>

<?php

if (filter_has_var(INPUT_POST, "userID")){

//the form exists, use it

$userID = filter_input(INPUT_POST, "userID");
$userName = filter_input(INPUT_POST, "userName");
$min = filter_input(INPUT_POST, "min");
$max = filter_input(INPUT_POST, "max");

printForm();

switch ($userID){
  case 27:
    $userName = "Adolfo";
	break;
  case 34:
    $userName = "Crispin";
	break;
  case 28:
    $userName = "Manuel";
	break;
  case 21:
    $userName = "Madelou";
	break;
  default:
    $userName = "no such user";
} // end switch

print <<<HERE
 <h3>Aqu&iacute; est&aacute;n las fotos enviadas por $userName con n&uacute;meros entre $min y $max (Haga clic para ver la foto original en el sitio vozmob):</h3>
HERE;

//treat Manuel's album differently because of the Boost spam
if ($userID != 28){
//this is the general case
$i = $min;
while ($i <= $max){
$pictureID = $i;
printPicture($userID, $pictureID);
  $i++;
} //end while

} else {

//this is the Manuel case
$realmin = floor($min/3)*3+2;
if ($max <= 230){
// Boost junk was removed after picture 232
$i = $min;
while ($i <= $max-1){
$pictureID = floor($i/3)*3+2;
printPicture($userID, $pictureID);
  $i+=3;
} //end while

} else {

//when max is above 230
//check that min is below 230 to see if we need to count by 3 first
if ($min <=230){
$i = $min;
while ($i <= 230){
$pictureID = floor($i/3)*3+2;
printPicture($userID, $pictureID);
  $i+=3;
} //end while

$i=231;

while ($i <= $max){
$pictureID = $i;
printPicture($userID, $pictureID);
  $i++;
} //end while

} else {

//if min is above 230, just go ahead

$i = $min;
while ($i <= $max){
$pictureID = $i;
printPicture($userID, $pictureID);
  $i++;
} //end while
} //end if $min is smaller than 231
} //end else that test max is greater than 233
} //end if that tests for the Manuel exception

} else {

//there is no input, create the form

printForm();
} // end if

function printPicture($userID, $pictureID){
	global $userID, $userName, $pictureID; 
	  print <<< HERE
	  
<div class="img">
    <a href = "http://vozmob.virishi.net/sites/default/files/image/$userID/image_$pictureID.jpg">
	<img src = "http://vozmob.virishi.net/sites/default/files/image/$userID/image_$pictureID.jpg" /></a>
		  <div class="desc">$userName: foto $pictureID</div>
</div>
HERE;
} //end function printPicture

function printForm(){
	global $userID;
	print <<< HERE

<form action = ""
	  method = "post">
<fieldset>
  <label>Quiero ver las im&aacute;genes de los vozmoberos siguientes:</label><br />
  <input type="radio"
  		 name="userID"
		 value="27" />Adolfo<br />
  <input type="radio"
  		 name="userID"
		 value="34" />Crispin<br />		 
  <input type="radio"
  		 name="userID"
		 value="28" />Manuel<br />			 
  <input type="radio"
  		 name="userID"
		 value="21" />Madelou<br />	 
  <label>con n&uacute;meros entre:</label>
  <input type = "text"
         name = "min" />
  <label> y </label>
  <input type = "text"
         name = "max" />  
  <button type = "submit">
  	enviar
  </button>
</fieldset>	
</form>

HERE;
} //end function printForm

?>

</body>
</html>
