<?php
include '../administrator/aksi_admin/konek.php'; 
$id = trim($_REQUEST['id']);
$qry="SELECT * FROM lokasi_kategori where id_lk < $id ORDER BY id_lk DESC LIMIT 3";
$sql=mysqli_query($connection, $qry);
while($row = mysqli_fetch_assoc($sql))
{
$id = $row['id_lk'];
    ?>
<div class="col-lg-4 col-sm-6">
<a class="portfolio-box" href="products-<?php echo $row['lokasi'] ?>.php">
<img class="img-responsive" alt="" src="../administrator/gambar/Lokasi/<?php echo $row['gambar'] ?>">
<div class="portfolio-box-caption">
<div class="portfolio-box-caption-content">
<div class="project-name">
<?php echo $row['lokasi'] ?>
</div>
</div>
</div>
</a>
</div>
<?php 
} if(mysqli_num_rows($sql)==3){?>
<div id="more<?php echo $id; ?>">
<span class="more" id="<?php echo $id; ?>">Show more</span>
<span id=" loader" class="loader" style="display:none"><span class="loader_txt">Loading....</span></span>
</div>
<?php } ?>