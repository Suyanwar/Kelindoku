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
<li class=sub-menu>
<a href=mobil.php class>
<i class=icon-plane></i>
<span>Kelindoku-Transport</span>
</a>
</li>
<li class="sub-menu active">
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
Event Services
</h3>
<ul class=breadcrumb>
<li>
<a href=dashboard.php>Home</a>
<span class=divider>/</span>
</li>
<li class=active>
Event Services
</li>
</ul>
</div>
</div>
<div class=row-fluid>
<div class=span12>
<div class="widget purple">
<div class=widget-title>
<h4><i class=icon-reorder></i>Event Services</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div>
<div class=clearfix>
<a href=tambah_posting/tambah_event.php>
<div class=btn-group>
<button class="btn green">
Tambah Event<i class=icon-plus></i>
</button>
</div>
</a>
<div class=space15></div><div style=overflow-x:auto;overflow-y:hidden>
<table class="table table-striped table-hover" id=editable-sample>
<thead>
<tr>
<th>Opsi</th>
<th>Nama Event</th>
<th>Deskripsi</th>
<th>Gambar1</th>
<th>Gambar2</th>
<th>Gambar3</th>
</tr>
</thead>
<tbody>
<?php
                                     $sql = mysqli_query($connection, "SELECT * FROM service ORDER BY id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($sql)){
                      $isi = $data['detail'];
                      $potong = substr($isi, 0, 20);
                    ?>
<tr class>
<td><a href="edit_posting/edit_event.php?id=<?php echo $data['id']; ?>"><b class=icon-pencil></b></a> ||
<a href="aksi_admin/aksi_hapus_event.php?id=<?php echo $data['id'];?>"><b class=icon-trash></b></a></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $potong; ?></td>
<td><?php echo $data['gambar1']; ?></td>
<td><?php echo $data['gambar2']; ?></td>
<td><?php echo $data['gambar3']; ?></td>
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
<div class=row-fluid>
<div class=span12>
<div class="widget purple">
<div class=widget-title>
<h4><i class=icon-reorder></i>Video Events</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div>
<div class=clearfix>
<a href=tambah_posting/tambah_video.php>
<div class=btn-group>
<button class="btn green">
Tambah Video<i class=icon-plus></i>
</button>
</div>
</a>
<div class=space15></div><div style=overflow-x:auto;overflow-y:hidden>
<table class="table table-striped table-hover" id=editable-sample1>
<thead>
<tr>
<th>Opsi</th>
<th>Judul Video</th>
<th>Link</th>
<th>Thumbnail</th>
</tr>
</thead>
<tbody>
<?php
                                     $query1 = mysqli_query($connection, "SELECT * FROM ads ORDER BY id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query1)){
                      $isi = $data['link'];
                      $potong = substr($isi, 0, 20);
                    ?>
<tr class>
<td><a href="edit_posting/edit_video.php?id=<?php echo $data['id']; ?>"><b class=icon-pencil></b></a> ||
<a href="aksi_admin/aksi_hapus_video.php?id=<?php echo $data['id'];?>"><b class=icon-trash></b></a></td>
<td><?php echo $data['judul']; ?></td>
<td><?php echo $potong; ?></td>
<td><?php echo $data['thumbnail']; ?></td>
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
<div class=row-fluid>
<div class=span12>
<div class="widget purple">
<div class=widget-title>
<h4><i class=icon-reorder></i>Our Client</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div>
<div class=clearfix>
<a href=tambah_posting/tambah_client.php>
<div class=btn-group>
<button class="btn green">
Tambah Client<i class=icon-plus></i>
</button>
</div>
</a>
<div class=space15></div><div style=overflow-x:auto;overflow-y:hidden>
<table class="table table-striped table-hover" id=editable-sample2>
<thead>
<tr>
<th>Opsi</th>
<th>Gambar</th>
</tr>
</thead>
<tbody>
<?php
                                     $query2 = mysqli_query($connection, "SELECT * FROM client ORDER BY id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query2)){
                      $isi = $data['gambar'];
                      $potong = substr($isi, 0, 20);
                    ?>
<tr class>
<td><a href="edit_posting/edit_client.php?id=<?php echo $data['id']; ?>"><b class=icon-pencil></b></a> ||
<a href="aksi_admin/aksi_hapus_client.php?id=<?php echo $data['id'];?>"><b class=icon-trash></b></a></td>
<td><?php echo $potong; ?></td>
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

<div class=row-fluid>
<div class=span12>
<div class="widget purple">
<div class=widget-title>
<h4><i class=icon-reorder></i>Our Portfolio</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<div>
<div class=clearfix>
<a href=tambah_posting/tambah_port1.php>
<div class=btn-group>
<button class="btn green">
Tambah Portfolio<i class=icon-plus></i>
</button>
</div>
</a>
<div class=space15></div><div style=overflow-x:auto;overflow-y:hidden>
<table class="table table-striped table-hover" id=editable-sample3>
<thead>
<tr>
<th>Opsi</th>
<th>Gambar</th>
</tr>
</thead>
<tbody>
<?php
                                     $query3 = mysqli_query($connection, "SELECT * FROM port1 ORDER BY id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query3)){
                      $isi = $data['gambar'];
                      $potong = substr($isi, 0, 20);
                    ?>
<tr class>
<td><a href="edit_posting/edit_port1.php?id=<?php echo $data['id']; ?>"><b class=icon-pencil></b></a> ||
<a href="aksi_admin/aksi_hapus_port1.php?id=<?php echo $data['id'];?>"><b class=icon-trash></b></a></td>
<td><?php echo $potong; ?></td>
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
<div class=row-fluid>
<div class=span12>
<div class="widget green">
<div class=widget-title>
<h4><i class=icon-reorder></i> Ganti Slider</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body><div style=overflow-x:auto;overflow-y:hidden>
<table class=table><td>
<form name=ganti_slider1 action=aksi_admin/aksi_ganti_slider1.php class=form-horizontal method=POST enctype=multipart/form-data>
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
<div class=form-actions>
<button type=submit name=simpan class="btn blue"><i class=icon-ok></i> Simpan</button>
</div>
</form></td><td>
<form name=ganti_slider1 action=aksi_admin/aksi_ganti_slider1.php class=form-horizontal method=POST enctype=multipart/form-data>
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
<div class=form-actions>
<button type=submit name=simpan class="btn blue"><i class=icon-ok></i> Simpan</button>
</div>
</form></td><tr></tr><td>
<form name=ganti_slider1 action=aksi_admin/aksi_ganti_slider1.php class=form-horizontal method=POST enctype=multipart/form-data>
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
<div class=form-actions>
<button type=submit name=simpan class="btn blue"><i class=icon-ok></i> Simpan</button>
</div>
</form></td><td>
<form name=ganti_slider1 action=aksi_admin/aksi_ganti_slider1.php class=form-horizontal method=POST enctype=multipart/form-data>
<input type=hidden name=id value=4 />
<div class=control-group>
<label class=control-label>Gambar 4</label>
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
<div class=form-actions>
<button type=submit name=simpan class="btn blue"><i class=icon-ok></i> Simpan</button>
</div>
</form></td></table></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div></div></div>
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
<script src=js/editable-table3.js></script>
<script>jQuery(document).ready(function(){EditableTable.init()});</script>
<script>jQuery(document).ready(function(){EditableTable1.init()});</script>
<script>jQuery(document).ready(function(){EditableTable2.init()});</script>
<script>jQuery(document).ready(function(){EditableTable3.init()});</script>
</body>
</html>