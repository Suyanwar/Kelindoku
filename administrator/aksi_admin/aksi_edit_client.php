<?php
include 'konek.php';
include 'session.php';
        $id = $_POST['id'];
        $img1 = $_FILES['gambar']['name'];        
$sql=mysqli_query($connection, "SELECT * FROM client WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Client/'.$hapus['gambar']);
        $query = mysqli_query($connection, "UPDATE client SET gambar = '$img1' WHERE id='$id' ")
        or die(mysqli_error());
		$move1 = move_uploaded_file($_FILES['gambar']['tmp_name'],'../gambar/Client/'.$img1);
           if(isset($_POST['simpandankeluar'])){
          header('location:../eo.php');
    }
    echo"<script>alert('Data Berhasil Diubah!');history.go(-1);</script>";
    ?>