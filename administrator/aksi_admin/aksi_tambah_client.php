    <?php
include 'konek.php';
include 'session.php';
        $img1 = $_FILES['gambar']['name'];
        $query = "INSERT INTO client(gambar)
                VALUES('$img1')";
        $input = mysqli_query($connection, $query);
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/Client/'.$_FILES['gambar']['name']);
        if (isset($_POST['simpan'])){
        header('location:../tambah_posting/tambah_client.php');
    }elseif(isset($_POST['simpandankeluar'])){
          header('location:../eo.php');
    }
    ?>