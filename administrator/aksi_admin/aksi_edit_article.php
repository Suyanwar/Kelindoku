<?php
include 'konek.php';
include 'session.php';        
        $tgl=date('Y-m-d');
        $id = $_POST['article_id'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $harga = $_POST['isi1'];
        $fasilitas = $_POST['isi2'];
        $extra = $_POST['isi3'];
        $perkap = $_POST['isi4'];
        $rundown = $_POST['isi5'];
        $link = $_POST['isi6'];
        $img1 = $_FILES['gambar1']['name'];
        $img2 = $_FILES['gambar2']['name'];
        $img3 = $_FILES['gambar3']['name'];        
    if($img1!="" && $img2!="" && $img3!=""){        
$sql=mysqli_query($connection, "SELECT * FROM article WHERE article_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Article/'.$hapus['gambar1']);
unlink('../gambar/Article/'.$hapus['gambar2']);
unlink('../gambar/Article/'.$hapus['gambar3']);
        $query = mysqli_query($connection, "UPDATE article SET judul='$judul', isi='$isi', tanggal = '$tgl', link = '$link', harga = '$harga', fasilitas = '$fasilitas', extras = '$extra', perkap = '$perkap', rundown = '$rundown', gambar1 = '$img1', gambar2 = '$img2', gambar3 = '$img3' WHERE article_id='$id' ")
        or die(mysqli_error());
		$move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Article/'.$img1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Article/'.$img2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Article/'.$img3);
        
	}elseif($img1!="" && $img2=="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM article WHERE article_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Article/'.$hapus['gambar1']);
unlink('../gambar/Article/'.$hapus['gambar3']);
        $query = mysqli_query($connection, "UPDATE article SET judul='$judul', isi='$isi', tanggal = '$tgl', link = '$link', harga = '$harga', fasilitas = '$fasilitas', extras = '$extra', perkap = '$perkap', rundown = '$rundown', gambar1 = '$img1', gambar3 = '$img3' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Article/'.$img1);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Article/'.$img3);
	}elseif($img1!="" && $img2!="" && $img3==""){
$sql=mysqli_query($connection, "SELECT * FROM article WHERE article_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Article/'.$hapus['gambar1']);
unlink('../gambar/Article/'.$hapus['gambar2']);
         $query = mysqli_query($connection, "UPDATE article SET judul='$judul', isi='$isi', tanggal = '$tgl', link = '$link', harga = '$harga', fasilitas = '$fasilitas', extras = '$extra', perkap = '$perkap', rundown = '$rundown', gambar1 = '$img1', gambar2 = '$img2' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Article/'.$img1);
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Article/'.$img2);
    }elseif($img1!="" && $img2=="" && $img3==""){
$sql=mysqli_query($connection, "SELECT * FROM article WHERE article_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Article/'.$hapus['gambar1']);
        $query = mysqli_query($connection, "UPDATE article SET judul='$judul', isi='$isi', tanggal = '$tgl', link = '$link', harga = '$harga', fasilitas = '$fasilitas', extras = '$extra', perkap = '$perkap', rundown = '$rundown', gambar1 = '$img1' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move1 = move_uploaded_file($_FILES['gambar1']['tmp_name'],'../gambar/Article/'.$img1);
    }elseif($img1=="" && $img2!="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM article WHERE article_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Article/'.$hapus['gambar2']);
unlink('../gambar/Article/'.$hapus['gambar3']);
        $query = mysqli_query($connection, "UPDATE article SET judul='$judul', isi='$isi', tanggal = '$tgl', link = '$link', harga = '$harga', fasilitas = '$fasilitas', extras = '$extra', perkap = '$perkap', rundown = '$rundown', gambar2 = '$img2', gambar3 = '$img3' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Article/'.$img2);
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Article/'.$img3);
    }elseif($img1=="" && $img2!="" && $img3==""){
$sql=mysqli_query($connection, "SELECT * FROM article WHERE article_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Article/'.$hapus['gambar2']);
        $query = mysqli_query($connection, "UPDATE article SET judul='$judul', isi='$isi', tanggal = '$tgl', link = '$link', harga = '$harga', fasilitas = '$fasilitas', extras = '$extra', perkap = '$perkap', rundown = '$rundown', gambar2 = '$img2' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move2 = move_uploaded_file($_FILES['gambar2']['tmp_name'],'../gambar/Article/'.$img2);
    }elseif($img1=="" && $img2=="" && $img3!=""){
$sql=mysqli_query($connection, "SELECT * FROM article WHERE article_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Article/'.$hapus['gambar3']);
        $query = mysqli_query($connection, "UPDATE article SET judul='$judul', isi='$isi', tanggal = '$tgl', link = '$link', harga = '$harga', fasilitas = '$fasilitas', extras = '$extra', perkap = '$perkap', rundown = '$rundown', gambar3 = '$img3' WHERE article_id='$id' ")
        or die(mysqli_error());
        $move3 = move_uploaded_file($_FILES['gambar3']['tmp_name'],'../gambar/Article/'.$img3);
    }else{		
       $query = mysqli_query($connection, "UPDATE article SET judul='$judul', isi='$isi', tanggal = '$tgl', link = '$link', harga = '$harga', fasilitas = '$fasilitas', extras = '$extra', perkap = '$perkap', rundown = '$rundown' WHERE article_id='$id' ")
        or die(mysqli_error());
	}
           if(isset($_POST['simpandankeluar'])){
          header('location:../article.php');
    }
    echo"<script>alert('Data Berhasil Diubah!');history.go(-1);</script>";
    ?>