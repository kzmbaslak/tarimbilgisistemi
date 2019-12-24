<?php
	include "tema/ust.php";
	if($_GET and $_GET['bitkiId']){
		$sonuc = mysql_fetch_array(mysql_query("select * from bitki where bitkiId =".$_GET['bitkiId']));	
	}
	else
		header("Location:index.php");
	$iklim = mysql_fetch_array(mysql_query("select * from iklim where iklimId =".$sonuc['iklimId']));
?>
		<div id="main">
        	<div class="full_w">
            	<div class="h_title">Bitki Detayı</div>
				<h1><?= $sonuc['adi'] ?></h1>
                <p>İklim: <?= $iklim['adi'] ?></p>
                <p>Sulama: <?= $sonuc['sulamaBilgisi'] ?></p>
                <p>Ekim Ayı: <?= $sonuc['ekmeAyi'] ?></p>
                <p>Biçme Ayı: <?= $sonuc['bicmeAyi'] ?></p>
                <p> <?= $sonuc['bitkiMetni'] ?></p>
				<div class="entry">
					<div class="sep"></div>
				</div>
				
			</div>
		</div>
<?php
	include "tema/alt.php";
?>