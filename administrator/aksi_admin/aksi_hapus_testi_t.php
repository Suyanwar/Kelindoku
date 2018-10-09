<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM testi_t WHERE id='$id'", MYSQLI_USE_RESULT) or die(mysqli_error());
if ($query){
	header('location:../mobil.php');
}
?>