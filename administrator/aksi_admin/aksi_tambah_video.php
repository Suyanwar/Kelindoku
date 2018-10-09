    <?php
include 'konek.php';
include 'session.php';        
        $video = $_POST['judul'];
        $link = $_POST['link'];
        $fileName = $_FILES['gambar']['name'];       
        $query = "INSERT INTO ads(judul, link, thumbnail)
                VALUES('$video', '$link', '$fileName')";
        $input = mysqli_query($connection, $query);
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/Thumbnail/'.$_FILES['gambar']['name']);
        if (isset($_POST['simpan'])){
        header('location:../tambah_posting/tambah_video.php');
    }elseif(isset($_POST['simpandankeluar'])){
          header('location:../eo.php');
    }
    ?>