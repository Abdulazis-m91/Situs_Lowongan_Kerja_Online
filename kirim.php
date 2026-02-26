<?php
include "koneksi.php";
mysql_connect("namahost", "dbuser", "dbpass");
mysql_select_db("dbname");

$email=$_POST['email'];
// ==============================
function randomPassword()
{
// function untuk membuat password random 6 digit karakter

$digit = 6;
$karakter = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";

srand((double)microtime()*1000000);
$i = 0;
$pass = "";
while ($i <= $digit-1)
{
$num = rand() % 32;
$tmp = substr($karakter,$num,1);
$pass = $pass.$tmp;
$i++;
}
return $pass;
}

// membuat password baru secara random -> memanggil function randomPassword
$newPassword = randomPassword();

// perlu dibuat sebarang pengacak
$pengacak  = "NDJS3289JSKS190JISJI";

// mengenkripsi password dengan md5() dan pengacak
$newPasswordEnkrip = md5($pengacak . md5($newPassword) . $pengacak);
// ===========================================================
$query = "SELECT * FROM login WHERE email = '$email'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
// ============================== //

$body= "Username Anda : ".$email.". \nPassword Anda yang baru adalah ".$newPassword;

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
$subject = "Reset Password"; // subject email
Send_Mail($to,$subject,$body);
$kirimEmail = mail($to,$subject,$body);
if ($kirimEmail) {

    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE login SET password = '$newPassword' WHERE email = '$email'";
    $hasil = mysql_query($query);

    if ($hasil) echo "Password baru telah direset dan sudah dikirim ke email Anda";
    }
else echo "Pengiriman password baru ke email gagal";

?>