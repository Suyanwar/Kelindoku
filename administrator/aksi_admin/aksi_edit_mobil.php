<?php
include 'konek.php';
include 'session.php';        
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $detail = $_POST['isi'];
        $lokasi = $_POST['lokasi'];
        $img1 = $_FILES['gambar1']['name'];
        $img2 = $_FILES['gambar2']['name'];
        $img3 = $_FILES['gambar3']['name'];        
    if($img1!="" && $img2!="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM mobil WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Mobil/'.$hapus['gambar1']);
unlink('../gambar/Mobil/'.$hapus['gambar2']);
unlink('../gambar/Mobil/'.$hapus['gambar3']);
        $query = mysqli_query($connection, "UPDATE mobil SET nama='$nama', detail='$detail', lokasi = '$lokasi', gambar1 = '$img1', gambar2 = '$img2', gambar3 = '$img3' WHERE id='$id' ")
        or die(mysqli_error());
		$move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Mobil/'.$img1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Mobil/'.$img2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Mobil/'.$img3);        
	}elseif($img1!="" && $img2=="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM mobil WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Mobil/'.$hapus['gambar1']);
unlink('../gambar/Mobil/'.$hapus['gambar3']);
        $query = mysqli_query($connection, "UPDATE mobil SET nama='$nama', detail='$detail', lokasi = '$lokasi', gambar1 = '$img1', gambar3 = '$img3' WHERE id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Mobil/'.$img1);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Mobil/'.$img3);
	}elseif($img1!="" && $img2!="" && $img3==""){
$sql=mysqli_query($connection, "SELECT * FROM mobil WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Mobil/'.$hapus['gambar1']);
unlink('../gambar/Mobil/'.$hapus['gambar2']);
         $query = mysqli_query($connection, "UPDATE mobil SET nama='$nama', detail='$detail', lokasi = '$lokasi', gambar1 = '$img1', gambar2 = '$img2' WHERE id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Mobil/'.$img1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Mobil/'.$img2);
    }elseif($img1!="" && $img2=="" && $img3==""){
$sql=mysqli_query($connection, "SELECT * FROM mobil WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Mobil/'.$hapus['gambar1']);
        $query = mysqli_query($connection, "UPDATE mobil SET nama='$nama', detail='$detail', lokasi = '$lokasi', gambar1 = '$img1' WHERE id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Mobil/'.$img1);
    }elseif($img1=="" && $img2!="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM mobil WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Mobil/'.$hapus['gambar2']);
unlink('../gambar/Mobil/'.$hapus['gambar3']);
        $query = mysqli_query($connection, "UPDATE mobil SET nama='$nama', detail='$detail', lokasi = '$lokasi', gambar2 = '$img2', gambar3 = '$img3' WHERE id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Mobil/'.$img2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Mobil/'.$img3);
    }elseif($img1=="" && $img2!="" && $img3==""){
$sql=mysqli_query($connection, "SELECT * FROM mobil WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Mobil/'.$hapus['gambar2']);
        $query = mysqli_query($connection, "UPDATE mobil SET nama='$nama', detail='$detail', lokasi = '$lokasi', gambar2 = '$img2' WHERE id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Mobil/'.$img2);
    }elseif($img1=="" && $img2=="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM mobil WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Mobil/'.$hapus['gambar3']);
        $query = mysqli_query($connection, "UPDATE mobil SET nama='$nama', detail='$detail', lokasi = '$lokasi', gambar3 = '$img3' WHERE id='$id' ")
        or die(mysqli_error());
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Mobil/'.$img3);
    }else{		
       $query = mysqli_query($connection, "UPDATE mobil SET nama='$nama', detail='$detail', lokasi = '$lokasi' WHERE id='$id' ")
        or die(mysqli_error());
	}
           if(isset($_POST['simpandankeluar'])){
          header('location:../mobil.php');
    }
    echo"<script>alert('Data Berhasil Diubah!');history.go(-1);</script>";
    ?>