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
<link rel=stylesheet href=css/nivo-slider.css>
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
        $query = mysqli_query($connection, "select * from article where article_id='$id'") or die(mysqli_error());
        $data = mysqli_fetch_array($query);
        $url = $data['link'];
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
    $id = $matches[1];
    $width= '400';
    $height = '225';
        ?>
<h1 class=text-center><?php echo $data['judul'] ?></h1>
<h4 class=text-center>Rp <?php echo $data['harga'] ?>.000,-</h4>
</div>
<div class=glView>
<div class=about_content>
<div class=row>
<div class=about_slider>
<div id=slider class=nivoSlider>
<img src=administrator/gambar/Article/<?php echo $data['gambar1'] ?> alt="slide 1" />
<img src=administrator/gambar/Article/<?php echo $data['gambar2'] ?> alt="slide 2" />
<img src=administrator/gambar/Article/<?php echo $data['gambar3'] ?> alt="slide 3" />
</div>
</div><br/>
<div class="col-lg-6 col-md-6 col-sm-12">
<div class=about_featured>
<div class=panel-group id=accordion>
<div class="panel panel-default wow fadeInLeft">
<div class=panel-heading>
<h4 class=panel-title>
<a data-toggle=collapse data-parent=#accordion href=#collapseOne>
<span class="fa fa-check-square-o"></span>Deskripsi
</a>
</h4>
</div>
<div id=collapseOne class="panel-collapse collapse">
<div class=panel-body>
<?php echo $data['isi'] ?>
</div>
</div>
</div>
<div class="panel panel-default wow fadeInLeft">
<div class=panel-heading>
<h4 class=panel-title>
<a data-toggle=collapse data-parent=#accordion href=#collapseTwo>
<span class="fa fa-check-square-o"></span>Itinerary
</a>
</h4>
</div>
<div id=collapseTwo class="panel-collapse collapse">
<div class=panel-body>
<?php echo $data['rundown'] ?>
</div>
</div>
</div>
<div class="panel panel-default wow fadeInLeft">
<div class=panel-heading>
<h4 class=panel-title>
<a data-toggle=collapse data-parent=#accordion href=#collapseThree>
<span class="fa fa-check-square-o"></span>Termasuk
</a>
</h4>
</div>
<div id=collapseThree class="panel-collapse collapse">
<div class=panel-body>
<?php echo $data['fasilitas'] ?>
</div>
</div>
</div>
<div class="panel panel-default wow fadeInLeft">
<div class=panel-heading>
<h4 class=panel-title>
<a data-toggle=collapse data-parent=#accordion href=#collapseFour>
<span class="fa fa-check-square-o"></span>Tidak Termasuk
</a>
</h4>
</div>
<div id=collapseFour class="panel-collapse collapse">
<div class=panel-body>
<?php echo $data['extras'] ?>
</div>
</div>
</div>
<div class="panel panel-default wow fadeInLeft">
<div class=panel-heading>
<h4 class=panel-title>
<a data-toggle=collapse data-parent=#accordion href=#collapseFive>
<span class="fa fa-check-square-o"></span>Perlengkapan
</a>
</h4>
</div>
<div id=collapseFive class="panel-collapse collapse">
<div class=panel-body>
<?php echo $data['perkap'] ?>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<iframe class=embed-responsive-item src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3" width=<?php echo $width ?> height=<?php echo $height ?> allowfullscreen></iframe>
</div>
</div>
</div><button type=button class="btn btn-primary" data-toggle=modal data-target=#exampleModal>Pesan</button>
<div class="modal fade" id=exampleModal tabindex=-1 role=dialog aria-labelledby=exampleModalLabel>
<div class=modal-dialog role=document>
<div class=modal-content>
<div class=modal-header>
<button type=button class=close data-dismiss=modal aria-label=Close><span aria-hidden=true>&times;</span></button>
<h4 class=modal-title id=exampleModalLabel>Form Pemesanan Paket</h4>
</div>
<div class=modal-body>
<form action=pesan_paket.php method=post>
<input type=hidden name=id value=<?php echo $data['article_id']; ?> />
<div class=form-group>
<label class=control-label>Nama Lengkap</label>
<input type=text class=form-control name=nama id=nama required/>
</div>
<div class=form-group>
<label class=control-label>Alamat Email</label>
<input type=email class=form-control name=email id=email required/>
</div>
<div class=form-group>
<label class=control-label>No HP</label>
<input type=text class=form-control name=nomor id=nomor required/>
</div>
<div class=form-group>
<label class=control-label>Jumlah orang</label>
<input type=button value=- class=qtyminus field=quantity />
<input type=text name=quantity value=0 class=qty required/>
<input type=button value=+ class=qtyplus field=quantity />
</div>
<div class=form-group>
<label class=control-label>Tanggal Berangkat</label>
<input type=date name=tanggal min=2016-05-01 class=form-control required/>
</div>
<div class=form-group>
<label class=control-label>Keterangan</label>
<textarea class=form-control name=keterangan rows=1 required/></textarea>
</div>
<div class=form-group>
<label for=control-label class=control-label>Captcha</label><br />
<img src=gambar.php alt=gambar />
</div>
<div class=form-group>
<label for=control-label>Masukan captcha</label>
<input name=nilaiCaptcha class=form-control value maxlength=6 required/>
</div>
</div>
<div class=modal-footer>
<button type=button class="btn btn-default" data-dismiss=modal>Close</button>
<button type=submit name=submit class="btn btn-primary">Kirim</button></div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<br /><br />
<?php
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div id=share-buttons>
<a href="mailto:?Subject=Paket Tour Kelindoku : <?php echo $data['judul'] ?>">
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
<script>var disqus_config=function(){this.page.url=readmore.php;this.page.identifier=<?php echo $data['article_id'] ?>};(function(){var b=document,a=b.createElement("script");a.src="//suyanwar.disqus.com/embed.js";a.setAttribute("data-timestamp",+new Date());(b.head||b.body).appendChild(a)})();</script>
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
<script type=text/javascript>(function(window,document,undefined){var iframes=document.getElementsByTagName('iframe');for(var i=0;i<iframes.length;i++){var iframe=iframes[i],players=/www.youtube.com|player.vimeo.com/;if(iframe.src.search(players)>0){var videoRatio=(iframe.height/iframe.width)*100;iframe.style.position='absolute';iframe.style.top='0';iframe.style.left='0';iframe.width='100%';iframe.height='100%';var wrap=document.createElement('div');wrap.className='fluid-vids';wrap.style.width='100%';wrap.style.position='relative';wrap.style.paddingTop=videoRatio+'%';var iframeParent=iframe.parentNode;iframeParent.insertBefore(wrap,iframe);wrap.appendChild(iframe);}}})(window,document);</script>
</body>
<script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
    webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
</script>
<script>$(window).on('scroll',function(){if($(window).scrollTop()>10){$('.navbar-default').addClass('navbar-fixed-top');}else{$('.navbar-default').removeClass('navbar-fixed-top');}});</script>
<script src=administrator/js/jquery.nicescroll.js type=text/javascript></script>
<script src=js/bootstrap.min.js></script>
<script src=js/classie.js></script>
<script src=js/slick.min.js></script>
<script src=js/wow.min.js></script>
<script src=administrator/js/common-scripts.js></script>
<script type=text/javascript>jQuery(function($){$(document).ready(function(){$('.mWrapper').stickUp();});});</script>
<script src=js/jquery.nivo.slider.pack.js></script>
<script>$.fn.cycle.defaults.autoSelector='.slideshow';</script>
<script src=js/jquery.cookie.js></script>
<script type=text/javascript>$(window).load(function(){$('#slider').nivoSlider({prevText:'',nextText:'',controlNav:false,});});</script>
<script>$('#exampleModal').on('show.bs.modal',function(event){var button=$(event.relatedTarget)}</script>
<script type=text/javascript>jQuery(document).ready(function(){$('.qtyplus').click(function(e){e.preventDefault();fieldName=$(this).attr('field');var currentVal=parseInt($('input[name='+fieldName+']').val());if(!isNaN(currentVal)){$('input[name='+fieldName+']').val(currentVal+1);}else{$('input[name='+fieldName+']').val(0);}});$(".qtyminus").click(function(e){e.preventDefault();fieldName=$(this).attr('field');var currentVal=parseInt($('input[name='+fieldName+']').val());if(!isNaN(currentVal)&&currentVal>0){$('input[name='+fieldName+']').val(currentVal-1);}else{$('input[name='+fieldName+']').val(0);}});});</script>
<script src=js/modernizr-2.6.2.min.js></script>
</html>