<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$sql=mysqli_query($connection, "SELECT * FROM service WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Event/'.$hapus['gambar1']);
unlink('../gambar/Event/'.$hapus['gambar2']);
unlink('../gambar/Event/'.$hapus['gambar3']);
$query = mysqli_query($connection, "DELETE FROM service WHERE id='$id' ") or die(mysqli_error());
if ($query){
header('location:../eo.php');
}
?>