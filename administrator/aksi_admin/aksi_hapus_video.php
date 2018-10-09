<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$sql=mysqli_query($connection, "SELECT * FROM ads WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Thumbnail/'.$hapus['thumbnail']);
$query = mysqli_query($connection, "DELETE FROM ads WHERE id='$id' ") or die(mysqli_error());
if ($query){
header('location:../eo.php');
}
?>