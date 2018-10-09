<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
echo"<script>alert('Username Atau Password Kosong ! !');history.go(-1);</script>";
}
else
{
$username=$_POST['username'];
$password=$_POST['pass'];
include 'konek.php';
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
$query = mysqli_query($connection, "select * from admin where pass_admin='$password' AND user_admin='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username;
header("location: ../mian/dashboard.php");
} else {
$error = "Username atau Password belum terdaftar";
echo"<script>alert('Username Atau Password Salah !');history.go(-1);</script>";
}
mysqli_close($connection);
}
}
?>