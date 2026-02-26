<?php

$email=$_POST['email'];
$nama= $_POST['nama'];
$lowongan=$_POST['lowongan'];
$prusahaan=$_POST['prusahaan'];

$body= "
<h1>SELAMAT KEPADA</h1>
<h2>$nama</h2>
<h4>Lamaran kerja anda pada <br/></h4>
<h3>$lowongan | https://pelayanantenagakerja.com<br/></h3>
<h4>telah di terima oleh Perusahaan : $prusahaan.<p></h4>

<h4>Cek Lamaran kerja kamu pada https://pelayanantenagakerja.com</h4> 
<h4>Dan Silahkan Hubungi Perusahaan Terkait</h4><br\>

email anda : $email<br/>
";

function Send_Mail($to,$subject,$body)
{

	
	
require 'PHPmailer/class.phpmailer.php';

$email= $_POST['email'];
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Host= "mail.indokosjogja.com";
$mail->SMTPSecure = 'tls';
$mail->Port = 587; 
$mail->SetFrom("bukersembada@indokosjogja.com","email sender");
$mail->Username = "bukersembada@indokosjogja.com";  // username gmail yang akan digunakan untuk mengirim email
$mail->Password = "abdulazi20";  // Password email
$mail->SetFrom($email, 'pelayanantenagakerja.com');
$mail->AddReplyTo($email,'pelayanantenagakerja.com');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->AddAddress($email);
if(!$mail->Send())
return false;
else
return true;
}

$to = $_POST['email']; //email tujuan
// $to = "pelayanantenagakerja1@gmail.com"; //email tujuan
$subject = "ANDA DITERIMA KERJA"; // subject email
echo"<br/><br/><center><h3>Silahkan Cek Email Anda</h3></center><br>";
Send_Mail($to,$subject,$body);
?>