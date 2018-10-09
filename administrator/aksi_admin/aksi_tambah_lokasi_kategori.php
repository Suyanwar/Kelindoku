    <?php
include 'konek.php';
include 'session.php';
        $kota = $_POST['nama'];
        $img1 = $_FILES['gambar']['name'];       
        $query = "INSERT INTO lokasi_kategori(lokasi, gambar)
                VALUES('$kota', '$img1')";
        $input = mysqli_query($connection, $query);
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/Lokasi/'.$_FILES['gambar']['name']);
        if (isset($_POST['simpan'])){
        header('location:../tambah_posting/tambah_lokasi.php');
    }elseif(isset($_POST['simpandankeluar'])){
          header('location:../mobil.php');
    }
    ?>