<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$query = mysqli_query($connection, "UPDATE testi_t SET enabled = '1' WHERE id='$id'") or die(mysqli_error());
if ($query){
	header('location:../mobil.php');
}
?>