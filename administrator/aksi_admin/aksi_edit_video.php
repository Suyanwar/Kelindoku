<?php
include 'konek.php';
include 'session.php';        
        $judul = $_POST['nama'];
        $id = $_POST['id'];
        $link = $_POST['link'];
        $fileName = $_FILES['gambar']['name'];        
        if($fileName==""){
            $query = mysqli_query($connection, "UPDATE ads SET judul ='$judul', link='$link' WHERE id='$id' ")
        or die(mysqli_error());
        }else{
$sql=mysqli_query($connection, "SELECT * FROM ads WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Thumbnail/'.$hapus['thumbnail']);
        $query = mysqli_query($connection, "UPDATE ads SET judul ='$judul', link='$link', gambar='$fileName' WHERE id='$id' ")
        or die(mysqli_error());
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'],'../gambar/Thumbnail/'.$fileName);
            }
        
           if(isset($_POST['simpandankeluar'])){
          header('location:../eo.php');
    }
    echo"<script>alert('Data Berhasil Diubah!');history.go(-1);</script>";
    ?>