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
<li class="sub-menu active">
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
<li class=sub-menu>
<a href=eo.php class>
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
Dashboard
</h3>
<ul class=breadcrumb>
<li>
<a href=dashboard.php>Home</a>
<span class=active></span>
</li>
</ul>
</div>
</div>
<div class=row-fluid>
<div class=span12>
<div class=metro-nav>
<div class="metro-nav-block nav-block-blue double">
<a data-original-title href=#>
<i class=icon-eye-open></i>
<div class=info>+897</div>
<div class=status>Unique Visitor</div>
</a>
</div>
</div>
</div>
<a href=https://cpanel.idhostinger.com/website/stats/aid/20357045>
<div class=btn-group>
<button class="btn green">
Statistics
</button>
</div>
</a>
</div>
</div>
</div>
</div>
<div id=footer>
Powered By : PMBG.
</div>
<script src=js/jquery-1.8.3.min.js></script>
<script src=js/jquery.nicescroll.js type=text/javascript></script>
<script src=js/jquery.blockui.js></script>
<script src=assets/bootstrap/js/bootstrap.min.js></script>
<script type=text/javascript src=assets/uniform/jquery.uniform.min.js></script>
<script src=js/common-scripts.js></script>
</body>
</html>