<!DOCTYPE html>
<?php
        include '../administrator/aksi_admin/konek.php';
?>
<html lang=en>
<head>
<meta charset=utf-8>
<title>KELINDOKU ORGANIZER</title>
<meta http-equiv=X-UA-Compatible content="IE=Edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name=keywords content>
<meta name=description content>
<link rel=stylesheet href=css/bootstrap.min.css>
<link rel=stylesheet href=css/animate.min.css>
<link rel=stylesheet href=css/font-awesome.min.css>
<link rel=stylesheet href=css/nivo-lightbox.css>
<link rel=stylesheet href=css/nivo_themes/default/default.css>
<link rel=stylesheet href=css/style.css>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel=stylesheet type=text/css>
<link href=http://www.jqueryscript.net/css/jquerysctipttop.css rel=stylesheet type=text/css>
<link rel=stylesheet href=themes/default/default.css type=text/css media=screen />
<link rel=stylesheet href=themes/light/light.css type=text/css media=screen />
<link rel=stylesheet href=themes/dark/dark.css type=text/css media=screen />
<link rel=stylesheet href=themes/bar/bar.css type=text/css media=screen />
<link rel=stylesheet href=nivo-slider.css type=text/css media=screen />
<link rel=stylesheet href=demo/style.css type=text/css media=screen />
<link rel=stylesheet href=css/video-slider.css>
<script type=text/javascript src=js/jssor.slider.min.js></script>
<script>jssor_1_slider_init=function(){var c={$AutoPlay:false,$ArrowNavigatorOptions:{$Class:$JssorArrowNavigator$},$ThumbnailNavigatorOptions:{$Class:$JssorThumbnailNavigator$,$Cols:4,$SpacingX:4,$SpacingY:4,$Orientation:2,$Align:0}};var b=new $JssorSlider$("jssor_1",c);function a(){var d=b.$Elmt.parentNode.clientWidth;if(d){d=Math.min(d,810);b.$ScaleWidth(d)}else{window.setTimeout(a,30)}}a();$Jssor$.$AddEvent(window,"load",a);$Jssor$.$AddEvent(window,"resize",a);$Jssor$.$AddEvent(window,"orientationchange",a)};</script>
</head>
<body data-spy=scroll data-target=.navbar-collapse data-offset=50>
<section class="navbar navbar-fixed-top custom-navbar" role=navigation>
<div class=container>
<div class=navbar-header>
<button class=navbar-toggle data-toggle=collapse data-target=.navbar-collapse>
<span class="icon icon-bar"></span>
<span class="icon icon-bar"></span>
<span class="icon icon-bar"></span>
</button>
<a href=#><img class=bold src=images/organizer.png alt=image></img></a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href=#homee class=smoothScroll>HOME</a></li>
<li><a href=#about class=smoothScroll>ABOUT</a></li>
<li><a href=#portfolio class=smoothScroll>PORTFOLIO</a></li>
<li><a href=#contact class=smoothScroll>CONTACT</a></li>
</ul>
</div>
</div>
</section>
<section id=homee>
<div class=jquery-script-clear></div>
<div id=wrapper>
<div class="slider-wrapper theme-default">
<div id=slider class=nivoSlider>
<?php
                    $satu = mysqli_query($connection, "SELECT * FROM slider_keli where id = '1'");
                    $row = mysqli_fetch_array($satu);
                    $dua = mysqli_query($connection, "SELECT * FROM slider_keli where id = '2'");
                    $row2 = mysqli_fetch_array($dua);
                    $tiga = mysqli_query($connection, "SELECT * FROM slider_keli where id = '3'");
                    $row3 = mysqli_fetch_array($tiga);
                    $empat = mysqli_query($connection, "SELECT * FROM slider_keli where id = '4'");
                    $row4 = mysqli_fetch_array($empat);
                ?>
<img src=../administrator/gambar/Slider2/<?php echo $row['gambar'] ?> data-thumb=../administrator/gambar/Slider2/<?php echo $row['gambar'] ?> data-transition="slideInLeft"/>
<img src=../administrator/gambar/Slider2/<?php echo $row2['gambar'] ?> data-thumb=../administrator/gambar/Slider2/<?php echo $row2['gambar'] ?> data-transition="slideInLeft"/>
<img src=../administrator/gambar/Slider2/<?php echo $row3['gambar'] ?> data-thumb=../administrator/gambar/Slider2/<?php echo $row3['gambar'] ?> data-transition="slideInLeft"/>
<img src=../administrator/gambar/Slider2/<?php echo $row4['gambar'] ?> data-thumb=../administrator/gambar/Slider2/<?php echo $row4['gambar'] ?> data-transition="slideInLeft"/>
</div>
</div>
</div>
</section>
<section id=about>
<div class=container>
<div class=row>
<div class="col-md-12 col-sm-12 text-center">
<h1 class="heading bold">ABOUT US</h1>
<h2 class=subheading><p>Kelindoku Organizer merupakan anak perusahaan dari PT Keliling Indonesiaku Sejahtera yang memberikan pelayanan jasa exhibition dan event organizer di Indonesia. Sebagai salah satu perusahaan yang bergerak dibidang event dan pameran yang berpengalaman. Kami siap membantu anda dalam menyusun perencanaan sebuah event hingga membuat sebuah pameran untuk kebutuhan anda.
Kami dapat memberikan solusi terbaik dalam menentukan design konsep, budgeting hingga pelaksanaan. Kami memiliki sumber daya yang professional dan berpengalaman dibidang event.
Dalam rangka memenuhi kebutuhan para anda,
<br></br>
<br>Keunggulan : </br>
• Memiliki Sumber Daya Manusia yang berpengalaman, kreatif dan innovative
<br>• Konsep Acara yang unik dan dapat disesuaikan dengan segmentasi</br>
• Mampu memberikan solusi terbaik sesuai kebutuhan dan keinginan anda
</p></h2>
</div>
<h1 style=text-align:center>Service</h1>
<?php
                                     $sql = mysqli_query($connection, "SELECT * FROM service ORDER BY id DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($sql)){
                      $isi = $data['detail'];
                      $pot = substr($isi, 0, 30);
                    ?>
<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay=0.6s>
<img src=../administrator/gambar/Event/<?php echo $data['gambar1']; ?>>
<h3><?php echo $data['nama']; ?></h3>
<p><?php echo $pot; ?></p>
<div class=col-md-4>
<a class="smoothScroll btn btn-default" data-toggle=modal href=#modal<?php echo $data['id'] ?>>Read More</a>
</div>
</div><?php $no++; } ?>
</div>
</div>
<div id=jssor_1 style="position:relative;margin:0 auto;top:0;left:0;width:810px;height:300px;overflow:hidden;visibility:hidden;background-color:#000">
<div data-u=loading style=position:absolute;top:0;left:0>
<div style="filter:alpha(opacity=70);opacity:.7;position:absolute;display:block;top:0;left:0;width:100%;height:100%"></div>
<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0;left:0;width:100%;height:100%"></div>
</div>
<div data-u=slides style=cursor:default;position:relative;top:0;left:0;width:600px;height:300px;overflow:hidden>
<?php
                                     $query1 = mysqli_query($connection, "SELECT * FROM ads ORDER BY id DESC");
                    $no = 1;
                    while ($data1 = mysqli_fetch_array($query1)){
                      $link = $data1['link'];
                      preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $link, $matches);
                      $id = $matches[1];
                      $width= '600';
                      $height = '300';
                    ?>
<div data-p=112.50 style=display:none>
<iframe src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3" width=<?php echo $width ?> height=<?php echo $height ?> allowfullscreen></iframe>
<div data-u=thumb>
<img class=i src=../administrator/gambar/Thumbnail/<?php echo $data1['thumbnail'] ?>>
</div>
</div><?php $no++; } ?>
</div>
<div data-u=thumbnavigator class=jssort11 style=position:absolute;right:5px;top:0;font-family:Arial,Helvetica,sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px data-autocenter=2>
<div data-u=slides style=cursor:default>
<div data-u=prototype class=p>
<div data-u=thumbnailtemplate class=tp></div>
</div>
</div>
</div>
<span data-u=arrowleft class=jssora02l style=top:0px;left:8px;width:55px;height:55px data-autocenter=2></span>
<span data-u=arrowright class=jssora02r style=top:0px;right:218px;width:55px;height:55px data-autocenter=2></span>
</div>
<script>jssor_1_slider_init();</script>
</section>
<div id=portfolio>
<div class=container>
<div class=row>
<div class="col-md-12 col-sm-12">
<h1 class="heading bold">PORTFOLIO</h1>
<div class=iso-section>
<div class="iso-box-section wow fadeIn" data-wow-delay=0.9s>
<div class="iso-box-wrapper col4-iso-box"><?php
                                     $query2 = mysqli_query($connection, "SELECT * FROM port1 ORDER BY id DESC");
                    $no = 1;
                    while ($data2 = mysqli_fetch_array($query2)){
                    ?>
<div class="iso-box col-lg-4 col-md-4 col-sm-6 col-xs-6">
<a data-lightbox-gallery=portfolio-gallery href=../administrator/gambar/Portfolio/<?php echo $data2['gambar']; ?>><img alt="portfolio img" src=../administrator/gambar/Portfolio/<?php echo $data2['gambar']; ?>></a>
</div><?php $no++;} ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br></br>
<h3 style=text-align:center>Client</h3>
<div id=jssor_2 style="position:relative;margin:0 auto;top:0;left:0;width:600px;height:300px;overflow:hidden;visibility:hidden">
<div data-u=loading style=position:absolute;top:0;left:0>
<div style="filter:alpha(opacity=70);opacity:.7;position:absolute;display:block;top:0;left:0;width:100%;height:100%"></div>
<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0;left:0;width:100%;height:100%"></div>
</div>
<div data-u=slides style=cursor:default;position:relative;top:0;left:0;width:600px;height:230px;overflow:hidden><?php
                                     $query0 = mysqli_query($connection, "SELECT * FROM client ORDER BY id DESC");
                    $no = 1;
                    while ($data2 = mysqli_fetch_array($query0)){
                    ?>
<div data-p=112.50 style=display:none>
<img data-u=image src=../administrator/gambar/Client/<?php echo $data2['gambar']; ?> />
<img data-u=thumb src=../administrator/gambar/Client/<?php echo $data2['gambar']; ?> />
</div><?php $no++;} ?>
</div>
<div u=thumbnavigator class=jssort03 style=position:absolute;left:0px;bottom:0px;width:600px;height:60px data-autocenter=1>
<div style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:#000;filter:alpha(opacity=30.0);opacity:.3"></div>
<div u=slides style=cursor:default>
<div u=prototype class=p>
<div class=w>
<div u=thumbnailtemplate class=t></div>
</div>
<div class=c></div>
</div>
</div>
</div>
</div>
<script>jssor_2_slider_init=function(){var c={$AutoPlay:false,$ArrowNavigatorOptions:{$Class:$JssorArrowNavigator$},$ThumbnailNavigatorOptions:{$Class:$JssorThumbnailNavigator$,$Cols:9,$SpacingX:3,$SpacingY:3,$Align:260}};var b=new $JssorSlider$("jssor_2",c);function a(){var d=b.$Elmt.parentNode.clientWidth;if(d){d=Math.min(d,600);b.$ScaleWidth(d)}else{window.setTimeout(a,30)}}a();$Jssor$.$AddEvent(window,"load",a);$Jssor$.$AddEvent(window,"resize",a);$Jssor$.$AddEvent(window,"orientationchange",a)};</script>
<script>jssor_2_slider_init();</script>
<section id=contact>
<div class=container>
<div class=row>
<div class="col-md-12 col-sm-12 text-center">
<h1 class="heading bold">CONTACT US</h1>
<h2 class=subheading>WE LOVE PRETTY MUCH TO HEAR FROM YOU</h2>
</div>
</div>
<div class=row>
<div class="contact-info-box col-md-4 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=0.6s>
<i class="fa fa-phone"></i>
<h3>0856 4644 9981</h3>
</div>
<div class="contact-info-box col-md-4 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=0.8s>
<i class="fa fa-envelope-o"></i>
<h3>info@kelindoku-group.com</h3>
</div>
<div class="contact-info-box col-md-4 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay=1s>
<i class="fa fa-map-marker"></i>
<h3>indonesia</h3>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12">
<form action=send_mail.php method=post>
<div class="col-md-6 col-sm-6">
<input name=name type=text class=form-control id=name placeholder=Name>
<input name=email type=email class=form-control id=email placeholder=Email>
<input name=subject type=text class=form-control id=subject placeholder=Subject>
</div>
<div class="col-md-6 col-sm-6">
<textarea name=message rows=7 class=form-control id=message placeholder=Message></textarea>
</div>
<div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-6">
<input name=submit type=submit class=form-control id=submit value="SEND EMAIL">
</div>
</form>
</div>
</div>
</div>
</section>
<?php
                                     
                                     $query3 = mysqli_query($connection, "SELECT * FROM service", MYSQLI_USE_RESULT);
                    $no = 1;
                    while ($data3 = mysqli_fetch_array($query3, MYSQLI_BOTH)){
                    ?>
<div class="modal fade" tabindex=-1 role=dialog aria-labelledby=myModalLabel aria-hidden=true style=display:none id=modal<?php echo $data3['id'] ?>>
<div class=modal-dialog>
<div class=modal-content>
<div class="modal-header modal-header-success">
<button type=button class=close data-dismiss=modal><span aria-hidden=true>&times;</span><span class=sr-only>Close</span></button>
<h4 class="modal-title text-center" id=myModalLabel>Detail Service</h4>
</div>
<div class=modal-body>
<div class=services-container-inner>
<h3 class=about-title-2><?php echo $data3['nama'] ?></h3>
</div>
<div id=carousel-example-generic class="carousel slide" data-ride=carousel>
<ol class=carousel-indicators>
<li data-target=#carousel-example-generic data-slide-to=0 class=active></li>
<li data-target=#carousel-example-generic data-slide-to=1></li>
<li data-target=#carousel-example-generic data-slide-to=2></li>
</ol>
<div class="carousel-inner modal-container" role=listbox>
<div class="item active">
<img class=col-xs-13 src=../administrator/gambar/Event/<?php echo $data3['gambar1'] ?> />
</div>
<div class=item>
<img class=col-xs-13 src=../administrator/gambar/Event/<?php echo $data3['gambar2'] ?> />
</div>
<div class=item>
<img class=col-xs-13 src=../administrator/gambar/Event/<?php echo $data3['gambar3'] ?> />
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
<p class=about-description><?php echo $data3['detail'] ?></p>
</div>
<div class=modal-footer>
<button type=button class="btn btn-default" data-dismiss=modal>Close</button>
</div>
</div>
</div>
</div><?php $no++; } ?>
<footer>
<div class=container>
<div class=row>
<div class="col-md-12 col-sm-12">
<div class="col-lg-5 col-md-5 tm-footer-div">
<h3 style="text-align:left"class=tm-footer-div-title>Contact Person</h3>
<p class=margin-top-15>Jl. Gading Raya No 73, Pisangan Timur </p>
<p class=margin-top-5>Rawamangun, Jakarta 13410</p>
<p class=margin-top-5>Indonesia</p>
</div>
<div class="col-lg-2 col-md-2 tm-footer-div">
<h3 class=tm-footer-div-title></h3>
</div>
<div class="col-lg-3 col-md-3 tm-footer-div">
<h3 class=tm-footer-div-title>Get Social</h3>
<p>Temukan kami dalam media sosial.</p>
<ul class=social-icon>
<li><a href="https://web.facebook.com/Kelindoku-Organizer-290136524659144/?skip_nax_wizard=true" class="fa fa-facebook wow bounceIn" data-wow-delay=0.3s target=_parent></a></li>
<li><a href=# class="fa fa-twitter wow bounceIn" data-wow-delay=0.6s></a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
<section id=copyright>
<div class=container>
<div class=row>
<div class="col-md-4 col-sm-4 col-xs-3">
<a href=#homee class="smoothScroll fa fa-angle-up"></a>
</div>
</div>
</div>
</section>
<script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js></script>
<script type=text/javascript src=jquery.nivo.slider.js></script>
<script type=text/javascript>$(window).load(function(){$("#slider").nivoSlider()});</script>
<script src=js/bootstrap.min.js></script>
<script src=js/smoothscroll.js></script>
<script src=js/isotope.js></script>
<script src=js/imagesloaded.min.js></script>
<script src=js/nivo-lightbox.min.js></script>
<script src=js/wow.min.js></script>
<script src=js/custom.js></script>
</body>
</html>