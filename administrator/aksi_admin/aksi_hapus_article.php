<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$sql=mysqli_query($connection, "SELECT * FROM article WHERE article_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Article/'.$hapus['gambar1']);
unlink('../gambar/Article/'.$hapus['gambar2']);
unlink('../gambar/Article/'.$hapus['gambar3']);
$query = mysqli_query($connection, "DELETE FROM article WHERE article_id='$id' ") or die(mysqli_error());
if ($query){
header('location:../article.php');
}
?>