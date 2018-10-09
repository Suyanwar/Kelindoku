    <?php
include 'konek.php';
include 'session.php';        
        $tgl=date('Y-m-d');
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
        $query = "INSERT INTO article(judul, isi, tanggal, harga, fasilitas, extras, perkap, rundown, gambar1, gambar2, gambar3, link)
                VALUES('$judul','$isi','$tgl', '$harga', '$fasilitas', '$extra', '$perkap', '$rundown', '$img1', '$img2', '$img3', '$link')";
        $input = mysqli_query($connection, $query);
        move_uploaded_file($_FILES['gambar1']['tmp_name'], '../gambar/Article/'.$_FILES['gambar1']['name']);
        move_uploaded_file($_FILES['gambar2']['tmp_name'], '../gambar/Article/'.$_FILES['gambar2']['name']);
        move_uploaded_file($_FILES['gambar3']['tmp_name'], '../gambar/Article/'.$_FILES['gambar3']['name']);
        if (isset($_POST['simpan'])){
        header('location:../tambah_posting/tambah_article.php');
    }else{
        header('location:../article.php');
    }
    ?>