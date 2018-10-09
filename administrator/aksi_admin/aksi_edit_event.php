<?php
include 'konek.php';
include 'session.php';        
        $nama = $_POST['nama'];
        $detail = $_POST['detail'];
        $id = $_POST['id'];
        $img1 = $_FILES['gambar1']['name'];
        $img2 = $_FILES['gambar2']['name'];
        $img3 = $_FILES['gambar3']['name'];        
    if($img1!="" && $img2!="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM service WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Event/'.$hapus['gambar1']);
unlink('../gambar/Event/'.$hapus['gambar2']);
unlink('../gambar/Event/'.$hapus['gambar3']);
        $query = mysqli_query($konek, "UPDATE service SET nama = '$nama', detail = '$detail', gambar1 = '$img1', gambar2 = '$img2', gambar3 = '$img3' WHERE id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Event/'.$img1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Event/'.$img2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Event/'.$img3);
        
    }elseif($img1!="" && $img2=="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM service WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Event/'.$hapus['gambar1']);
unlink('../gambar/Event/'.$hapus['gambar3']);
        $query = mysqli_query($konek, "UPDATE service SET nama = '$nama', detail = '$detail', gambar1 = '$img1', gambar3 = '$img3' WHERE id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Event/'.$img1);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Event/'.$img3);
    }elseif($img1!="" && $img2!="" && $img3==""){
$sql=mysqli_query($connection, "SELECT * FROM service WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Event/'.$hapus['gambar1']);
unlink('../gambar/Event/'.$hapus['gambar2']);
         $query = mysqli_query($konek, "UPDATE service SET nama = '$nama', detail = '$detail', gambar1 = '$img1', gambar2 = '$img2' WHERE id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Event/'.$img1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Event/'.$img2);
    }elseif($img1!="" && $img2=="" && $img3==""){
$sql=mysqli_query($connection, "SELECT * FROM service WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Event/'.$hapus['gambar1']);
        $query = mysqli_query($konek, "UPDATE service SET nama = '$nama', detail = '$detail', gambar1 = '$img1' WHERE id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Event/'.$img1);
    }elseif($img1=="" && $img2!="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM service WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Event/'.$hapus['gambar2']);
unlink('../gambar/Event/'.$hapus['gambar3']);
        $query = mysqli_query($konek, "UPDATE service SET nama = '$nama', detail = '$detail', gambar2 = '$img2', gambar3 = '$img3' WHERE id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Event/'.$img2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Event/'.$img3);
    }elseif($img1=="" && $img2!="" && $img3==""){
$sql=mysqli_query($connection, "SELECT * FROM service WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Event/'.$hapus['gambar2']);
        $query = mysqli_query($konek, "UPDATE service SET nama = '$nama', detail = '$detail', gambar2 = '$img2' WHERE id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Event/'.$img2);
    }elseif($img1=="" && $img2=="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM service WHERE id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Event/'.$hapus['gambar3']);
        $query = mysqli_query($konek, "UPDATE service SET nama = '$nama', detail = '$detail', gambar3 = '$img3' WHERE id='$id' ")
        or die(mysqli_error());
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Event/'.$img3);
    }else{      
       $query = mysqli_query($konek, "UPDATE service SET nama = '$nama', detail = '$detail' WHERE id='$id' ")
        or die(mysqli_error());
    }
           if(isset($_POST['simpandankeluar'])){
          header('location:../eo.php');
    }
    echo"<script>alert('Data Berhasil Diubah!');history.go(-1);</script>";
    ?>