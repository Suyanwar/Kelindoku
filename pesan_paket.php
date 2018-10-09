<?php
$name=$_POST['nama'];
$email=$_POST['email'];
$nomor=$_POST['nomor'];
$jumlah=$_POST['quantity'];
$id=$_POST['id'];
$keterangan=$_POST['keterangan'];
$tanggal=$_POST['tanggal'];
$subject="Pemesanan Paket Tour";

include 'administrator/aksi_admin/konek.php';
$sql=mysqli_query($connection, "SELECT * FROM article where article_id = '$id'");
$coba = mysqli_fetch_array($sql);
$paket=$coba['judul'];
session_start();
if($_SESSION["Captcha"]!=$_POST["nilaiCaptcha"]){	
echo"<script>alert('Captcha Salah !');history.go(-1);</script>";
}else{ // jika teryata lolos
$message="$name telah memesan paket tour: " ."\r\n".''.$paket.''."\r\n". 'dengan nomor HP: '.$nomor.''."\r\n".'Tanggal keberangkatan: '.$tanggal.''."\r\n".'Dengan jumlah orang: '.$jumlah.''."\r\n".'Dengan keterangan sebagai berikut:'."\r\n".''.$keterangan.''."\r\n".'Reply-To: <'.$email.'>';

 
// More headers
$headers .= 'From:<coba@indonesia-trip.esy.es >'."\r\n";
$headers .= 'Cc: Suyanwar.wawang@gmail.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo"<script>alert('Terima kasih telah memesan paket kami! !');history.go(-1);</script>";
}
}
?>