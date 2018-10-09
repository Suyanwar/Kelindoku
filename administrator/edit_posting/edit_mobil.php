<!DOCTYPE html>
<?php
include '../aksi_admin/konek.php';
include '../aksi_admin/session.php';
?>
<head>
<title>Administrator</title>
<link href=../assets/bootstrap/css/bootstrap.min.css rel=stylesheet />
<link href=../assets/bootstrap/css/bootstrap-responsive.min.css rel=stylesheet />
<link href=../assets/bootstrap/css/bootstrap-fileupload.css rel=stylesheet />
<link href=../assets/font-awesome/css/font-awesome.css rel=stylesheet />
<link href=../css/style.css rel=stylesheet />
<link href=../css/style-responsive.css rel=stylesheet />
<link href=../css/style-default.css rel=stylesheet id=style_color />
<link rel=stylesheet href=../assets/css/bootstrap-fileupload.min.css />
</head>
<body class=fixed-top>
<div id=header class="navbar navbar-inverse navbar-fixed-top">
<div class=navbar-inner>
<div class=container-fluid>
<div class="sidebar-toggle-box hidden-phone">
<div class=icon-reorder></div>
</div>
<a class=brand href=../dashboard.php>
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
<a class="dropdown-toggle element" data-placement=bottom data-toggle=tooltip href=../aksi_logout.php data-original-title=Keluar>
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
<a class href=../dashboard.php>
<i class=icon-dashboard></i>
<span>Dashboard</span>
</a>
</li>
<li class=sub-menu>
<a href=../article.php class>
<i class=icon-book></i>
<span>Kelindoku-Tour</span>
</a>
</li>
<li class="sub-menu active">
<a href=../mobil.php class>
<i class=icon-plane></i>
<span>Kelindoku-Transport</span>
</a>
</li>
<li class=sub-menu>
<a href=../eo.php class>
<i class=icon-camera></i>
<span>Kelindoku-EO</span>
</a>
</li>
</ul>
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
<a href=../dashboard.php>Home</a>
<span class=divider>/</span>
</li>
<li class=active>
Car List
</li>
</ul>
</div>
</div>
<?php
        $id = $_GET['id'];
        $sql = mysqli_query($connection, "SELECT * FROM mobil where id='$id'") or die(mysqli_error());
        $data = mysqli_fetch_array($sql);
        ?>
<div class=row-fluid>
<div class=span12>
<div class="widget green">
<div class=widget-title>
<h4><i class=icon-reorder></i> Edit Mobil</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<form name=edit_mobil action=../aksi_admin/aksi_edit_mobil.php class=form-horizontal method=POST enctype=multipart/form-data>
<input type=hidden name=id value=<?php echo $id; ?> />
<div class=control-group>
<label class=control-label>Nama</label>
<div class=controls>
<input type=text placeholder="Masukan Nama Mobil" class=input-xlarge name=nama value="<?php echo $data['nama'] ?>" required/>
</div>
</div>
<div class=control-group>
<label class=control-label>Lokasi</label>
<div class=controls>
<select class="input-large m-wrap" tabindex=1 name=lokasi required/>
<option value=<?php echo $data['lokasi'] ?>><?php echo $data['lokasi'] ?></option>
<?php
                                                $query1 = mysqli_query($connection, "SELECT * FROM lokasi_kategori");
                                                 $na = 1;
                                                while ($coba = mysqli_fetch_array($query1)){
                                            ?>
<option value=<?php echo $coba['lokasi'] ?>><?php echo $coba['lokasi'] ?></option>
<?php 
                                                $na++;
                                                }
                                              ?>
</select>
</div>
</div>
<div class=control-group>
<label class=control-label>Details</label>
<div class=controls>
<div id=div-1 class="body collapse in">
<textarea cols=60 rows=5 id=posting name=isi value="<?php echo $data['detail'] ?>" required/><?php echo $data['detail'] ?></textarea>
</div>
</div>
</div>
<div class=control-group>
<label class=control-label>Gambar 1</label>
<div class=controls>
<div class="fileupload fileupload-new" data-provides=fileupload>
<div class="fileupload-new thumbnail" style=width:200px;height:150px><img src=../gambar/Mobil/<?php echo $data['gambar1'] ?> alt /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style=max-width:200px;max-height:150px;line-height:20px></div>
<div>
<span class="btn btn-file btn-primary">
<span class=fileupload-new>Select image</span>
<span class=fileupload-exists>Change</span>
<input type=file name="gambar1"/>
</span>
<a href=# class="btn btn-danger fileupload-exists" data-dismiss=fileupload>Remove</a>
</div>
</div>
</div>
</div>
<div class=control-group>
<label class=control-label>Gambar 2</label>
<div class=controls>
<div class="fileupload fileupload-new" data-provides=fileupload>
<div class="fileupload-new thumbnail" style=width:200px;height:150px><img src=../gambar/Mobil/<?php echo $data['gambar2'] ?> alt /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style=max-width:200px;max-height:150px;line-height:20px></div>
<div>
<span class="btn btn-file btn-primary">
<span class=fileupload-new>Select image</span>
<span class=fileupload-exists>Change</span>
<input type=file name="gambar2"/>
</span>
<a href=# class="btn btn-danger fileupload-exists" data-dismiss=fileupload>Remove</a>
</div>
</div>
</div>
</div>
<div class=control-group>
<label class=control-label>Gambar 3</label>
<div class=controls>
<div class="fileupload fileupload-new" data-provides=fileupload>
<div class="fileupload-new thumbnail" style=width:200px;height:150px><img src=../gambar/Mobil/<?php echo $data['gambar3'] ?> alt /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style=max-width:200px;max-height:150px;line-height:20px></div>
<div>
<span class="btn btn-file btn-primary">
<span class=fileupload-new>Select image</span>
<span class=fileupload-exists>Change</span>
<input type=file name="gambar3"/>
</span>
<a href=# class="btn btn-danger fileupload-exists" data-dismiss=fileupload>Remove</a>
</div>
</div>
</div>
</div>
<div class=form-actions>
<button type=submit name=simpandankeluar class="btn blue"><i class=icon-ok></i> Simpan &amp; Keluar</button>
<a href=../mobil.php><button type=button class=btn><i class=icon-remove></i> Keluar</button></a>
</div>
</form>
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
<script src=../js/jquery-1.8.3.min.js></script>
<script src=../js/jquery.nicescroll.js type=text/javascript></script>
<script src=../assets/bootstrap/js/bootstrap.min.js></script>
<script type=text/javascript src=../assets/ckeditor1/ckeditor.js></script>
<script type=text/javascript src=../assets/chosen-bootstrap/chosen/chosen.jquery.min.js></script>
<script type=text/javascript src=../assets/uniform/jquery.uniform.min.js></script>
= <script src=../js/common-scripts.js></script>
<script src=../js/bootstrap-fileupload.js></script>
<script type=text/javascript>var editor=CKEDITOR.replace("posting");</script>
</body>
</html>