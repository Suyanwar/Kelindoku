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
<li class=sub-menu>
<a href=../mobil.php class>
<i class=icon-plane></i>
<span>Kelindoku-Transport</span>
</a>
</li>
<li class="sub-menu active">
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
Our Services
</h3>
<ul class=breadcrumb>
<li>
<a href=../dashboard.php>Home</a>
<span class=divider>/</span>
</li>
<li class=active>
Our Services
</li>
</ul>
</div>
</div>
<?php
        $id = $_GET['id'];
        $sql = mysqli_query($connection, "SELECT * FROM ads where id='$id'") or die(mysqli_error());
        $data = mysqli_fetch_array($sql);
        ?>
<div class=row-fluid>
<div class=span12>
<div class="widget green">
<div class=widget-title>
<h4><i class=icon-reorder></i> Edit Video</h4>
<span class=tools>
<a href=javascript: class=icon-chevron-down></a>
</span>
</div>
<div class=widget-body>
<form name=edit_lokasi action=../aksi_admin/aksi_edit_video.php class=form-horizontal method=POST enctype=multipart/form-data>
<input type=hidden name=id value=<?php echo $id; ?> />
<div class=control-group>
<label class=control-label>Nama Video</label>
<div class=controls>
<input type=text placeholder="Masukan nama video" class=input-xlarge name=nama value="<?php echo $data['judul'] ?>" required/>
</div>
</div>
<div class=control-group>
<label class=control-label>Link</label>
<div class=controls>
<input type=text placeholder="Masukan link" class=input-xlarge name=link value=<?php echo $data['link'] ?> required/>
</div>
</div>
<div class=control-group>
<label class=control-label>Thumbnail</label>
<div class=controls>
<div class="fileupload fileupload-new" data-provides=fileupload>
<div class="fileupload-new thumbnail" style=width:200px;height:150px><img src=../gambar/Thumbnail/<?php echo $data['thumbnail'] ?> alt /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style=max-width:200px;max-height:150px;line-height:20px></div>
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
<button type=submit name=simpandankeluar class="btn blue"><i class=icon-ok></i> Simpan &amp; Keluar</button>
<a href=../eo.php><button type=button class=btn><i class=icon-remove></i> Keluar</button></a>
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
<script type=text/javascript src=../assets/chosen-bootstrap/chosen/chosen.jquery.min.js></script>
<script type=text/javascript src=../assets/uniform/jquery.uniform.min.js></script>
<script src=../js/common-scripts.js></script>
</body>
</html>