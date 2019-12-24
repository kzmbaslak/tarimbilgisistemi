<?php
	include "../baglan.php";
	session_start();
	$hata = "";
	if($_POST){
		if($_POST['mail'] != "" and $_POST['pass'] != ""){
			$sorgu = mysql_query("select * from kullanici where mail ='".$_POST['mail']."' and sifre = '".$_POST['pass']."' ");
			$sonuc = mysql_fetch_array($sorgu);
			if($sonuc['mail'] != ""){
				if($sonuc['yetkiId'] != 3){
					$_SESSION['kullaniciId'] = $sonuc['kullaniciId'];
					$_SESSION['adi'] = $sonuc['adi'];
					$_SESSION['soyadi'] = $sonuc['soyadi'];
					$_SESSION['mail'] = $sonuc['mail'];
					$_SESSION['sehirId'] = $sonuc['sehirId'];
					$_SESSION['dogumTarihi'] = $sonuc['dogumTarihi'];
					$_SESSION['sifre'] = $sonuc['sifre'];
					$_SESSION['yetkiId'] = $sonuc['yetkiId'];
					header('Location:index.php');
				}
				else
					$hata = "bu kullanıcı engelli";
			}
			else
				$hata = "kullanıcı adı veya şifre yanlış";
		}
		else
			$hata = "Lütfen mail ve şifre alanını boş bırakmayınız";
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>SimpleAdmin</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="login.php" method="post">
					<label for="mail">Mail Adresi:</label>
					<input id="mail" name="mail" class="text" pattern="[@-zA-Z0-9+-.]+"/>
					<label for="pass">Şifre:</label>
					<input id="pass" name="pass" type="password" class="text" pattern="[a-zA-Z0-9]+"/>
					<div class="sep"></div>
					<button type="submit" class="ok">Giriş</button><a class="button" href="kaydol.php">Kaydol</a> 
                    <?php 
						if($hata != ""){
                        	echo "<label class='n_error'>".$hata."</label>";
						}
					?>
				</form>
			</div>
			<div class="footer"></div>
		</div>
	</div>
</div>

</body>
</html>
