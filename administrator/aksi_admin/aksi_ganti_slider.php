<?php
include 'konek.php';
include 'session.php';
$id = $_POST['id'];
$fileName = $_FILES['gambar']['name'];
$link = $_POST['link'];
$sql=mysqli_query($connection, "SELECT * FROM slider WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Slider1/'.$hapus['gambar']);
$query = "UPDATE slider SET gambar = '$fileName', link = '$link' WHERE id = '$id'";
$input = mysqli_query($connection, $query);
move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/Slider1/'.$_FILES['gambar']['name']);
if (isset($_POST['simpan'])){
header('location:../article.php');
}
?>