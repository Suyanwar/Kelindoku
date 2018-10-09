
        <?php
include 'administrator/aksi_admin/konek.php';
        // Fungsi untuk Merubah susunan format tanggal
        
        // Ambil variabel dari form
        
        $tgl=date('Y-m-d');
        $nama = $_POST['fullname'];
        $email = $_POST['email'];
        $komen = $_POST['message'];
        $enabled = $_POST['enabled'];
       
        $query = "INSERT INTO kritik_saran(nama, isi, email, tanggal, enabled)
                VALUES('$nama','$komen','$email','$tgl', '$enabled')";
        $input = mysqli_query($connection, $query);
        //Simpan dalam folder
        
        //Pengalihan Button
        if (isset($_POST['submit'])){
        header('location:index.php');
    }
    
    ?>