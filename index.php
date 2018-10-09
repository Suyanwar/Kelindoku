<!DOCTYPE html>
<?php
include 'administrator/aksi_admin/konek.php';
?>
<html class=no-js>
<head>
<meta charset=utf-8>
<title>KELINDOKU</title>
<meta name=description content>
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type=image/png href="img/golok.png"/>
<link rel=stylesheet type=text/css href=vendor/rs-plugin/css/settings.css media="screen"/>
<link rel=stylesheet href=vendor/rs-plugin/css/extralayer.css>
<link rel=stylesheet href=vendor/flat-icon/flaticon.css>
<link rel=stylesheet href=vendor/font-awesome/css/font-awesome.min.css>
<link rel=stylesheet href=vendor/owl/css/owl.carousel.css>
<link rel=stylesheet href=vendor/owl/css/owl.theme.default.css>
<link rel=stylesheet href=vendor/owl/css/owl.theme.css>
<link href=css/bootstrap.min.css rel=stylesheet>
<link type=text/css rel=stylesheet href=vendor/mmenu/css/jquery.mmenu.css />
<link rel=stylesheet href=vendor/bootstrap/css/bootstrap.css>
<link rel=stylesheet href=css/animate.css>
<link rel=stylesheet href=css/templatemo_style.css>
<link rel=stylesheet href=css/hover.css>
<link rel=stylesheet href=css/reset.css>
<link rel=stylesheet href=css/style.css>
<link rel=stylesheet href=css/responsive.css>
<link rel=stylesheet type=text/css href=administrator/assets/uniform/css/uniform.default.css />
</head>
<body>
<div class=loader></div>
<div class=main id=home>
<div class=tp-banner-container>
<div class=tp-banner>
<ul>
<?php
                    $satu = mysqli_query($connection, "SELECT * FROM slider where id = '1'");
                    $row = mysqli_fetch_array($satu);
                    $dua = mysqli_query($connection, "SELECT * FROM slider where id = '2'");
                    $row2 = mysqli_fetch_array($dua);
                    $tiga = mysqli_query($connection, "SELECT * FROM slider where id = '3'");
                    $row3 = mysqli_fetch_array($tiga);
                ?>
<li class=items data-transition=slideleft data-slotamount=1 data-masterspeed=1500 data-thumb=administrator/gambar/Slider1/<?php echo $row['gambar'] ?> data-delay=8000 data-saveperformance=on>
<img src=administrator/gambar/Slider1/<?php echo $row['gambar'] ?> alt=kenburns1 data-bgposition="left center" data-kenburns=on data-duration=8000 data-ease=Linear.easeNone data-bgfit=100 data-bgfitend=130 data-bgpositionend="right center">
<div class="tp-caption very_large_text lfb ltt tp-resizeme head-tag" data-x=637 data-y=200 data-speed=600 data-start=1500 data-easing=Power3.easeInOut data-splitin=chars data-splitout=none data-elementdelay=0.1 style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap>
<h1>KELINDOKU</h1>
</div>
<div class="tp-caption very_large_text lfb ltt tp-resizeme head-tag" data-x=637 data-y=282 data-speed=600 data-start=1500 data-easing=Power3.easeInOut data-splitin=chars data-splitout=none data-elementdelay=0.1 style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap;color:#f9844c>
<h1>TOUR &AMP; TRAVEL</h1>
</div>
<div class="tp-caption lfl tp-resizeme" data-x=637 data-y=365 data-speed=500 data-start=3500 data-easing=Back.easeOut data-splitin=none data-splitout=none data-elementdelay=0.05 data-endelementdelay=0.1 data-endspeed=500 style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap>
<h2 class=small-title>Pelayanan terbaik</h2>
</div>
<div class="tp-caption lfl tp-resizeme" data-x=637 data-y=420 data-speed=1000 data-start=4000 data-easing=Back.easeOut data-splitin=none data-splitout=none data-elementdelay=0.05 data-endelementdelay=0.1 data-endspeed=500 data-endeasing=Power4.easeIn style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap>
<h2 class=small-title>Harga sesuai kebutuhan Anda</h2>
</div>
<div class="tp-caption lfl tp-resizeme" data-x=637 data-y=475 data-speed=2000 data-start=4500 data-easing=Back.easeOut data-splitin=none data-splitout=none data-elementdelay=0.05 data-endelementdelay=0.1 data-endspeed=500 data-endeasing=Power4.easeIn style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap>
<h2 class=small-title>Destinasi &amp; konsep wisata berbeda</h2>
</div>
<div class="tp-caption lfr tp-resizeme start-button" data-x=637 data-y=540 data-speed=3000 data-start=5500 data-easing=Back.easeOut data-splitin=none data-splitout=none data-elementdelay=0.05 data-endelementdelay=0.1 data-endspeed=500 data-endeasing=Power4.easeIn style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap>
<button type=button class="btn btn-default buy-btn" onclick="window.location='<?php echo $row['link'] ?>'">VISIT</button>
</div>
</li>
<li class=items data-transition=slideleft data-slotamount=1 data-masterspeed=1500 data-thumb=administrator/gambar/Slider1/<?php echo $row2['gambar'] ?> data-delay=8000 data-saveperformance=on>
<img src=administrator/gambar/Slider1/<?php echo $row2['gambar'] ?> alt=kenburns1 data-bgposition="left center" data-kenburns=on data-duration=8000 data-ease=Linear.easeNone data-bgfit=100 data-bgfitend=130 data-bgpositionend="right center">
<div class="tp-caption very_large_text lfb ltt tp-resizeme head-tag" data-x=left data-hoffset=20 data-y=center data-voffset=-100 data-speed=600 data-start=500 data-easing=Power3.easeInOut data-splitin=chars data-splitout=chars data-elementdelay=0.08 style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap;color:#339900>
<h1>KELINDOKU TRANSPORT</h1>
</div>
<div class="tp-caption lfl tp-resizeme" data-x=-100 data-y=340 data-speed=500 data-start=1500 data-easing=Power3.easeOut data-splitin=none data-splitout=none data-elementdelay=0.05 data-endelementdelay=0.1 data-endspeed=500 style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap>
<h2 class=small-title>Supir yang ramah</h2>
</div>
<div class="tp-caption lfl tp-resizeme" data-x=-100 data-y=400 data-speed=1000 data-start=2000 data-easing=Power3.easeOut data-splitin=none data-splitout=none data-elementdelay=0.05 data-endelementdelay=0.1 data-endspeed=500 data-endeasing=Power4.easeIn style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap>
<h2 class=small-title>Unit terbaru dan terawat</h2>
</div>
<div class="tp-caption lfl tp-resizeme" data-x=-100 data-y=460 data-speed=2000 data-start=2500 data-easing=Power3.easeOut data-splitin=none data-splitout=none data-elementdelay=0.05 data-endelementdelay=0.1 data-endspeed=500 data-endeasing=Power4.easeIn style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap>
<h2 class=small-title>Jujur, disiplin &amp; tanggung jawab</h2>
</div>
<div class="tp-caption lfr tp-resizeme" data-x=right data-hoffset=100 data-y=bottom data-voffset=-90 data-speed=3000 data-start=3500 data-easing=Power3.easeOut data-splitin=none data-splitout=none data-elementdelay=0.05 data-endelementdelay=0.1 data-endspeed=500 data-endeasing=Power4.easeIn style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap>
<button type=button class="btn btn-default buy-btn" style=background-color:#390 onclick="window.location='<?php echo $row2['link'] ?>'">VISIT</button>
</div>
</li>
<li class=items data-transition=slideleft data-slotamount=1 data-masterspeed=1500 data-thumb=administrator/gambar/Slider1/<?php echo $row3['gambar'] ?> data-delay=8000 data-saveperformance=off>
<img src=administrator/gambar/Slider1/<?php echo $row3['gambar'] ?> alt=kenburns1 data-bgposition="left center" data-kenburns=on data-duration=8000 data-ease=Linear.easeNone data-bgfit=100 data-bgfitend=130 data-bgpositionend="right center">
<div class="tp-caption very_large_text lfb ltt tp-resizeme head-tag" data-x=left data-hoffset=-20 data-y=center data-speed=1200 data-start=1700 data-easing=Power3.easeOut data-splitin=none data-splitout=none data-elementdelay=0.05 data-endelementdelay=0.1 data-endspeed=500 data-endeasing=Power4.easeIn style=z-index:2;max-width:auto;max-height:auto;white-space:nowrap;color:#00f>
<h1><span>KELINDOKU ORGANIZER</span></h1>
</div>
<div class="tp-caption lfl tp-resizeme" data-x=right data-hoffset=-200 data-y=bottom data-voffset=-200 data-speed=1500 data-start=2000 data-easing=Power1.easeOut data-splitin=none data-splitout=none data-elementdelay=0.1 data-endelementdelay=0.1 data-endspeed=300 style=z-index:3;max-width:auto;max-height:auto;white-space:nowrap>
<h2 class=small-title>Konsep acara dibuat unik sesuai segmentasi</h2>
</div>
<div class="tp-caption lfl tp-resizeme" data-x=right data-hoffset=-200 data-y=bottom data-voffset=-150 data-speed=1500 data-start=2500 data-easing=Power1.easeOut data-splitin=none data-splitout=none data-elementdelay=0.1 data-endelementdelay=0.1 data-endspeed=300 style=z-index:3;max-width:auto;max-height:auto;white-space:nowrap>
<h2 class=small-title>Tim dinamis &amp; solid dengan harga kompetitif</h2>
</div>
<div class="lfr tp-caption tp-resizeme start-button" data-x=left data-hoffset=100 data-y=bottom data-voffset=-90 data-speed=2500 data-start=3000 data-easing=Power4.easeInOut data-splitin=none data-splitout=none data-elementdelay=0.1 data-endelementdelay=0.1 data-endspeed=1000 data-endeasing=Power1.easeOut style=z-index:3;max-width:auto;max-height:auto;white-space:nowrap>
<button type=button class="btn btn-primary" style="background-color:#00f;border:0 solid #e95e1d" onclick="window.location='<?php echo $row3['link'] ?>'">VISIT</button>
</div>
</li>
</ul>
</div>
</div>
<header class=header-part>
<div id=home class=wrapper>
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
</a>
</div>
<div id=navbar class="navbar-collapse collapse pull-right hidden-xs">
<ul class="nav navbar-nav navbar-right">
<li><a class=page-scroll href=#home>Home</a></li>
<li> <a class=page-scroll href=#pack>Paket</a></li>
<li> <a class=page-scroll href=#blog>Story</a></li>
<li> <a class=page-scroll href=#about>About</a></li>
<li> <a class=page-scroll href=#testi>Testimonial</a></li>
<li> <a class=page-scroll href=#contact>Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
</header>
<section id=pack class="blog-wrapper section-padding">
<div class=container>
<div class=row>
<div class="wow zoomIn col-xs-12 text-center p-padding">
<h1 class=section-title>TOUR PACKAGE</h1>
<p>CONTOH: Nikmati liburan Anda di berbagai destinasi wisata di Indonesia dengan menggunakan paket-paket yang kami sediakan. Liburan murah dan nyaman yaa di <span>KELINDOKU TOUR &AMP; TRAVEL</span>.</p>
</div>
<div id=search class="wow zoomIn">
<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method=POST>
<fieldset class=clearfix>
<input type=search name=search value="What are you looking for?" onBlur="if(this.value=='')this.value='What are you looking for?'" onFocus="if(this.value=='What are you looking for?')this.value=''">
<input type=submit name=submit value=Search class=button>
</fieldset>
</form>
</div>
<div class="wow zoomIn" align=left>
<p style=margin-bottom:3px>Cari berdasarkan harga</p>
<input type=range min=1.5 max=10.5 step=1 value=1.5 id=min_price name=min_price />
<span id=price_range></span>
</div> <br /><div id=content>
<?php 
   $input_cari = @$_POST['search']; 
   $cari = @$_POST['submit'];
   if($cari) {
    if($input_cari != "") {
    $article1 = mysqli_query($connection, "SELECT * FROM article where judul like '%$input_cari%' ORDER BY article_id DESC limit 3") or die (mysqli_error());   
    } else {
    $article1 = mysqli_query($connection, "SELECT * FROM article ORDER BY article_id DESC limit 3") or die (mysqli_error());
    }
    } else {
    $article1 = mysqli_query($connection, "SELECT * FROM article ORDER BY article_id DESC limit 3") or die (mysqli_error());
    }
    $cek = mysqli_num_rows($article1);
   if($cek < 1) {
    ?>
<p>Maaf, paket yang Anda cari tidak ada...</p>
<?php
   } else {
    while($rawa1 = mysqli_fetch_array($article1)){  
      $id = $rawa1['article_id'];
    $isi = $rawa1['isi'];
    $teks = substr($isi, 0, 100);
    ?>
<div id=product_loading>
<div class="wow zoomIn col-md-4">
<img class=img-responsive src=administrator/gambar/Article/<?php echo $rawa1['gambar1'] ?> />
<div class=blog-date-wrapper>
<span class=floatleft><i class="fa fa-calendar"></i> <?php echo $rawa1['tanggal'] ?></span>
<span class=clearboth> &nbsp; </span>
</div>
<div class=blog-container>
<h2><a href=# target=_blank><?php echo $rawa1['judul'] ?></a></h2>
<p>Rp <?php echo $rawa1['harga']; ?>.000,-<br /><?php echo $teks ?></p>
<a class=custom-button href="readmore.php?id=<?php echo $rawa1['article_id']; ?>">read more <i class="fa fa-angle-right"></i></a>
</div>
</div>
<?php 
        }
    if($cek > 2){ ?>
<div id=more<?php echo $id; ?>>
<span class=more id=<?php echo $id; ?>>Show more</span>
<span id=" loader" class=loader style=display:none><span class=loader_txt>Loading....</span></span>
</div>
<?php }} 
    ?></div></div></div>
</div>
</div>
</section>
<section id=blog class="blog-wrapper section-padding">
<div class=container>
<div class=row>
<div class="wow zoomIn col-xs-12 text-center p-padding">
<h1 class=section-title>OUR STORY</h1>
<p>CONTOH: Bandingkan perjalanan ala backpacker kami dengan paket-paket yang kami sediakan. Temukan perbedannya...</p>
</div> <?php 
    $story1 = mysqli_query($connection, "SELECT * FROM story");
    $no = 1;
    while($raw1 = mysqli_fetch_array($story1)){    
    $isi = $raw1['isi'];
    $teks = substr($isi, 0, 30);
    ?>
<div class="wow zoomIn col-xs-12 col-md-4">
<div class=blog-date-wrapper>
<span class=floatleft><i class="fa fa-calendar"></i> <?php echo $raw1['tanggal'] ?></span>
<span class=clearboth> &nbsp; </span>
</div>
<div class=blog-container>
<h2><a href=# target=_blank><?php echo $raw1['judul'] ?></a></h2>
<p><?php echo $teks ?></p>
<a class=custom-button href="readmore-story.php?id=<?php echo $raw1['story_id']; ?>">read more <i class="fa fa-angle-right"></i></a>
</div>
</div><?php $no++;}?>
</div>
</div>
</section>
<section id=about class="who-we-are section-padding">
<div class=container>
<div class=row>
<div class="wow zoomIn col-xs-12 col-lg-12 text-center p-padding">
<h1 class=section-title>ABOUT US</h1>
<p>KELINDOKU-GROUP merupakan sebuah perusahaan multiservices karena terdiri dari jasa penyedia paket tour &amp; travel dengan nama KELINDOKU TOUR &amp; TRAVEL lalu berekspansi lagi ke bidang jasa rental transportasi dengan nama KELINDOKU TRANSPORT dan terakhir adalah jasa event organizer &amp; advertising yang tidak lain bernama KELINDOKU ORGANIZER.</p>
</div>
<div class="wow zoomIn col-xs-12 col-sm-6 col-md-4 text-center">
<div class=icon-circle><a href=index.php>
<i class="fa fa-suitcase"></i></a>
</div>
<div class="who-we-are-content text-center">
<h2>KELINDOKU TOUR &amp; TRAVEL</h2>
<p>CONTOH: Kami menyediakan destinasi dan konsep wisata yang berbeda di Indonesia. Kami memberikan pelayanan terbaik sehingga liburan Anda memiliki kesan yang tidak terlupakan. Dan harga yang kami berikan sesuai dengan kebutuhan Anda.</p>
</div>
</div>
<div class="wow zoomIn col-xs-12 col-sm-6 col-md-4 text-center">
<div class=icon-circle><a href=transport/>
<i class="fa fa-car"></i></a>
</div>
<div class="who-we-are-content text-center">
<h2>KELINDOKU TRANSPORT</h2>
<p>CONTOH: Kami menyediakan destinasi dan konsep wisata yang berbeda di Indonesia. Kami memberikan pelayanan terbaik sehingga liburan Anda memiliki kesan yang tidak terlupakan. Dan harga yang kami berikan sesuai dengan kebutuhan Anda.</p>
</div>
</div>
<div class="wow zoomIn col-xs-12 col-sm-6 col-md-4 text-center">
<div class=icon-circle><a href=organizer/>
<i class="fa fa-calendar"></i></a>
</div>
<div class="who-we-are-content text-center">
<h2>KELINDOKU ORGANIZER</h2>
<p>CONTOH: Kami menyediakan destinasi dan konsep wisata yang berbeda di Indonesia. Kami memberikan pelayanan terbaik sehingga liburan Anda memiliki kesan yang tidak terlupakan. Dan harga yang kami berikan sesuai dengan kebutuhan Anda.</p>
</div>
</div>
</div>
</div>
</section>
<section id=testi class="wow zoomIn testimmonial section-padding">
<div class=container>
<div class=row>
<h1 class=section-title>Testimonial</h1>
<div class=col-xs-12><br /><br />
<div class=testimonials-box>
<div class=testimonials-slider>
<?php
                                     
                                     $query = mysqli_query($connection, "SELECT * FROM kritik_saran where enabled = '1' ORDER BY isi_id DESC", MYSQLI_USE_RESULT);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)){
                    ?>
<div class=slide>
<div class=testimonials-carousel-thumbnail><img width=120 alt src="img/team1.jpg"/></div>
<div class=testimonials-carousel-context>
<div class=testimonials-name><?php echo $data['nama'] ?><span><?php echo $data['tanggal'] ?></span></div>
<div class=testimonials-carousel-content><p><?php echo $data['isi']?></p></div>
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
</section>
<section id=contact class="contact-wrapper section-padding">
<div class=container>
<div class=row>
<div class="wow zoomIn col-xs-12 text-center p-padding">
<h1 class=section-title>contact us</h1>
<p>CONTOH: Berikan komentar, kritik, saran ataupun pernyataan yang ada di benak Anda tentang kami.</p>
</div>
<div class="wow zoomIn col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
<form name=kontak action=aksi_kritik_saran.php method=post enctype=multipart/form-data>
<input type=hidden name=enabled value=0 />
<div class=form-inline>
<div class="form-group col-sm-6">
<input type=text class=form-control name=fullname id=fullname placeholder=name>
</div>
<div class="form-group col-sm-6">
<input type=text class=form-control name=email id=email placeholder="email address">
</div>
<div class="form-group col-sm-12">
<textarea class=form-control name=message rows=3 id=message placeholder=message></textarea>
</div>
</div>
<div class="form-group col-sm-12">
<input type=submit id=submit name=submit class="btn btn-lg costom-btn" value=send>
</div>
</form>
</div>
<div class=col-xs-12>
<div class=contact-or>
<p>or</p>
</div>
<div class=icon-text>
<span>find us on</span>
</div>
<div class=icon-holder>
<ul>
<li><a href=https://web.facebook.com/Kelindoku-Organizer-290136524659144/?skip_nax_wizard=true target=_blank><i class="fa fa-facebook"></i></a></li>
<li><a href=# target=_blank><i class="fa fa-google-plus"></i></a></li>
<li><a href=# target=_blank><i class="fa fa-twitter"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<footer>
<div class="footer-wrapper section-padding">
<div class=container>
<div class=row>
<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
<a href=index.php><img src=img/logo2.png alt=Kelindoku></a>
</div>
<div class="wow zoomIn col-xs-12 col-sm-3 col-md-3">
<p class=footer-heading>link</p>
<ul class=footermenu>
<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href=#pack>Paket Tour</a></li>
<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href=#about>About Us</a></li>
<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href=#testi>Testimonial</a></li>
<li><a data-scroll data-options='{ "easing": "easeInQuad" }' href=#contact>Contact</a></li>
</ul>
</div>
<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
<p class=footer-heading>find us</p>
<ul class=footercontact>
<li><i class=flaticon-mainpage></i><span>address:</span><br/>
Jl. Gading Raya No 73, Pisangan Timur &#45; Rawamangun<br/>Jakarta 13410<br/>Indonesia</li>
<li><i class=flaticon-phone16></i><span>phone:</span><a href=tel:+6285646449981>+62856 4644 9981</a></li>
<li><i class=flaticon-email21></i><span>e-mail:</span><a href=mailto:info@kelindoku-group.com>info@kelindoku-group.com</a></li>
</ul>
<i class=flaticon-home78></i>
</div>
<div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
<p class=footer-heading>subscribe</p>
<p class=p1>Daftar dan dapatkan tips dan update terbaru tentang paket wisata di Indonesia setiap hari nya</p>
<form action=aksi_subscribe.php method=post enctype=multipart/form-data>
<div class=form-group>
<input type=email class=form-control name=email placeholder="Masukan Email">
</div>
<div><button type=submit class="btn btn-primary">Kirim</button></div>
</form>
</div>
</div>
</div>
</div>
<div class=footer-bottom>
<div class=container>
<div class=row>
<div class="wow zoomIn col-xs-12">
<p>&copy; 2016 All rights reserved. <span>Suyanwar</span></p>
<div class="backtop pull-right">
<i class="fa fa-angle-up back-to-top"></i>
</div>
</div>
</div>
</div>
</div>
</footer>
<nav id=menu>
<ul>
<li><a class=page-scroll href=#home>Home</a></li>
<li> <a class=page-scroll href=#pack>Paket</a></li>
<li> <a class=page-scroll href=#blog>Story</a></li>
<li> <a class=page-scroll href=#about>About</a></li>
<li> <a class=page-scroll href=#testi>Testimonial</a></li>
<li> <a class=page-scroll href=#contact>Contact</a></li>
</ul>
</nav>
<script src=js/jquery-1.11.1.js></script>
<script>$(document).ready(function(){$("#min_price").change(function(){var b=$(this).val();$("#price_range").text("Product under Price Rp "+b+"00.000,-");$.ajax({url:"load_product.php",method:"POST",data:{price:b},success:function(a){$("#product_loading").fadeIn(500).html(a)}})})});</script>
<script src=js/jquery-bxslider-min.js></script>
<script>$(".testimonials-slider").bxSlider({slideWidth:800,minSlides:1,maxSlides:1,slideMargin:100,auto:true,autoControls:true});</script>
<script type=text/javascript>$(document).ready(function(){$("#content").on("click",".more",function(){var a=$(this).attr("id");if(a){$("#loader").show();$.ajax({type:"POST",url:"load_ajax.php",data:{id:a},cache:false,success:function(b){$("#loader").hide();$("#more"+a).before(b);$("#more"+a).remove()}})}})});</script>
<script src=js/modernizr-2.6.2.min.js></script>
<script src=vendor/bootstrap/js/bootstrap.min.js></script>
<script type=text/javascript src=vendor/rs-plugin/js/jquery.themepunch.plugins.min.js></script>
<script type=text/javascript src=vendor/rs-plugin/js/jquery.themepunch.revolution.js></script>
<script src=js/jquery.shuffle.min.js></script>
<script type=text/javascript src=vendor/mmenu/js/jquery.mmenu.min.js></script>
<script src=vendor/owl/js/owl.carousel.min.js></script>
<script src=js/wow.min.js></script>
<script src=http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js></script>
<script src=js/jquery.counterup.min.js></script>
<script src=js/jquery.easing.min.js></script>
<script src=js/scrolling-nav.js></script>
<script src=js/smoothscroll.min.js></script>
<script src=js/script.js></script>
<script>$(window).on("scroll",function(){if($(window).scrollTop()>670){$(".navbar-default").addClass("navbar-fixed-top")}else{$(".navbar-default").removeClass("navbar-fixed-top")}});</script>
</body>
</html>