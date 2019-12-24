<?php
	include "../baglan.php";
	$hata = "";
	if($_POST){
		$sonKullanici = mysql_fetch_array(mysql_query("select kullaniciId from kullanici order by kullaniciId desc LIMIT 1"));
		if(trim($_POST['mail']) == ""){
			$hata = "mail adresi kısmını boş bırakmayınız";
			 	
		}
		else if(trim($_POST['pass'])==trim($_POST['pass2']) and trim($_POST['pass']) != ""){
			$sorgu = mysql_query("select * from kullanici where mail='".$_POST['mail']."'");
			$s = mysql_fetch_array($sorgu);
			if($s['mail'] != $_POST['mail']){
				
			$sonuc = mysql_query("insert into kullanici values(".($sonKullanici['kullaniciId']+1).",'".$_POST['adi']."','".$_POST['soyadi']."','".$_POST['mail']."',".$_POST['sehir'].",".$_POST['dogumtarihi'].",'".$_POST['pass']."',2)");
			(($sonuc)?$hata = "kayıt işlemi basarili":$hata = "kayıt işlemi basarisiz");
			
			}
			else{
				$hata = "Bu kullanıcı adı kullanılıyor. Lütfen başk kullanıcı adı giriniz";	
			}
		}
		else{
				$hata = "şifreler aynı olmalı ve boş bırakılmamalı";
		}
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
				<form name ="form1" action="kaydol.php" method="post">
					<label for="mail">Mail Adresi:</label>
					<input id="mail" name="mail" class="text" pattern="[@-zA-Z0-9+-.]+" title="boşluk kullanmayınız." />
					<label for="adi">Adı:</label>
					<input id="adi" name="adi" class="text" pattern="[a-zA-ZçÇşŞİĞğöÖ]+" title="sadece harf kullanın" />
					<label for="soyadi">Soyadı:</label>
					<input id="soyadi" name="soyadi" class="text" pattern="[a-zA-ZçÇşŞİĞğöÖ]+" title="sadece harf kullanın" />
					<label for="dogumtarihi" >Doğum Tarihi(Yıl):</label>
					<input id="dogumtarihi" name="dogumtarihi" class="text" pattern="[0-9]+" title="sadece rakam kullanın" />
                    <select name="sehir">
                    <?php
						$sorgu = mysql_query("select * from sehir");
						while($sonuc = mysql_fetch_array($sorgu)){
							echo "<option value=".$sonuc['sehirId'].">".$sonuc['adi']."</option>";
						}
					?>
                    	
                    </select><br/><br/>
					<label for="pass">Şifre:</label>
					<input id="pass" name="pass" type="password" class="text" pattern="[a-zA-Z0-9]+" title="sadece rakam ve harf kullanın" />
					<label for="pass2">Şifre Tekrar:</label>
					<input id="pass2" name="pass2" type="password" class="text" pattern="[a-zA-Z0-9]+" title="sadece rakam ve harf kullanın" />
					<div class="sep"></div>
					<button type="submit" class="ok">Kaydol</button><a class="button" href="login.php">Giriş</a><br/>
                    <?php 
						if($hata != ""){
                        	echo "<label class='n_error'>".$hata."</label> ";
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