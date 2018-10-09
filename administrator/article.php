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
<li class="sub-menu active">
<a href=article.php class>
<i class=icon-book></i>
<span>Kelindoku-Tour</span>
</a>
</li>
<li class=sub-menu>
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
Kelindoku
</h3>
<ul class=breadcrumb>
<li>
<a href=dashboard.php>Home</a>
<span class=divider>/</span>
</li>
<li class=active>
Kelindoku
</li>
</ul>
</div>
</div>
<div class=row-fluid>
<div class=span12>
<div class="widget purple">
<div class=widget-title>
<h4><i class=icon-reorder></i> Daftar Paket</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div>
<div class=clearfix>
<a href=tambah_posting/tambah_article.php>
<div class=btn-group>
<button class="btn green">
Tambah Paket <i class=icon-plus></i>
</button>
</div>
</a>
<div class=space15></div><div style=overflow-x:auto;overflow-y:hidden>
<table class="table table-striped table-hover" id=editable-sample>
<thead>
<tr>
<th>Opsi</th>
<th>Judul</th>
<th>Tanggal</th>
<th>Harga</th>
<th>Img1</th>
<th>Img2</th>
<th>Img3</th>
<th>Link</th>
</tr>
</thead>
<tbody>
<?php
                                     $sql = mysqli_query($connection, "SELECT * FROM article ORDER BY article_id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($sql)){
                      $harga = $data['harga'];
                      $img1 = $data['gambar1'];
                      $img2 = $data['gambar2'];
                      $img3 = $data['gambar3'];
                      $link = $data['link'];
                      $A2=substr($harga, 0, 10);
                      $A7=substr($img1, 0, 10);
                      $A8=substr($img2, 0, 10);
                      $A9=substr($img3, 0, 10);
                      $A3=substr($link, 0, 10);
                    ?>
<tr class>
<td><a href="edit_posting/edit_article.php?id=<?php echo $data['article_id']; ?>"><b class=icon-pencil></b></a> ||
<a href="aksi_admin/aksi_hapus_article.php?id=<?php echo $data['article_id'];?>"><b class=icon-trash></b></a></td>
<td><?php echo $data['judul']; ?></td>
<td><?php echo $data['tanggal']; ?></td>
<td><?php echo $A2; ?></td>
<td><?php echo $A7; ?></td>
<td><?php echo $A8; ?></td>
<td><?php echo $A9; ?></td>
<td><?php echo $A3; ?></td>
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
<h4><i class=icon-reorder></i> Daftar Our Story</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div>
<div class=clearfix>
<a href=tambah_posting/tambah_tips.php>
<div class=btn-group>
<button class="btn green">
Tambah Story <i class=icon-plus></i>
</button>
</div>
</a>
<div class=space15></div><div style=overflow-x:auto;overflow-y:hidden>
<table class="table table-striped table-hover" id=editable-sample1>
<thead>
<tr>
<th>Opsi</th>
<th>Judul</th>
<th>Tanggal</th>
<th>Isi</th>
<th>Gambar</th>
</tr>
</thead>
<tbody>
<?php
                                     $query1 = mysqli_query($connection, "SELECT * FROM story ORDER BY story_id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query1)){
                      $isi = $data['isi'];
                      $potong_text=substr($isi, 0, 10);
                      $isi2 = $data['gambar'];
                      $potong_text2=substr($isi2, 0, 10);
                    ?>
<tr class>
<td><a href="edit_posting/edit_tips.php?id=<?php echo $data['story_id']; ?>"><b class=icon-pencil></b></a> ||
<a href="aksi_admin/aksi_hapus_tips.php?id=<?php echo $data['story_id'];?>"><b class=icon-trash></b></a></td>
<td><?php echo $data['judul']; ?></td>
<td><?php echo $data['tanggal']; ?></td>
<td><?php echo $potong_text; ?></td>
<td><?php echo $potong_text2; ?></td>
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
<div class="widget green">
<div class=widget-title>
<h4><i class=icon-reorder></i> Ganti Slider</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body><div style=overflow-x:auto;overflow-y:hidden><table class=table>
<td>
<form name=ganti_slider action=aksi_admin/aksi_ganti_slider.php class=form-horizontal method=POST enctype=multipart/form-data>
<input type=hidden name=id value=1 />
<div class=control-group>
<label class=control-label>Gambar 1</label>
<div class=controls>
<div class="fileupload fileupload-new" data-provides=fileupload>
<div class="fileupload-new thumbnail" style=width:100px;height:75px><img src=img/demoUpload.jpg alt /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style=max-width:100px;max-height:75px;line-height:20px></div>
<div>
<span class="btn btn-file btn-primary">
<span class=fileupload-new>Select image</span>
<span class=fileupload-exists>Change</span>
<input type=file name="gambar"/>
</span>
<a href=# class="btn btn-danger fileupload-exists" data-dismiss=fileupload>Remove</a>
</div>
</div>
</div>
</div>
<label class=control-label>Link</label>
<div class=controls>
<input type=text placeholder="Masukan Link" class=input-medium name=link />
</div>
<div class=form-actions>
<button type=submit name=simpan class="btn blue"><i class=icon-ok></i> Simpan</button>
</div>
</form></td><td>
<form name=ganti_slider action=aksi_admin/aksi_ganti_slider.php class=form-horizontal method=POST enctype=multipart/form-data>
<input type=hidden name=id value=2 />
<div class=control-group>
<label class=control-label>Gambar 2</label>
<div class=controls>
<div class="fileupload fileupload-new" data-provides=fileupload>
<div class="fileupload-new thumbnail" style=width:100px;height:75px><img src=img/demoUpload.jpg alt /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style=max-width:100px;max-height:75px;line-height:20px></div>
<div>
<span class="btn btn-file btn-primary">
<span class=fileupload-new>Select image</span>
<span class=fileupload-exists>Change</span>
<input type=file name="gambar"/>
</span>
<a href=# class="btn btn-danger fileupload-exists" data-dismiss=fileupload>Remove</a>
</div>
</div>
</div>
</div>
<label class=control-label>Link</label>
<div class=controls>
<input type=text placeholder="Masukan Link" class=input-medium name=link />
</div>
<div class=form-actions>
<button type=submit name=simpan class="btn blue"><i class=icon-ok></i> Simpan</button>
</div>
</form></td><td>
<form name=ganti_slider action=aksi_admin/aksi_ganti_slider.php class=form-horizontal method=POST enctype=multipart/form-data>
<input type=hidden name=id value=3 />
<div class=control-group>
<label class=control-label>Gambar 3</label>
<div class=controls>
<div class="fileupload fileupload-new" data-provides=fileupload>
<div class="fileupload-new thumbnail" style=width:100px;height:75px><img src=img/demoUpload.jpg alt /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style=max-width:100px;max-height:75px;line-height:20px></div>
<div>
<span class="btn btn-file btn-primary">
<span class=fileupload-new>Select image</span>
<span class=fileupload-exists>Change</span>
<input type=file name="gambar"/>
</span>
<a href=# class="btn btn-danger fileupload-exists" data-dismiss=fileupload>Remove</a>
</div>
</div>
</div>
</div>
<label class=control-label>Link</label>
<div class=controls>
<input type=text placeholder="Masukan Link" class=input-medium name=link />
</div>
<div class=form-actions>
<button type=submit name=simpan class="btn blue"><i class=icon-ok></i> Simpan</button>
</div>
</form></td>
</table></div></div>
</div>
</div>
</div>
<div class=row-fluid>
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
                                     $query = mysqli_query($connection, "SELECT * FROM kritik_saran ORDER BY isi_id DESC", MYSQLI_USE_RESULT);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)){
                    ?>
<div class=msg-time-chat>
<a class=message-img href=#><img alt src=img/emo.png class=avatar></a>
<div class="message-body msg-out">
<span class=arrow></span>
<div class=text>
<p class=attribution><a href=#><?php echo $data['nama'] ?></a> <?php echo $data['tanggal'] ?>
<a class="hapus-a hapus" href="aksi_admin/aksi_hapus_kritik_saran.php?id=<?php echo $data['isi_id'];?>"><b class="icon-trash hapus"></b> </a><br />
<a class="hapus-a hapus" href="aksi_admin/aksi_aktif_kritik_saran.php?id=<?php echo $data['isi_id'];?>"><b class="icon-pencil hapus"></b> </a>
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
<div class=span6>
<div class="widget green">
<div class=widget-title>
<h4><i class=icon-reorder></i> Daftar Subscriber</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div>
<div class=space15></div><div style=overflow-x:auto;overflow-y:hidden>
<table class="table table-striped table-hover" id=editable-sample2>
<thead>
<tr>
<th>Opsi</th>
<th>Email</th>
</tr>
</thead>
<?php
                                     $query2 = mysqli_query($connection, "SELECT * FROM subscribers ORDER BY id DESC");
                    $no = 1;
                    while ($subscribe = mysqli_fetch_array($query2)){
                    ?>
<tr class>
<td><a href="aksi_admin/aksi_hapus_subscribers.php?id=<?php echo $subscribe['id'];?>"><b class=icon-trash></b></a></td>
<td><?php echo $subscribe['email']; ?></td>
</tr>
<?php
                    $no++;
                    }  
                    ?>
</table></div>
</div>
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
<script src=js/bootstrap-fileupload.js></script>
<script src=js/editable-table.js></script>
<script src=js/editable-table1.js></script>
<script src=js/editable-table2.js></script>
<script>jQuery(document).ready(function(){EditableTable.init()});</script>
<script>jQuery(document).ready(function(){EditableTable1.init()});</script>
<script>jQuery(document).ready(function(){EditableTable2.init()});</script>
</body>
</html>