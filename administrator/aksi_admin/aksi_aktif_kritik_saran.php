<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$query = mysqli_query($connection, "UPDATE kritik_saran SET enabled = '1' WHERE isi_id='$id'") or die(mysqli_error());
if ($query){
	header('location:../article.php');
}
?>