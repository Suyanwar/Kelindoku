<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$sql=mysqli_query($connection, "SELECT * FROM lokasi_kategori WHERE id_lk = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Lokasi/'.$hapus['gambar']);
$query = mysqli_query($connection, "DELETE FROM lokasi_kategori WHERE id_lk='$id' ") or die(mysqli_error());
if ($query){
header('location:../mobil.php');
}
?>