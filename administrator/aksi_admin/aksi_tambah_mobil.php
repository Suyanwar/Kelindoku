    <?php    
include 'konek.php';
include 'session.php';
        $nama = $_POST['nama'];
        $lokasi = $_POST['lokasi'];
        $isi = $_POST['isi'];
        $img1 = $_FILES['gambar1']['name'];
        $img2 = $_FILES['gambar2']['name'];
        $img3 = $_FILES['gambar3']['name'];
        $query = "INSERT INTO mobil(nama, detail, lokasi, gambar1, gambar2, gambar3)
                VALUES('$nama','$isi','$lokasi', '$img1', '$img2', '$img3')";
        $input = mysqli_query($connection, $query);
        move_uploaded_file($_FILES['gambar1']['tmp_name'], '../gambar/Mobil/'.$_FILES['gambar1']['name']);
        move_uploaded_file($_FILES['gambar2']['tmp_name'], '../gambar/Mobil/'.$_FILES['gambar2']['name']);
        move_uploaded_file($_FILES['gambar3']['tmp_name'], '../gambar/Mobil/'.$_FILES['gambar3']['name']);
        if (isset($_POST['simpan'])){
        header('location:../tambah_posting/tambah_mobil.php');
    }elseif(isset($_POST['simpandankeluar'])){
          header('location:../mobil.php');
    }
    ?>