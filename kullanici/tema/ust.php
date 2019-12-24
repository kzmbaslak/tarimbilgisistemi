<?php
	include "../baglan.php";
	include "fonksiyonlar.php";
	session_start();
	(isset($_SESSION['kullaniciId'])?:header("Location:login.php"));
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Tarım Bilgi Sistemi</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
            	<?php
					$yetki = mysql_fetch_array(mysql_query("select * from yetki where yetkiId = ".$_SESSION['yetkiId']));
					
				?>
				<p>Hoş geldin <?= $_SESSION['adi']?>, <strong>Yetkiniz: <?= $yetki['adi'] ?></strong> [ <a href="cikis.php">çıkış</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">tarih: <strong><?= date("d/m/y")?>	</strong>				</div>
			</div>
		</div>
		
	</div>
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Bitki </div>
				<ul id="home">
					<li class="b1"><a class="icon view_page" href="bitkiler.php">Bitkiler</a></li>
					<li class="b2"><a class="icon report" href="ekilenler.php">Ekilenler</a></li>
					<li class="b1"><a class="icon add_page" href="bicilenler.php">Biçilenler</a></li>
					<li class="b2"><a class="icon config" href="">Site config</a></li>
				</ul>
			</div>
			
			<div class="box">
				<div class="h_title">&#8250; Manage content</div>
				<ul>
					<li class="b1"><a class="icon page" href="">Show all pages</a></li>
					<li class="b2"><a class="icon add_page" href="">Add new page</a></li>
					<li class="b1"><a class="icon photo" href="">Add new gallery</a></li>
					<li class="b2"><a class="icon category" href="">Categories</a></li>
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Users</div>
				<ul>
					<li class="b1"><a class="icon users" href="">Show all users</a></li>
					<li class="b2"><a class="icon add_user" href="">Add new user</a></li>
					<li class="b1"><a class="icon block_users" href="">Lock users</a></li>
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Ayarlar</div>
				<ul>
					<li class="b1"><a class="icon config" href="bilgiguncelle.php">Bilgileri Güncelle</a></li>
					<li class="b2"><a class="icon contact" href="">Contact Form</a></li>
				</ul>
			</div>
		</div>