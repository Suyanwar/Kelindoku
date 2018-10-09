<?php
include 'konek.php';
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($connection, "select nama_admin from admin where user_admin='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['nama_admin'];
if(!isset($login_session)){
mysqli_close($connection);
header('Location: ../index.php');
}
?>