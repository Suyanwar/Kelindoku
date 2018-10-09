<?php
include 'konek.php';
include 'session.php';        
        $lokasi = $_POST['lokasi'];
        $id = $_POST['id'];
        $img1 = $_FILES['gambar']['name'];        
    if($img1!=""){
$sql=mysqli_query($connection, "SELECT * FROM lokasi_kategori WHERE id_lk = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Lokasi/'.$hapus['gambar']);
        $query = mysqli_query($connection, "UPDATE lokasi_kategori SET lokasi = '$lokasi', gambar = '$img1' WHERE id_lk='$id' ")
        or die(mysqli_error());
		$move1 = move_uploaded_file($_FILES['gambar']['tmp_name'],'../gambar/Lokasi'.$img1);
        
	}else{		
       $query = mysqli_query($connection, "UPDATE lokasi_kategori SET lokasi = '$lokasi' WHERE id_lk='$id' ")
        or die(mysqli_error());
	}
           if(isset($_POST['simpandankeluar'])){
          header('location:../mobil.php');
    }
    echo"<script>alert('Data Berhasil Diubah!');history.go(-1);</script>";
    ?>