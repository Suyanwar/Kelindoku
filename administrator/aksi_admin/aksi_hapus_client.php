<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$sql=mysqli_query($connection, "SELECT * FROM client WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Client/'.$hapus['gambar']);
$query = mysqli_query($connection, "DELETE FROM client WHERE id='$id' ") or die(mysqli_error());
if ($query){
header('location:../eo.php');
}
?>