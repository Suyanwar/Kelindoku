<!DOCTYPE html>
<?php 
include 'administrator/aksi_admin/konek.php';
?>
<html>
<head>
<title>KELINDOKU</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type=image/png href="img/golok.png"/>
<link href=css/bootstrap.min.css rel=stylesheet>
<link rel=stylesheet href=vendor/font-awesome/css/font-awesome.min.css>
<link href=css/templatemo_style.css rel=stylesheet>
<link href=css/style.css rel=stylesheet>
</head>
<body>
<header>
<div id=home class=mainArticle>
<div class=container>
<div class=row>
<div class="hidden-xs hidden-sm col-md-6">
<div class=mailme>
<a class=imel><i class="fa fa-envelope"></i>info@kelindoku-group.com</a>
</div>
</div>
<div class="col-sm-12 col-md-6">
<div class=socialss>
<ul>
<li><a href=#><i class="fa fa-twitter socc"></i></a></li>
<li><a href=https://web.facebook.com/Kelindoku-Organizer-290136524659144/?skip_nax_wizard=true><i class="fa fa-facebook socc"></i></a></li>
<li><a href=#><i class="fa fa-instagram socc"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="navi navbar-default" role=navigation>
<div class=container>
<div class="navbar-header page-scroll">
<a href=#menu>
<button type=button data-effect=st-effect-1 class="navbar-toggle collapsed" data-toggle=collapse data-target=#navbar aria-expanded=false aria-controls=navbar>
<span class=sr-only>Toggle navigation</span>
<span class=icon-bar></span>
<span class=icon-bar></span>
<span class=icon-bar></span>
</button>
</a><!--
<a class=navbar-brand href=index.php><img src=img/golok.png alt=Kelindoku></a>-->
</div>
<div id=navbar class="navbar-collapse collapse pull-right hidden-xs">
<ul class="nav navbar-nav navbar-right">
<li><a class=page-scroll href=index.php#home>Home</a></li>
<li> <a class=page-scroll href=index.php#pack>Paket Tour</a></li>
<li> <a class=page-scroll href=index.php#blog>Our Story</a></li>
<li> <a class=page-scroll href=index.php#about>About Us</a></li>
<li> <a class=page-scroll href=index.php#testi>Testimonial</a></li>
<li><a class=page-scroll href=index.php#contact>Contact</a></li>
</ul>
</div>
</div>
</div>
<div class=container>
<div class=row>
<div class=col-md-12>
<div class=secHeader>
<?php
              $id = $_GET['id'];
        $query = mysqli_query($connection, "select * from story where story_id='$id'") or die(mysqli_error());
        
        $data = mysqli_fetch_array($query);
        ?>
<h1 class=text-center><?php echo $data['judul'] ?></h1>
<img src="administrator/gambar/Story/<?php echo $data['gambar'] ?>">
</div>
<div class=glView>
<br>
<?php echo $data['isi']; ?>
</div>
</div>
<br /><br /><?php
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div id=share-buttons>
<a href="mailto:?Subject=Our Story: <?php echo $data['judul'] ?>">
<img src=https://simplesharebuttons.com/images/somacro/email.png alt=Email />
</a>
<a href="http://www.facebook.com/sharer.php?u=<?php echo $link ?>" target=_blank>
<img src=https://simplesharebuttons.com/images/somacro/facebook.png alt=Facebook />
</a>
<a href="https://plus.google.com/share?url=<?php echo $link ?>" target=_blank>
<img src=https://simplesharebuttons.com/images/somacro/google.png alt=Google />
</a>
<a href="https://twitter.com/share?url=<?php echo $link ?>" target=_blank>
<img src=https://simplesharebuttons.com/images/somacro/twitter.png alt=Twitter />
</a>
</div>
</div>
</div>
</div>
<footer class=footer1 id=foo>
<div class=container>
<div class=row>
<div class=col-md-4>
<div class=info1>
<h4>Contact</h4>
<div class=addr>
<p>Untuk informasi lebih lanjut, hubungi :</p>
<ul>
<li><i class="fa fa-map-marker"></i>
Jl. Gading Raya No 73, Pisangan Timur &#45; Rawamangun</li>
<li><i class="fa fa-mobile-phone"></i>+62856 4644 9981</li>
<li><i class="fa fa-globe"></i><a rel=nofollow href=kelindoku-group.com>kelindoku-group.com</a></li>
<li><i class="fa fa-envelope"></i>info@kelindoku-group.com</li>
</ul>
</div>
</div>
</div>
<div class=col-md-4>
<div class=info2>
<h4>Komentar dan Saran</h4>
<p>Berikan komentar dan saran untuk website kami pada kolom komentar dibawah ini :</p>
<div id=disqus_thread></div>
<script>var disqus_config=function(){this.page.url=readmore-story.php;this.page.identifier=<?php echo $data['story_id'] ?>};(function(){var b=document,a=b.createElement("script");a.src="//suyanwar.disqus.com/embed.js";a.setAttribute("data-timestamp",+new Date());(b.head||b.body).appendChild(a)})();</script>
<script id=dsq-count-scr src=//suyanwar.disqus.com/count.js async></script>
</div>
</div>
<div class=col-md-4>
<div class=info3>
<h4>Subscribe</h4>
<p>Daftar dan dapatkan tips dan update terbaru tentang wisata di Indonesia setiap hari nya</p>
<form action=aksi_subscribe.php method=post enctype=multipart/form-data>
<div class=form-group>
<input type=text class=form-control name=email placeholder="Masukan Email" required/>
</div>
<div><button type=submit class="btn btn-primary">Kirim</button></div>
</form>
</div>
</div>
</footer>
<div class="bfWrap text-center">
<div class=templatemo_footer>Powered By : PMBG</div>
</div>
</body>
<script src=administrator/js/jquery-1.8.3.min.js></script>
<script src=administrator/js/jquery.nicescroll.js type=text/javascript></script>
<script src=administrator/assets/bootstrap/js/bootstrap.min.js></script>
<script src=administrator/js/jquery.blockui.js></script>
<script src=js/classie.js></script>
<script src=js/slick.min.js></script>
<script src=js/wow.min.js></script>
<script src=administrator/js/common-scripts.js></script>
<script type=text/javascript>jQuery(function(a){a(document).ready(function(){a(".mWrapper").stickUp()})});</script>
</html>