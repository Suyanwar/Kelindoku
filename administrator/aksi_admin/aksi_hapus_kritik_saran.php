<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM kritik_saran WHERE isi_id='$id'", MYSQLI_USE_RESULT) or die(mysqli_error());
if ($query){
	header('location:../article.php');
}
?>