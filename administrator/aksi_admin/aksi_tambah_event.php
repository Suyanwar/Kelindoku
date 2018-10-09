    <?php
include 'konek.php';
include 'session.php';        
        $nama = $_POST['nama'];
        $detail = $_POST['detail'];
        $img1 = $_FILES['gambar1']['name'];
        $img2 = $_FILES['gambar2']['name'];
        $img3 = $_FILES['gambar3']['name'];       
        $query = "INSERT INTO service(nama, detail, gambar1, gambar2, gambar3)
                VALUES('$nama','$detail', '$img1', '$img2', '$img3')";
        $input = mysqli_query($connection, $query);
        move_uploaded_file($_FILES['gambar1']['tmp_name'], '../gambar/Event/'.$_FILES['gambar1']['name']);
        move_uploaded_file($_FILES['gambar2']['tmp_name'], '../gambar/Event/'.$_FILES['gambar2']['name']);
        move_uploaded_file($_FILES['gambar3']['tmp_name'], '../gambar/Event/'.$_FILES['gambar3']['name']);
        if (isset($_POST['simpan'])){
        header('location:../tambah_posting/tambah_event.php');
    }elseif(isset($_POST['simpandankeluar'])){
          header('location:../eo.php');
    }
    ?>