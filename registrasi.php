<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration MAZ</title>
</head>

<body>
<? 
if(isset($_POST['g-recaptcha-response'])){ $captcha=$_POST['g-recaptcha-response']; }
    if(!$captcha){ echo '<div class="baru02" style="text-align:center; margin-top:30px; font-weight:800; font-size:18px;  color:#067457;">Please Check The Captcha Form</div>
<center><p style="text-align:center; width:800px; height:110px; border:1px dashed #067457; line-height:24px;"><br />
  Anda belum melakukan Verifikasi Captcha, Silakan coba kembali.<br/><a href="/registration.html" style="color:#FFF; background-color:#067457; padding:5px 8px; border-radius:20px;  text-decoration:none; line-height:80px;">Kembali ke Halaman Sebelumnya</a></p></center>'; exit; }
	
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfWnx0UAAAAAL_0SOI6TZbnobsOnkDTFZc6odT7&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
if($response.success==false){ echo '<div class="baru02" style="text-align:center; margin-top:30px; font-weight:800; font-size:18px;  color:#067457;">Your Captcha still Wrong</div>
<center><p style="text-align:center; width:800px; height:110px; border:1px dashed #067457; line-height:24px;"><br />
  Captcha / Verifikasi Anda masih Salah, Silakan coba kembali.<br/><a href="/registration.html" style="color:#FFF; background-color:#067457; padding:5px 8px; border-radius:20px;  text-decoration:none; line-height:80px;">Kembali ke Halaman Sebelumnya</a></p></center>'; }
else {
?>
<div class="baru02" style="text-align:center; margin-top:30px; font-weight:800; font-size:18px; font-family:Segoe, 'Segoe UI'; color:#067457;">Formulir Pendaftaran </div>
<center><p style="text-align:center; width:800px; height:110px; border:1px dashed #067457; line-height:24px; font-family:Segoe, 'Segoe UI'"><br />
  Terima kasih, data Anda telah terkirim. Panitia Penerimaan Peserta Baru akan menghubungi Anda melalui email maupun nomor telepon yang telah Anda masukkan untuk memberi informasi lebih lanjut.<br/><a href="registration.html" style="color:#FFF; background-color:#067457; padding:5px 8px; border-radius:20px; font-family:Segoe, 'Segoe UI'; text-decoration:none; line-height:80px;">Kembali ke Halaman Sebelumnya</a></p></center>
  
<?  
$to  = 'adm.lkpdmaz@gmail.com';
$cc  = 'mazcampus@gmail.com, lkpdmaz@gmail.com'; 
$bcc  = 'lkpmaz@gmail.com';
//$to  = 'rinrinf7@gmail.com';
//$to  = 'asride.iswi@gmail.com';



$subject = 'www.belajarfashion.id - Formulir Pendaftaran Online - ' . $_POST["nama"];
$message = '
<font face=arial size=2>Dear MAZ,<br>
Berikut data yang kami terima melalui formulir pendaftaran via web, antara lain :</font><br><br>
<table width=532 border=0 cellspacing=2 cellpadding=1>
  <tr>
    <td width=216><strong><font face=arial,verdana size=2>Nama Lengkap</font></strong></td>
    <td width=26><strong>:</strong></td>
    <td width=276><font face=arial,verdana size=2>
      '. $_POST["nama"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Tempat Lahir</font></strong></td>
    <td><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $_POST["tempatlahir"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Tanggal Lahir</font></strong></td>
    <td><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $_POST["tgllahir"] .'
    </font></td>
  </tr>
  <tr>
    <td><font face=arial,verdana size=2><strong>Jenis Kelamin</strong></font> </td>
    <td><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $_POST["jeniskelamin"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Agama</font></strong></td>
    <td><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $_POST["agama"] .'
    </font></td>
  </tr>
  <tr>
    <td valign=top><strong><font face=arial,verdana size=2>Alamat Lengkap</font></strong></td>
    <td valign=top><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $_POST["alamatlengkap"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Telp/HP</font></strong></td>
    <td><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $_POST["telphp"] .'
    </font></td>
  </tr>
  <tr>
    <td><font face=arial,verdana size=2><strong>Email</strong></font></td>
    <td><strong>:</strong></td>
    <td><font face=arial,verdana size=2>
      '. $_POST["email"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Asal Sekolah</font></strong> </td>
    <td><strong>:</strong></td>
    <td cl=cl><font face=arial,verdana size=2>
      '. $_POST["asalsekolah"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Tahun Lulus/Grade</font></strong> </td>
    <td><strong>:</strong></td>
    <td cl=cl><font face=arial,verdana size=2>
      '. $_POST["thnlulus"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Pekerjaan</font></strong> </td>
    <td><strong>:</strong></td>
    <td cl=cl><font face=arial,verdana size=2>
      '. $_POST["pekerjaan"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Bekerja / Sekolah di</font></strong> </td>
    <td><strong>:</strong></td>
    <td cl=cl><font face=arial,verdana size=2>
      '. $_POST["bekerjadi"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Nama+Telp/HP Emergency Contact</font></strong></td>
    <td><strong>:</strong></td>
    <td cl=cl><font face=arial,verdana size=2>
      '. $_POST["telphpcontact"] .'
    </font></td>
  </tr>
  <tr>
    <td valign=top><strong><font face=arial,verdana size=2>Pernah kursus fashion? Why MAZ ?</font></strong> </td>
    <td valign=top><strong>:</strong></td>
    <td cl=cl><font face=arial,verdana size=2>
      '. $_POST["whyugotit"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Informasi MAZ dari</font></strong> </td>
    <td><strong>:</strong></td>
    <td cl=cl><font face=arial,verdana size=2>
      '. $_POST["informasi"] .'
    </font></td>
  </tr>
  <tr>
    <td><strong><font face=arial,verdana size=2>Direkomendasikan ke MAZ oleh</font></strong> </td>
    <td><strong>:</strong></td>
    <td cl=cl><font face=arial,verdana size=2>
      '. $_POST["rekomen"] .'
    </font></td>
	<tr>
    <td><strong><font face=arial,verdana size=2>Paket / Kelas yang diambil</font></strong> </td>
    <td><strong>:</strong></td>
    <td cl=cl><font face=arial,verdana size=2>
      '. $_POST["kelas"] .'
    </font></td>
  </tr>
</table>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
//$headers .= 'To: '. $to . "\r\n";
$headers .= 'From: Web MAZ <noreply@mazcampus.id>' . "\r\n" .
'Reply-To: ' .$_POST["nama"]. ' <'.$_POST["email"].'>' . "\r\n" .
'Bcc: '. $bcc . "\r\n";
$headers .= 'Cc: ' . $cc .', '.$_POST["nama"]. ' <'.$_POST["email"].'>' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma


// Mail it
$mail_sent = @mail($to, $subject, $message, $headers);
echo $mail_sent ? "Status: Terkirim " . "\r\n <br><br>" . $message : "Status: Gagal Terkirim.";
//echo $message;
} 
?>


</body>
</html>