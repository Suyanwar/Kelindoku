<?php
include '../administrator/aksi_admin/konek.php';     
$tgl=date('Y-m-d');
$nama = $_POST['fullname'];
$email = $_POST['email'];
$komen = $_POST['message'];
$judul = $_POST['subject'];
$enabled = $_POST['enabled'];       
$query = "INSERT INTO testi_t(nama, isi, email, tanggal, subject, enabled) VALUES('$nama','$komen','$email','$tgl', '$judul', '$enabled')";
$input = mysqli_query($connection, $query);
if (isset($_POST['submit'])){
header('location:index.php');
}    
?>