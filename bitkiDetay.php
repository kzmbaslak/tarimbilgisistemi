<?php
	include 'tema/ust.php';
	(isset($_GET["bitkiId"])?$bitkiId = $_GET["bitkiId"]:header("location:index.php"));
	if($bitkiId != ""){
		$sorgu = mysql_query("select * from bitki where bitkiId =".$bitkiId,$db);
		
	}
	while($sonuc = mysql_fetch_array($sorgu)){
		$iklimAdi = mysql_fetch_array(mysql_query("select adi from iklim where iklimId = ".$sonuc['iklimId']));
?>
					<div class="post">
						<h2 class="title"><?= $sonuc["adi"] ?> </h2>
						<p class="meta">İklim Adı:<span class="posted"><?= $iklimAdi['adi'] ?></span></p>
						<p class="meta">Ekme Ayı:<span class="posted"><?= $sonuc["ekmeAyi"] ?></span></p>
						<p class="meta">Biçme Ayı:<span class="posted"><?= $sonuc["bicmeAyi"] ?></span></p>
						<p class="meta">Sulama Bilgisi:<span class="posted"><?= $sonuc["sulamaBilgisi"] ?></span></p>
						<p class="meta">Gübre Miktarı:<span class="posted"><?= $sonuc["gubreMiktari"] ?></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p><?= $sonuc["bitkiMetni"] ?></p>
							
						</div>
					</div>
					
					
<?php
	}
	include('tema/alt.php');
?>