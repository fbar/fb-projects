<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="icon" 
      type="image/jpg"
	  href="http://vozmob.net/favicon.jpg">
<title>vozmob: Mobile Voices / Voces Moviles</title>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	color: #FFFFFF;
	text-decoration: none;
}
.style4 {color: #FFFFFF}
.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 22px;
	font-weight: bold;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style11 {color: #FFFFFF; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style12 {font-size: 14px}
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF;}
-->
</style></head>



<body>
<center>

<!--
   <p><a href="http://vozmob.virishi.net/"><img src="http://farm4.static.flickr.com/3201/3022614585_5065ae71a6.jpg" width="484" height="354" border="0"> </a>
  </p>
-->
    <p class="style5"><span class="style4">vozmob: </span><a title="VozMob &ndash; Mobile Voices / Voces M&oacute;viles" href="http://vozmob.virishi.net/es">mobile voices | voces m&oacute;viles</a></p>
    <p>
      
      <?php

//set value of latest pix published by each author
$madmax = 81;
$admax = 63;
$crismax = 13;
$manmax = 306;

//skip the multiple pix created in madelou's folder by reloading
//$m1 = floor($madmax / 3);
//$m2 = floor(2 * $madmax / 3);
$m1 = 12;
$m2 = 23;

$a1 = floor($admax / 2);

$madelou1 =  rand (1,$m1);
$madelou2 =  rand ($m1+1,$m2);
$madelou3 =  rand (73,$madmax);
$adolfo1 =  rand (1,$a1);
$adolfo2 =  rand ($a1+1,$admax);
$crispin1 =  rand (1,$crismax);
$manuel1 = rand (1,77);
//$manuel2 = rand (38,77);
$manuel2 = rand (232,$manmax);
//after 232, the junk boost images from Manuel were stripped
$manuel1 = $manuel1 * 3 + 2;
//$manuel2 = $manuel2 * 3 + 2;


print <<< HERE

<img src="http://vozmob.virishi.net/sites/default/files/image/21/image_$madelou1.jpg" width="160" height="120" border="0" />
<img src="http://vozmob.virishi.net/sites/default/files/image/27/image_$adolfo1.jpg" width="160" height="120" border="0" />
<img src="http://vozmob.virishi.net/sites/default/files/image/21/image_$madelou2.jpg" width="160" height="120" border="0" />
<br />
<img src="http://vozmob.virishi.net/sites/default/files/image/28/image_$manuel1.jpg" width="160"  border="0" />

<a href="http://vozmob.virishi.net/"><img src="http://farm4.static.flickr.com/3201/3022614585_5065ae71a6_m.jpg" width="160" vspace="20" border="0" /></a>
<img src="http://vozmob.virishi.net/sites/default/files/image/28/image_$manuel2.jpg" width="160"  border="0" />
<br />
<img src="http://vozmob.virishi.net/sites/default/files/image/27/image_$adolfo2.jpg" width="160" height="120" border="0" />
<img src="http://vozmob.virishi.net/sites/default/files/image/21/image_$madelou3.jpg" width="160" height="120" border="0" />
<img src="http://vozmob.virishi.net/sites/default/files/image/34/image_$crispin1.jpg" width="160" height="120" border="0" />

HERE;


// middle pic could be put back
// <img src="http://vozmob.virishi.net/sites/default/files/image/28/image_$manuel3.jpg" width="160"  border="0" />
?>
      
      </p>
    <div id="post-11">
  <div>
    <table width="480" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="style11"><a href="projectlinks.html">enlaces | links</a></td>
        <td><div align="right" class="style12"><span class="style13">una colaboraci&oacute;n | a collaboration <a href="http://idepsca.org"><strong>IDEPSCA</strong></a>::<a href="http://annenberg.usc.edu/"><strong>ASC</strong></a></span></div></td>
      </tr>
    </table>

</div>

</body>
</html>
