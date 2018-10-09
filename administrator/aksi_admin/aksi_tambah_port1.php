    <?php
include 'konek.php';
include 'session.php';
        $img1 = $_FILES['gambar']['name'];       
        $query = "INSERT INTO port1(gambar)
                VALUES('$img1')";
        $input = mysqli_query($connection, $query);
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/Portfolio/'.$_FILES['gambar']['name']);
        if (isset($_POST['simpan'])){
        header('location:../tambah_posting/tambah_port1.php');
    }elseif(isset($_POST['simpandankeluar'])){
          header('location:../eo.php');
    }
    ?>