<?php
include 'administrator/aksi_admin/konek.php';
 if(isset($_POST["price"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM article WHERE harga < ".$_POST['price']." ORDER BY article_id desc";  
      $result = mysqli_query($connection, $query);
      $count = mysqli_num_rows($result);  
      if($count > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
    $isi = $row['isi'];
    $id = $row['article_id'];
    $teks = substr($isi, 0, 100);
                $output .= '  
                     <div class="wow zoomIn col-md-4">
          <img class="img-responsive" src="administrator/gambar/Article/'.$row['gambar1'].'" />
          <div class="blog-date-wrapper">
            <span class="floatleft"><i class="fa fa-calendar"></i> '.$row['tanggal'].'</span>
            <span class="clearboth"> &nbsp; </span>
          </div>
          <div class="blog-container">
            <h2><a href="#" target="_blank">'.$row['judul'].'</a></h2>
<p>Rp '.$row['harga'].'.000,-<br />'.$teks.'</p>
            <a class="custom-button" href="readmore.php?id='.$id.'" >read more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>';}
      }  
      else  
      {  
           $output = "No Paket Found";  
      }
      echo $output;  
}  
 ?>