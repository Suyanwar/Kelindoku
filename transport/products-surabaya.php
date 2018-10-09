<!DOCTYPE html>
<?php
include '../administrator/aksi_admin/konek.php'; 
?>
<html lang=en>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<title>Kelindoku Transport</title>
<meta name=description content>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel=stylesheet type=text/css>
<link href=css/bootstrap3.0.0.min.css rel=stylesheet>
<link href=css/font-awesome.min.css rel=stylesheet>
<link href=css/transnesia-style.css rel=stylesheet>
<link rel=stylesheet href=css/back-top/reset-top.css>
<link rel=stylesheet href=css/back-top/style-top.css>
<script src=js/jquery-1.11.3.min.js></script>
</head>
<body>
<div style=clear:both></div>
<section class=transnesia-top-section>
<div class=transnesia-header>
<img class=transnesia-header-img src=img/header.png alt=Header>
<a href=index.php#home><img class=transnesia-site-logo src=img/kelindoku-transport.png alt=image></a>
<div class=mobile-menu-icon>
<i class="fa fa-bars"></i>
</div>
<header class=header-part>
<div class=transnesia-nav-container>
<nav class=transnesia-nav role=navigation>
<ul>
<li><a class=link href=index.php#home>Home</a></li>
<li><a class=link href=index.php#city>Kota</a></li>
<li><a class=link href=index.php#terms>Terms</a></li>
<li><a class=link href=index.php#testi>Testimonial</a></li>
<li><a class=link href=index.php#contact>Contacts</a></li>
</ul>
</nav>
</div>
</header>
</div>
<div class=transnesia-welcome>
<div class=container>
<div class=row>
<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
<img src=img/pajero.png class="img-responsive welcome-img" alt=Welcome>
</div>
<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
<h2 class=text-uppercase>
<span class=welcome-title-1>Unit terbaru &amp;</span>
<span class=welcome-title-2>terawat dengan baik</span>
</h2>
<p class=welcome-message>Armada yang kami miliki terbaru dan terawat dengan baik.</p>
</div>
</div>
</div>
</div>
</section>
<section class="container margin-bottom-50">
<div class="flows-container-1 flows-image bg-green">
<div class=row>
<h2 class="col-lg-12 text-center text-uppercase">List Mobil Yang Kami Tawarkan</h2>
<hr class=primary>
</div>
</div>
</section>
<section class="container margin-bottom-50">
<div class="tm-overflow-hidden row">
<aside class="tm-gallery-aside col-lg-3 col-md-3 col-sm-4 col-xs-12">
<nav class=tm-gallery-nav>
<h2 class=tm-gallery-nav-title>Location<i class="fa fa-caret-up"></i></h2>
<ul>
<li>
<a href=products-bali.php>
<img src=img/gallery-list-icon.png class=tm-gallery-list-img alt=Image>Bali
<i class="fa fa-caret-right tm-gallery-list-fa"></i>
</a>
</li>
<li>
<a href=products-jakarta.php>
<img src=img/gallery-list-icon.png class=tm-gallery-list-img alt=Image>Jakarta
<i class="fa fa-caret-right tm-gallery-list-fa"></i>
</a>
</li>
<li>
<a href=products-bandung.php>
<img src=img/gallery-list-icon.png class=tm-gallery-list-img alt=Image>Bandung
<i class="fa fa-caret-right tm-gallery-list-fa"></i>
</a>
</li>
<li>
<a href=products-jogjakarta.php>
<img src=img/gallery-list-icon.png class=tm-gallery-list-img alt=Image>Yogyakarta
<i class="fa fa-caret-right tm-gallery-list-fa"></i>
</a>
</li>
<li class=active>
<a href=#>
<img src=img/gallery-list-icon.png class=tm-gallery-list-img alt=Image>Surabaya
<i class="fa fa-caret-right tm-gallery-list-fa"></i>
</a>
</li>
</ul>
</nav>
<div class=tm-call-us>
<h3 class="text-uppercase tm-call-us-title">Hubungi Kami</h3>
<a href=tel: class=tm-call-us-link>0856 4644 9981</a>
</div>
</aside>
<?php
                                     
                                     $sql = mysqli_query($connection, "SELECT * FROM mobil where lokasi = 'surabaya'");
                    $no = 1;
                    while ($data = mysqli_fetch_array($sql)){
                    ?>
<div class=tm-item-container>
<img class=col-xs-12 alt=Image src=../administrator/gambar/Mobil/<?php echo $data['gambar1'] ?> />
<p class=tm-item-description><?php echo $data['nama'] ?></p><hr>
<div class=tm-item-price-container>
<a class="tm-item-link edit-record" data-toggle=modal href=#modal<?php echo $data['id'] ?>>
<img src=img/plus.png class=tm-item-add-icon alt=Image>
<span class="btn btn-default">Detail &amp; Pesan</span>
</a>
</div>
</div><?php $no++; }?>
</div>
</section>
<footer class=tm-footer>
<div class=container>
<div class="row margin-bottom-60 header-part">
<nav class="col-lg-2 col-md-2 tm-footer-nav tm-footer-div">
<h3 class=tm-footer-div-title>Main Menu</h3>
<ul>
<li><a class=link href=index.php>Home</a></li>
<li><a class=link href=index.php#city>Kota</a></li>
<li><a class=link href=index.php#terms>Terms</a></li>
<li><a class=link href=index.php#testi>Testimonial</a></li>
<li><a class=link href=index.php#contact>Contact</a></li>
</ul>
</nav>
<div class="col-lg-7 col-md-5 tm-footer-div">
<h3 class=tm-footer-div-title>About Us</h3>
<p class=margin-top-15>Kelindoku Transport merupakan anak perusahaan dari PT Keliling Indonesiaku Sejahtera yang menyediakan layanan solusi transportasi di Indonesia. Dengan pelayanan yang ramah dan elegant, Kami menawarkan berbagai bentuk transportasi sebagai solusi untuk kebutuhan transportasi anda.</p>
<p class=margin-top-15>Layanan kami mencangkup beberapa kota – kota besar di Indonesia seperti ; Jakarta, Bandung, Yogyakarta, Semarang, Surabaya, Malang, Bali dan Lombok. Jenis kendaraan yang kami tawarkan mulai dari SUV, MPV, Mini Bus dan Big Bus. </p>
<p class=margin-top-15>Dalam rangka memenuhi kebutuhan para pelanggan kami, Kami menawarkan produk unggulan kami seperti :</p>
<ul class=margin-top-15><li>• Personal Rental</li>
<p class=margin-top-15>Personal Rental merupakan layanan jangka pendek yang dapat menyesuaikan kebutuhan anda. Dalam layanan personal rental, Jangka waktu pelayanan yang kami tawarkan mulai dari 6 hingga 18 jam atau transfer in/out bandara.</p>
<li>• Corporate Rental</li>
<p class=margin-top-15>Corporate Rental merupakan layanan jangka panjang untuk memenuhi kebutuhan setiap perusahaan dalam hal transportasi</p>
</ul>
</div>
<div class="col-lg-3 col-md-3 tm-footer-div">
<h3 class=tm-footer-div-title>Contact Us</h3>
<ul>
<p class="fa fa-phone margin-top-15"><span> Phone :</span></p>
<li><a class=link href=#>0856 4644 9981</a></li>
<p class="fa fa-envelope margin-top-15"><span> Email :</span></p>
<li><a class=link href=#>info@kelindoku-group.com</a></li>
</ul>
<h3 class=tm-footer-div-title>Get Social</h3>
<p>Temukan kami dalam media sosial.</p>
<div class=tm-social-icons-container>
<a href="https://web.facebook.com/Kelindoku-Organizer-290136524659144/?skip_nax_wizard=true" class=tm-social-icon><i class="fa fa-facebook"></i></a>
<a href=# class=tm-social-icon><i class="fa fa-twitter"></i></a>
<a href=# class=tm-social-icon><i class="fa fa-linkedin"></i></a>
<a href=# class=tm-social-icon><i class="fa fa-youtube"></i></a>
</div>
</div>
</div>
<div class="row tm-copyright">
<p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2016 Kelindoku-group</p>
</div>
</div>
</footer>
<script type=text/javascript src=js/jquery-1.11.2.min.js></script>
<script type=text/javascript src=js/transnesia-script.js></script>
<script>$(document).ready(function(){$(".link").click(function(){var a=$(this).attr("href");$("html, body").animate({scrollTop:$(a).offset().top},1000);return false})});</script>
<a href=#0 class=cd-top>Top</a>
<script src=js/jquery-1.11.3.min.js></script>
<script src=js/back-top/main-top.js></script>
<script type=text/javascript>$(document).ready(function(){$(window).bind("scroll",function(){var a=$("#topnav").height();($(window).scrollTop()>a)?$("nav").addClass("goToTop"):$("nav").removeClass("goToTop")})});</script>
<script>$("document").ready(function(a){var b=a("#home");a(window).scroll(function(){if(a(this).goToTop()>125){b.addClass("f-nav")}else{b.removeClass("f-nav")}})});</script>
<?php
                                     
                                     $query1 = mysqli_query($connection, "SELECT * FROM mobil where lokasi = 'surabaya'");
                    $no = 1;
                    while ($data1 = mysqli_fetch_array($query1)){
                    ?>
<div class="modal fade" id=modal<?php echo $data1['id'] ?> tabindex=-1 role=dialog aria-labelledby=myModalLabel aria-hidden=true>
<div class="modal-dialog modal-lg modal-80p">
<div class=modal-content>
<div class="modal-header modal-header-success">
<button type=button class=close data-dismiss=modal>
<span aria-hidden=true>×</span>
<span class=sr-only>Close</span>
</button>
<h4 class="modal-title text-center" id=myModalLabel>
Detail dan Reservasi
</h4>
</div>
<div class=modal-body>
<form class=form-horizontal action="pesan_mobil.php" method="post">
<input type=hidden name=id value=<?php echo $data1['id']; ?> />
<input type=hidden name=lokasi value=<?php echo $data1['lokasi']; ?> />
<div class="form-group form-group-sm">
<div class=col-sm-6>
<div class=services-container-inner>
<h3 class=about-title-2><?php echo $data1['nama'] ?></h3>
</div>
<div id=carousel-example-generic class="carousel slide" data-ride=carousel>
<ol class=carousel-indicators>
<li data-target=#carousel-example-generic data-slide-to=0 class=active></li>
<li data-target=#carousel-example-generic data-slide-to=1></li>
<li data-target=#carousel-example-generic data-slide-to=2></li>
</ol>
<div class="carousel-inner modal-container" role=listbox>
<div class="item active">
<img class=col-xs-13 src=../administrator/gambar/Mobil/<?php echo $data1['gambar1'] ?> />
</div>
<div class=item>
<img class=col-xs-13 src=../administrator/gambar/Mobil/<?php echo $data1['gambar2'] ?> />
</div>
<div class=item>
<img class=col-xs-13 src=../administrator/gambar/Mobil/<?php echo $data1['gambar3'] ?> />
</div>
</div>
<a class="left carousel-control" href=#carousel-example-generic role=button data-slide=prev>
<span aria-hidden=true></span>
<span class=sr-only>Previous</span>
</a>
<a class="right carousel-control" href=#carousel-example-generic role=button data-slide=next>
<span aria-hidden=true></span>
<span class=sr-only>Next</span>
</a>
</div> <br>
<p class=about-description><?php echo $data1['detail'] ?></p>
</div>
<div class=col-sm-6>
<div id=normalcontact>
<div class=form-group>
<div class=col-sm-12>
<span class="label label-default">*Nama Lengkap</span>
<input type=text class=form-control name=nama id=new_contact placeholder=nama required />
</div>
</div>
<div class=form-group>
<div class=col-sm-12>
<span class="label label-default">*Phone</span>
<input type=text class=form-control name=nomor id=new_phone placeholder=+62 required />
</div>
</div>
<div class=form-group>
<div class=col-sm-12>
<span class="label label-default">*Alamat Email</span>
<input type=email name=email class=form-control id=new_email placeholder=Email required />
</div>
</div>
<div class=form-group action=action_page.php>
<div class=col-sm-12>
<span class="label label-default">*Tanggal Sewa:</span>
<div class=input-group>
<input type=date name=tanggal1 min=2016-05-01 class=form-control placeholder=mm/dd/yyyy required /> <span class=input-group-addon><i id=calIconTourDateDetails class="fa fa-calendar"></i></span>
</div>
</div>
</div>
<div class=form-group action=action_page.php>
<div class=col-sm-12>
<span for=idTourDateDetails class="label label-default">*Tanggal Pengembalian:</span>
<div class=input-group>
<input type=date name=tanggal2 min=2016-05-01 class=form-control placeholder=mm/dd/yyyy required /> <span class=input-group-addon><i id=calIconTourDateDetails2 class="fa fa-calendar"></i></span>
</div>
</div>
</div>
<div class=form-group>
<div class=col-sm-12>
<span class="label label-default">*Alamat Penjemputan</span>
<textarea class=form-control rows=2 name=alamat id=new_address required></textarea>
</div>
</div>
<div class=form-group>
<div class=col-sm-12>
<span class="label label-default">Keterangan</span>
<textarea class=form-control rows=5 name=keterangan id=new_comments></textarea>
</div>
</div>
</div>
</div>
</div>
<div class=modal-footer>
<button type=button class="btn btn-default" data-dismiss=modal>Cancel</button>
<button type=submit class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<?php $no++; } ?>
<script src=js/bootstrap-3.3.5.min.js></script>
<script type=text/javascript>$("#tabs").tabs();$("#newConsigneeModal").on("hidden.bs.modal",function(a){});$("#newConsigneeReset").on("click",function(){$("#newConsigneeModal").find("form")[0].reset()});$("#newConsigneeSubmit").on("click",function(){submitNewConsignee()});function submitNewConsignee(){$("#new_comments").hide()}</script>
<script src=http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js></script>
<script src=http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js></script>
<script>webshims.setOptions("waitReady",false);webshims.setOptions("forms-ext",{types:"date"});webshims.polyfill("forms forms-ext");</script>
</body>
</html>