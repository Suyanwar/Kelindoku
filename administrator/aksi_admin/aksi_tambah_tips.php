    <?php
include 'konek.php';
include 'session.php';		
        $isi = $_POST['isi'];
        $judul = $_POST['judul'];
        $tgl=date('Y-m-d');
        $fileName = $_FILES['gambar']['name'];		
        $query = "INSERT INTO story(judul, isi, tanggal, gambar)
                VALUES('$judul', '$isi', '$tgl', '$fileName')";
        $input = mysqli_query($connection, $query);
		move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/Story/'.$_FILES['gambar']['name']);
        if (isset($_POST['simpan'])){
        header('location:../tambah_posting/tambah_tips.php');
    }else{
        header('location:../article.php');
    }
    ?>