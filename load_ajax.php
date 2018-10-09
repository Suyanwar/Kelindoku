<?php
include 'administrator/aksi_admin/konek.php';
$id = trim($_REQUEST['id']);
$qry="SELECT * FROM article where article_id < $id ORDER BY article_id DESC LIMIT 3";
$sql=mysqli_query($connection, $qry);
while($row = mysqli_fetch_assoc($sql))
{
$id = $row['article_id'];
    $isi = $row['isi'];
    $teks = substr($isi, 0, 100);   
    ?>
<div class="wow zoomIn col-md-4">
<img class="img-responsive" src="administrator/gambar/Article/<?php echo $row['gambar1'] ?>" />
<div class="blog-date-wrapper">
<span class="floatleft"><i class="fa fa-calendar"></i> <?php echo $row['tanggal'] ?></span>
<span class="clearboth"> &nbsp; </span>
</div>
<div class="blog-container">
<h2><a href="#" target="_blank"><?php echo $row['judul'] ?></a></h2>
<p>Rp <?php echo $row['harga']; ?>.000,-<br /><?php echo $teks ?></p>
<a class="custom-button" href="readmore.php?id=<?php echo $row['article_id']; ?>">read more <i class="fa fa-angle-right"></i></a>
</div></div>
<?php 
} if(mysqli_num_rows($sql)==3){?>
<div id="more<?php echo $id; ?>">
<span class="more" id="<?php echo $id; ?>">Show more</span>
<span id=" loader" class="loader" style="display:none"><span class="loader_txt">Loading....</span></span>
</div>
<?php } ?>