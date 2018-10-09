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
<link href=css/bootstrap.min.css rel=stylesheet>
<link href=css/font-awesome.min.css rel=stylesheet>
<link href=css/transnesia-style.css rel=stylesheet>
<link rel=stylesheet href=css/back-top/reset-top.css>
<link rel=stylesheet href=css/back-top/style-top.css>
<script src=js/jquery-1.11.3.min.js></script>
<link rel=stylesheet href=css/style.css>
<link rel=stylesheet href=css/animate.css>
<link rel=stylesheet href=css/animate.min.css type=text/css>
<script src=js/jquery-1.11.3.min.js></script>
<script src=js/bootstrap-3.3.5.min.js></script>
</head>
<body class=about-page id=home>
<div id=loader-wrapper>
<div id=loader></div>
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>
<div style=clear:both></div>
<section class=transnesia-top-section>
<div class=transnesia-header>
<img class=transnesia-header-img src=img/header.png alt=Header>
<a href=#><img class=transnesia-site-logo src=img/kelindoku-transport.png alt=image></a>
<div class=mobile-menu-icon>
<i class="fa fa-bars"></i>
</div>
<header class=header-part>
<div class=transnesia-nav-container>
<nav class=transnesia-nav role=navigation>
<ul>
<li><a class=link href=#home class=active>Home</a></li>
<li><a class=link href=#city>Kota</a></li>
<li><a class=link href=#terms>Terms</a></li>
<li><a class=link href=#testi>Testimonial</a></li>
<li><a class=link href=#contact>Contacts</a></li>
</ul>
</nav>
</div>
</header>
</div>
<div class="transnesia-welcome welcome-slider">
<div class=container>
<div class=row>
<div class=flexslider>
<ul class=slides>
<li>
<div class=about-slider>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<img src=img/avanza.png class=img-responsive alt=Image>
</div>
<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
<h2 class="text-uppercase welcome-title">
<span class=welcome-title-1>Supir yang ramah</span>
<span class=welcome-title-2>dalam berkendara</span>
</h2>
<p class=welcome-message>Supir yang bertugas memiliki standarisasi mulai dari kerapian, kebersihan dan tingkat keramahan dalam berkendara, sehingga membuat perjalanan anda terasa nyaman.</p>
</div>
</div>
</li>
<li>
<div class=about-slider>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<img src=img/fortuner.png class=img-responsive alt=Image>
</div>
<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
<h2 class="text-uppercase welcome-title">
<span class=welcome-title-1>Unit terbaru &amp;</span>
<span class=welcome-title-2>terawat dengan baik</span>
</h2>
<p class=welcome-message>Armada yang kami miliki terbaru dan terawat dengan baik.</p>
</div>
</div>
</li>
<li>
<div class=about-slider>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<img src=img/camry.png class=img-responsive alt=Image>
</div>
<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
<h2 class="text-uppercase welcome-title">
<span class=welcome-title-1>Proses cepat</span>
<span class=welcome-title-2>dengan harga terjangkau</span>
</h2>
<p class=welcome-message>Sistem kami yang real 24 jam memberikan pelayanan terbaik untuk anda di mana dan kapanpun anda berada. Tinggal cari, klik and deal dan proses pun akan berjalan hanya dalam hitungan menit.</p>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section id=city>
<div class="container bg-green">
<div class="flows-container-1 flows-image bg-green">
<div class=row>
<div class="col-lg-12 text-center">
<h2 class=section-heading>Jangkauan Kota</h2>
<hr class=primary>
</div>
<div class="container margin-bottom-50">
<div class=no-padding id=portfolio>
<div class=container-fluid><div id=content>
<div class="row no-gutter">
<?php 
    $article1 = mysqli_query($connection, "SELECT * FROM lokasi_kategori order by id_lk desc limit 3");
    $no = 1;
    while($rawa1 = mysqli_fetch_array($article1)){ 
    $id = $rawa1['id_lk'];   
    ?>
<div class="col-lg-4 col-sm-6">
<a class=portfolio-box href=products-<?php echo $rawa1['lokasi'] ?>.php>
<img class=img-responsive alt src=../administrator/gambar/Lokasi/<?php echo $rawa1['gambar'] ?>>
<div class=portfolio-box-caption>
<div class=portfolio-box-caption-content>
<div class=project-name>
<?php echo $rawa1['lokasi'] ?>
</div>
</div>
</div>
</a>
</div>
<?php $no++; }?><div id=more<?php echo $id; ?>>
<div align=center>
<a class="more more-icon" id=<?php echo $id; ?>>Show more</a></div>
<span id=" loader" class=loader style=display:none><span class=loader_txt>Loading....</span></span>
</div>
</div></div>
</div>
</div>
</div>
</div>
</div>
</section>
<section id=terms class="container margin-bottom-50">
<h2 class=flows-title>Syarat &amp; Ketentuan</h2>
<hr class=primary>
</div>
</div>
</div>
<div class=about-container>
<div class=about-container-left>
<img src=img/5.png alt=Image class=img-responsive>
</div>
<div class=about-container-right>
<p class=about-description>Untuk melakukan kerjasama dengan setiap pelanggan perorangan atau perusahaan. berikut ini kami uraikan syarat &amp; ketentuan yang wajib untuk dipahami dan dimengerti oleh penyewa. Dan tunduk pada Peraturan Pemerintah dan Undang Undang yang berlaku di Negara Kesatuan Republik Indonesia.</p>
<p class=about-description>Ketentuan ini berlaku untuk menjalankan kesepakatan sewa menyewa antara Kelindoku Transport sebagai penyedia jasa penyewa kendaraan di Indonesia, kendaraan roda empat untuk dipinjam (carter) sesuai dengan jadwal dan jangka waktu yang disepakati dengan syarat dan ketentuan sebagai berikut :</p>
<p class=flows-title-3><i class="fa fa-plus flows-icon"></i>Personal Rental</p>
<ul>
<li>1. Fotocopy KTP, KK, SIM, NPWP</li>
<li>2. Fotocopy rekening listrik, atau tagihan telpon, PBB</li>
<li>3. Fotocopy ID card karyawan atau surat resmi keterangan kerja</li></ul><br>
<p class=flows-title-3><i class="fa fa-plus flows-icon"></i>Corporate Rental</p>
<ul>
<li>1. Fotocopy NPWP (Nomor Pokok Wajib Pajak), SIUP, TDP</li>
<li>2. Fotocopy KTP (Kartu Tanda Penduduk) pimpinan perusahaan</li>
<li>3. Surat resmi dari kantor berupa PO (Purchase Order) </li></ul>
</div>
</div>
<div class="flows-container-1 bg-green">
<div class=flows-blocks-container>
<div class=flows-block>
<div class=flows-header>
<i class="fa fa-plus flows-icon"></i>
<h3 class=flows-title-2>Syarat &amp; Ketentuan 1</h3>
</div>
<p class=flows-description>Untuk personal rental diharuskan untuk memberikan deposit pada saat proses booking kendaraan, Deposit payment sebesar 50% dari harga sewa dan Pelunasan dibayarkan pada saat 1 hari sebelum penggunaan kendaraan.</p>
</div>
<div class=flows-block>
<div class=flows-header>
<i class="fa fa-plus flows-icon"></i>
<h3 class=flows-title-2>Syarat &amp; Ketentuan 2</h3>
</div>
<p class=flows-description>Jika penyewa menggunakan mobil melebihi batas waktu, maka akan dikenakan biaya overtime 10% per jam. Untuk lebih dari 6 jam, sewa akan dihitung menjadi 1 hari.</p>
</div>
</div>
<div class=flows-blocks-container>
<div class=flows-block>
<div class=flows-header>
<i class="fa fa-plus flows-icon"></i>
<h3 class=flows-title-2>Syarat &amp; Ketentuan 3</h3>
</div>
<p class=flows-description>Pembatalan sewa mobil dapat dilakukan selama 3×24 Jam sebelum jatuh hari sewa. Pembatalan sewa mobil 2×24jam DP tidak dapat diminta kembali.</p>
</div>
<div class=flows-block>
<div class=flows-header>
<i class="fa fa-plus flows-icon"></i>
<h3 class=flows-title-2>Syarat &amp; Ketentuan 4</h3>
</div>
<p class=flows-description>Jika anda mengirim melalui Bank Transfer mohon untuk mengirimkn bukti transfer melalui, email, whatsapp atau bbm, kemudian kami akan mengirimkan invoice atau bukti pembayaran ke alamat email anda.</p>
</div>
</div>
<div class=flows-blocks-container>
<div class=flows-block>
<div class=flows-header>
<i class="fa fa-plus flows-icon"></i>
<h3 class=flows-title-2>Syarat &amp; Ketentuan 5</h3>
</div>
<p class=flows-description>Kami berhak sepenuhnya menolak atau membatalkan penyewaan secara sepihak, dengan alasan yang cukup kuat misalnya data penyewa yang tidak lengkap dan jelas.</p>
</div>
</div>
</div>
</div>
<section class="wow zoomIn testimmonial section-padding" id=testi>
<div class=row>
<h2 class=flows-title>Testimonial</h2>
<hr class=primary>
<div class=col-xs-12>
<div class=testimonial-feed>
<div id=carousel-example-generic class="carousel slide" data-ride=carousel>
<div class=carousel-inner role=listbox>
<div class="item active text-center">
<?php
                                     
                                     $query = mysqli_query($connection, "SELECT * FROM testi_t where enabled = '1' ORDER BY id DESC", MYSQLI_USE_RESULT);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)){
                    ?>
<div class=image-bar><img src=img/testimonial.jpg alt></div>
<p><?php echo $data['tanggal'] ?></p>
<p><?php echo $data['isi']?></p>
<p><?php echo $data['nama'] ?></p>
</div>
<div class="item text-center">
<?php
                    $no++;
                    }
                    ?>
</div>
</div>
</div>
</div>
<div class=control-arrow>
<a class="fa fa-chevron-left right carousel-control" href=#carousel-example-generic role=button data-slide=next>
<i class=flaticon-previous11></i>
</a>
<a class="fa fa-chevron-right left carousel-control" href=#carousel-example-generic role=button data-slide=prev>
<i class=flaticon-next15></i>
</a>
</div>
</div>
</div>
<div class=contact-form-container>
<h4>Tuliskan pesan dan kesan anda mengenai pelayanan kami pada form di bawah ini.</h4>
<form action=aksi_kritik_saran2.php method=post class=tm-contact-form id=contactForm>
<div class="col-lg-5 col-md-5 contact-form-left">
<input type=hidden name=enabled value=0 />
<div class=form-group>
<input type=text name=fullname id=fullname class=form-control placeholder=NAME required/>
</div>
<div class=form-group>
<input type=email name=email id=email class=form-control placeholder="EMAIL ADDRESS" required/>
</div>
</div>
<div class="col-lg-7 col-md-7 contact-form-right">
<div class="form-group margin-bottom-0">
<textarea name=message id=message class=form-control rows=4 placeholder=MESSAGE required></textarea>
</div>
</div>
<div class="col-lg-12 col-md-12 submit-btn-container">
<button type=submit name=submit class="btn text-uppercase transnesia-submit-btn">Send Message</button>
</div>
</form>
</div>
</div>
</div>
</section>
</section>
<footer class=tm-footer id=contact>
<div class=container>
<div class="row margin-bottom-60 header-part">
<nav class="col-lg-2 col-md-2 tm-footer-nav tm-footer-div">
<h3 class=tm-footer-div-title>Main Menu</h3>
<ul>
<li><a class=link href=#home>Home</a></li>
<li><a class=link href=#city>Kota</a></li>
<li><a class=link href=#terms>Terms</a></li>
<li><a class=link href=#testi>Testimonial</a></li>
<li><a class=link href=#contact>Contact</a></li>
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
<script defer src=js/jquery.flexslider-min.js></script>
<script>$(window).load(function(){$(".flexslider").flexslider({animation:"slide",slideshow:true,prevText:"&#xf104;",nextText:"&#xf105;"});$("body").addClass("loaded")});</script>
<script>$(document).ready(function(){$(".link").click(function(){var a=$(this).attr("href");$("html, body").animate({scrollTop:$(a).offset().top},1000);return false})});</script>
<a href=#0 class=cd-top>Top</a>
<script src=js/jquery-1.11.3.min.js></script>
<script src=js/back-top/main-top.js></script>
<script type=text/javascript>$(document).ready(function(){$(window).bind("scroll",function(){var a=$("#topnav").height();($(window).scrollTop()>a)?$("nav").addClass("goToTop"):$("nav").removeClass("goToTop")})});</script>
<script>$("document").ready(function(a){var b=a("#home");a(window).scroll(function(){if(a(this).goToTop()>125){b.addClass("f-nav")}else{b.removeClass("f-nav")}})});</script>
<script type=text/javascript>$(document).ready(function(){$("#content").on("click",".more",function(){var a=$(this).attr("id");if(a){$("#loader").show();$.ajax({type:"POST",url:"load_ajax.php",data:{id:a},cache:false,success:function(b){$("#loader").hide();$("#more"+a).before(b);$("#more"+a).remove()}})}})});</script>
</body>
</html>