<!DOCTYPE html>
<?php
include 'aksi_admin/konek.php';
include 'aksi_admin/session.php';
 ?>
<head>
<title>Administrator</title>
<link href=assets/bootstrap/css/bootstrap.min.css rel=stylesheet />
<link href=assets/bootstrap/css/bootstrap-responsive.min.css rel=stylesheet />
<link href=assets/bootstrap/css/bootstrap-fileupload.css rel=stylesheet />
<link href=assets/font-awesome/css/font-awesome.css rel=stylesheet />
<link href=css/style.css rel=stylesheet />
<link href=css/style-responsive.css rel=stylesheet />
<link href=css/style-default.css rel=stylesheet id=style_color />
<link rel=stylesheet href=assets/data-tables/DT_bootstrap.css />
</head>
<body class=fixed-top>
<div id=header class="navbar navbar-inverse navbar-fixed-top">
<div class=navbar-inner>
<div class=container-fluid>
<div class="sidebar-toggle-box hidden-phone">
<div class=icon-reorder></div>
</div>
<a class=brand href=dashboard.php>
<h3 class=sub-menu>Administrator</h3>
</a>
<a class="btn btn-navbar collapsed" id=main_menu_trigger data-toggle=collapse data-target=.nav-collapse>
<span class=icon-bar></span>
<span class=icon-bar></span>
<span class=icon-bar></span>
<span class=arrow></span>
</a>
<div id=top_menu class="nav notify-row">
<ul class="nav top-menu">
</ul>
</div>
<div class=top-nav>
<ul class="nav pull-right top-menu">
<li class="dropdown mtop5">
<a class="dropdown-toggle element" data-placement=bottom data-toggle=tooltip href=aksi_admin/aksi_logout.php data-original-title=Keluar>
<i class=icon-off></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div id=container class=row-fluid>
<div class=sidebar-scroll>
<div id=sidebar class="nav-collapse collapse">
<ul class=sidebar-menu>
<li class=sub-menu>
<a class href=dashboard.php>
<i class=icon-dashboard></i>
<span>Dashboard</span>
</a>
</li>
<li class=sub-menu>
<a href=article.php class>
<i class=icon-book></i>
<span>Kelindoku-Tour</span>
</a>
</li>
<li class="sub-menu active">
<a href=mobil.php class>
<i class=icon-plane></i>
<span>Kelindoku-Transport</span>
</a>
</li>
<li class=sub-menu>
<a href=eo.php class>
<i class=icon-camera></i>
<span>Kelindoku-EO</span>
</a>
</li>
</ul>
</div>
</div>
</div>
<div id=main-content>
<div class=container-fluid>
<div class=row-fluid>
<div class=span12>
<h3 class=page-title>
Car List
</h3>
<ul class=breadcrumb>
<li>
<a href=dashboard.php>Home</a>
<span class=divider>/</span>
</li>
<li class=active>
Car List
</li>
</ul>
</div>
</div>
<div class=row-fluid>
<div class=span12>
<div class="widget purple">
<div class=widget-title>
<h4><i class=icon-reorder></i> Daftar Mobil</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div>
<div class=clearfix>
<a href=tambah_posting/tambah_mobil.php>
<div class=btn-group>
<button class="btn green">
Tambah Mobil <i class=icon-plus></i>
</button>
</div>
</a>
<div class=space15></div><div style=overflow-x:auto;overflow-y:hidden>
<table class="table table-striped table-hover" id=editable-sample>
<thead>
<tr>
<th>Opsi</th>
<th>Nama</th>
<th>Lokasi</th>
<th>Img1</th>
<th>Img2</th>
<th>Img3</th>
</tr>
</thead>
<tbody>
<?php
                                     $sql = mysqli_query($connection, "SELECT * FROM mobil ORDER BY id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($sql)){
                      $img1 = $data['gambar1'];
                      $img2 = $data['gambar2'];
                      $img3 = $data['gambar3'];
                      $A4=substr($img1, 0, 5);
                      $A5=substr($img2, 0, 5);
                      $A6=substr($img3, 0, 5);
                    ?>
<tr class>
<td><a href="edit_posting/edit_mobil.php?id=<?php echo $data['id']; ?>"><b class=icon-pencil></b></a> ||
<a href="aksi_admin/aksi_hapus_mobil.php?id=<?php echo $data['id'];?>"><b class=icon-trash></b></a></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['lokasi']; ?></td>
<td><?php echo $A4; ?></td>
<td><?php echo $A5; ?></td>
<td><?php echo $A6; ?></td>
</tr>
<?php
                    $no++;
                    }  
                    ?>
</tbody>
</table></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=row-fluid>
<div class=span12>
<div class="widget purple">
<div class=widget-title>
<h4><i class=icon-reorder></i> Daftar Lokasi</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div>
<div class=clearfix>
<a href=tambah_posting/tambah_lokasi.php>
<div class=btn-group>
<button class="btn green">
Tambah Lokasi<i class=icon-plus></i>
</button>
</div>
</a>
<div class=space15></div><div style=overflow-x:auto;overflow-y:hidden>
<table class="table table-striped table-hover" id=editable-sample1>
<thead>
<tr>
<th>Opsi</th>
<th>Lokasi</th>
<th>Gambar</th>
</tr>
</thead>
<tbody>
<?php
                                     $query1 = mysqli_query($connection, "SELECT * FROM lokasi_kategori ORDER BY id_lk DESC");
                    $no = 1;
                    while ($data1 = mysqli_fetch_array($query1)){
                      $img1 = $data1['gambar'];
                      $A4 = substr($img1, 0, 10)
                    ?>
<tr class>
<td><a href="edit_posting/edit_lokasi.php?id=<?php echo $data1['id_lk']; ?>"><b class=icon-pencil></b></a> ||
<a href="aksi_admin/aksi_hapus_lokasi.php?id=<?php echo $data1['id_lk'];?>"><b class=icon-trash></b></a></td>
<td><?php echo $data1['lokasi']; ?></td>
<td><?php echo $A4; ?></td>
</tr>
<?php
                    $no++;
                    }  
                    ?>
</tbody>
</table></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=span6>
<div class="widget red scr">
<div class="widget-title scrol">
<h4><i class=icon-comments-alt></i>Testimonial</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div class="timeline-messages scroll">
<?php
                                     $query = mysqli_query($connection, "SELECT * FROM testi_t ORDER BY id DESC", MYSQLI_USE_RESULT);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)){
                    ?>
<div class=msg-time-chat>
<a class=message-img href=#><img alt src=img/emo.png class=avatar></a>
<div class="message-body msg-out">
<span class=arrow></span>
<div class=text>
<p class=attribution><a href=#><?php echo $data['nama'] ?></a> <?php echo $data['tanggal'] ?>
<a href="aksi_admin/aksi_hapus_testi_t.php?id=<?php echo $data['id'];?>" class="hapus-a hapus"><b class="icon-trash hapus"></b> </a><br />
<a class="hapus-a hapus" href="aksi_admin/aksi_aktif_testi_t.php?id=<?php echo $data['id'];?>"><b class="icon-pencil hapus"></b> </a>
</p>
<p><?php echo $data['isi']?></p>
</div>
</div>
</div>
<?php
                    $no++;
                    }  
                    ?>
</div>
</div>
</div>
</div>
</div>
</div>
<div id=footer>
Powered By : PMBG
</div>
<script src=js/jquery-1.8.3.min.js></script>
<script src=js/jquery.nicescroll.js type=text/javascript></script>
<script src=assets/bootstrap/js/bootstrap.min.js></script>
<script src=js/jquery.blockui.js></script>
<script type=text/javascript src=assets/data-tables/jquery.dataTables.js></script>
<script type=text/javascript src=assets/data-tables/DT_bootstrap.js></script>
<script src=js/common-scripts.js></script>
<script src=js/editable-table.js></script>
<script src=js/editable-table1.js></script>
<script>jQuery(document).ready(function(){EditableTable.init()});</script>
<script>jQuery(document).ready(function(){EditableTable1.init()});</script>
</body>
</html>