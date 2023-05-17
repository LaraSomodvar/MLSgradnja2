<?php
$ime = $_POST[''];
$email = $_POST[''];
$subjekt = $_POST[''];
$poruka = $_POST[''];

$mail_od = 'info@mlsgradnja.gmail';
$mail_subjekt = 'subjekt';
$mail_body = "Ime: $name.\n"."Mail: $email.\n"."Subjekt: $subjekt.\n"."Poruka: $poruka .\n";

$za = 'lara.somodj@gmail.com'
$temp_za_slanje = "From: $mail_od \r\n";
$temp_za_slanje .= "Odgovori: $email \r\n";

mail($za,$mail_subjekt,$mail_body,$headers);
header("Location: kontakt.html");
?>








