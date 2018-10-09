    <?php
include 'konek.php';
include 'session.php';        
        $judul = $_POST['judul'];
        $id = $_POST['story_id'];
        $isi = $_POST['isi'];
        $tgl=date('Y-m-d');
        $fileName = $_FILES['gambar']['name'];        
        if($fileName==""){
            $query = mysqli_query($connection, "UPDATE story SET judul ='$judul', isi='$isi', tanggal='$tgl' WHERE story_id='$id' ")
        or die(mysqli_error());
        }else{
$sql=mysqli_query($connection, "SELECT * FROM story WHERE story_id = '$id'");
$hapus = mysqli_fetch_array($sql);
unlink('../gambar/Story/'.$hapus['gambar']);
        $query = mysqli_query($connection, "UPDATE story SET judul ='$judul', isi='$isi', gambar='$fileName', tanggal='$tgl' WHERE story_id='$id' ")
        or die(mysqli_error());
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'],'../gambar/Story/'.$fileName);
            }
        if (isset($_POST['simpan'])){
        header('location:../article.php');
    }
    
    ?>