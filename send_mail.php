<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact MAZ</title>
</head>

<body>
<? $name; $email; $subject; $message; $captcha;
	//if  ($_POST['submit'] == "submit") { 
    if(isset($_POST['name'])){ $name=$_POST['name']; }
    if(isset($_POST['email'])){ $email=$_POST['email']; }
    if(isset($_POST['subjek'])){ $subject=$_POST['subjek']; }
	if(isset($_POST['pesan'])){ $message=$_POST['pesan']; }
    if(isset($_POST['g-recaptcha-response'])){ $captcha=$_POST['g-recaptcha-response']; }
    if(!$captcha){ echo '<div class="baru01" style="text-align:center; margin-top:30px; font-weight:800; font-size:18px;  color:#067457;">Please Check The Captcha Form</div>
<center><p style="text-align:center; width:800px; height:110px; border:1px dashed #067457; line-height:24px;"><br />
  Anda belum melakukan Verifikasi Captcha, Silakan coba kembali.<br/><a href="/contact.html" style="color:#FFF; background-color:#067457; padding:5px 8px; border-radius:20px;  text-decoration:none; line-height:80px;">Kembali ke Halaman Sebelumnya</a></p></center>'; exit; }
	
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfWnx0UAAAAAL_0SOI6TZbnobsOnkDTFZc6odT7&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
if($response.success==false){ echo '<div class="baru01" style="text-align:center; margin-top:30px; font-weight:800; font-size:18px;  color:#067457;">Your Captcha still Wrong</div>
<center><p style="text-align:center; width:800px; height:110px; border:1px dashed #067457; line-height:24px;"><br />
  Captcha / Verifikasi Anda masih Salah, Silakan coba kembali.<br/><a href="/contact.html" style="color:#FFF; background-color:#067457; padding:5px 8px; border-radius:20px;  text-decoration:none; line-height:80px;">Kembali ke Halaman Sebelumnya</a></p></center>'; }
else {
?>
<div class="baru01" style="text-align:center; margin-top:30px; font-weight:800; font-size:18px; font-family:Segoe, 'Segoe UI'; color:#067457;">Form Contact </div>
<center><p style="text-align:center; width:800px; height:110px; border:1px dashed #067457; line-height:24px; font-family:Segoe, 'Segoe UI'"><br />
  Terima kasih, data Anda telah terkirim. Kami akan menghubungi Anda melalui email maupun nomor telepon yang telah Anda masukkan untuk memberi informasi lebih lanjut.<br/><a href="contact.html" style="color:#FFF; background-color:#067457; padding:5px 8px; border-radius:20px; font-family:Segoe, 'Segoe UI'; text-decoration:none; line-height:80px;">Kembali ke Halaman Sebelumnya</a></p></center>
  
<?  

$to='lkpdmaz@gmail.com';
$cc  = 'mazcampus@gmail.com'; 
$bcc='lkpmaz@gmail.com';

$subject = 'www.belajarfashion.id -Formulir Contact Online- '.$subject;
$message = '
<font face=arial size=2>Dear MAZ,<br>
Berikut data yang kami terima melalui Form Contact via Website, antara lain :</font><br><br>
<table width=532 border=0 cellspacing=2 cellpadding=1>
  <tr>
    <td width=216><strong><font face=arial,verdana size=2>Name:</font></strong></td>
    <td width=26><strong>:</strong></td>
    <td width=276><font face=arial,verdana size=2>
      '. $name .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Email:</font></strong></td>
    <td><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $email .'
    </font></td>
  </tr>
  <tr>
    <td><font face=arial,verdana size=2><strong>Subject:</strong></font> </td>
    <td><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $subject .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Message:</font></strong></td>
    <td><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $message .'
    </font></td>
  </tr>
  
</table>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
//$headers .= 'To: '. $to . "\r\n";
$headers .= 'From: Web MAZ <noreply@mazcampus.id>' . "\r\n" . 
'Reply-To: '.$name. '<'.$email.'>' . "\r\n" . 
'Bcc: '. $bcc . "\r\n";
$headers .= 'Cc: '. $cc .', '.$name. '<'.$email.'>' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma

// Mail it
$mail_sent = @mail($to, $subject, $message, $headers);
echo $mail_sent ? "Status: Terkirim " . "\r\n <br><br>" . $message : "Status: Gagal Terkirim.";
//echo $message;
//$mail_sent = @mail( $to, $subject, $message, $headers );
//jika pesan berhasil terkirim cetak "Email Berhasil Dikirim". Jika tidak cetak ""Email Gagal Dikirim"
//echo $mail_sent ? "Email Berhasil Dikirim <br/> <a href=index.html>Back to website" : "Email Gagal Dikirim <br/> <a href=index.html>Back to website";
}
//}
?>


</body>
</html>