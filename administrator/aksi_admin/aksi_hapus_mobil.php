<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$sql=mysqli_query($connection, "SELECT * FROM mobil WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Mobil/'.$hapus['gambar1']);
unlink('../gambar/Mobil/'.$hapus['gambar2']);
unlink('../gambar/Mobil/'.$hapus['gambar3']);
$query = mysqli_query($connection, "DELETE FROM mobil WHERE id='$id' ") or die(mysqli_error());
if ($query){
header('location:../mobil.php');
}
?>