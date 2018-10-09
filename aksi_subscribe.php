    <?php
        $email = $_POST['email'];
include 'administrator/aksi_admin/konek.php';
        $query = "INSERT INTO subscribers(email)
                VALUES('$email')";
        $input = mysqli_query($connection, $query);
        if ($input == 1){
            echo "window.alert('Data Berhasil Ditambah!')";
            header('location:index.php');
        }
        else {
           echo"<script>alert('Data Berhasil Ditambah!');history.go(-1);</script>";
            header('location:index.php');
        }
    ?>