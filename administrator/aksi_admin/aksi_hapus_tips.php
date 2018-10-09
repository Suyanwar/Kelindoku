<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$sql=mysqli_query($connection, "SELECT * FROM story WHERE story_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Story/'.$hapus['gambar']);
$query = mysqli_query($connection, "DELETE FROM story WHERE story_id='$id' ") or die(mysqli_error());
if ($query){
	header('location:../article.php');
}
?>