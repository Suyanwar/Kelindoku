<?php
$name=$_POST['nama'];
$email=$_POST['email'];
$nomor=$_POST['nomor'];
$awal=$_POST['tanggal1'];
$akhir=$_POST['tanggal2'];
$id=$_POST['id'];
$lokasi=$_POST['lokasi'];
$keterangan=$_POST['keterangan'];
$alamat=$_POST['alamat'];
$subject = "Form Pemesanan Mobil";
include '../administrator/aksi_admin/konek.php';
$sql=mysqli_query($connection, "SELECT * FROM mobil where id = '$id'");
$coba=mysqli_fetch_array($sql);
$mobil=$coba['nama'];
$message="$name telah memesan mobil: " ."\r\n".''.$mobil.''."\r\n". 'dengan nomor HP: '.$nomor.''."\r\n".'Tanggal keberangkatan: '.$awal.''."\r\n".'Tanggal pengembalian: '.$akhir.''."\r\n".'Dengan lokasi '.$lokasi.''."\r\n".'Alamat Lengkap: '.$alamat.''."\r\n".'Dengan keterangan sebagai berikut:'."\r\n".''.$keterangan.''."\r\n".'Reply-To: <'.$email.'>';

 
// More headers
$headers .= 'From:<coba@indonesia-trip.esy.es >'."\r\n";
$headers .= 'Cc: Suyanwar.wawang@gmail.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo"<script>alert('Terima kasih telah menyewa mobil kami!');history.go(-1);</script>";
}
?>