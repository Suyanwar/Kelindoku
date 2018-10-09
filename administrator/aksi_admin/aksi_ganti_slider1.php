<?php
include 'konek.php';
include 'session.php';	
$id = $_POST['id'];
$fileName = $_FILES['gambar']['name'];
$sql=mysqli_query($connection, "SELECT * FROM slider_keli WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Slider2/'.$hapus['gambar']);
$query = "UPDATE slider_keli SET gambar = '$fileName' WHERE id = '$id'";
$input = mysqli_query($connection, $query);
move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/Slider2/'.$_FILES['gambar']['name']);
if (isset($_POST['simpan'])){
header('location:../eo.php');
}
?>