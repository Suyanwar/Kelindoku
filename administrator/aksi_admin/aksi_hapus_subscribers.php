<?php
include 'konek.php';
include 'session.php';
$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM subscribers WHERE id='$id'", MYSQLI_USE_RESULT);
if ($query){
	header('location:../article.php');
}
?>