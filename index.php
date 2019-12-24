<?php
	include 'tema/ust.php';
	(isset($_GET["iklimId"])?$iklimId = $_GET["iklimId"]:$iklimId = "");
	if($iklimId != ""){
		$sorgu = mysql_query("select * from bitki where iklimId =".$iklimId,$db);
	}
	else{
		$sorgu = mysql_query("select * from bitki",$db);	
	}
	if(!$sonuc = mysql_fetch_array($sorgu)){
		header("location:index.php");
	}
	do{
		$iklimAdi = mysql_fetch_array(mysql_query("select adi from iklim where iklimId = ".$sonuc['iklimId']));
?>
					<div class="post">
						<h2 class="title"><a href="bitkiDetay.php?bitkiId=<?=$sonuc['bitkiId']?>"><?= $sonuc["adi"] ?> </a></h2>
						<p class="meta">İklim:<span class="posted"><?= $iklimAdi['adi'] ?></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p><?= substr($sonuc["bitkiMetni"],0,500)	 ?></p>
							
						</div>
					</div>
					
					
<?php
	}while($sonuc = mysql_fetch_array($sorgu));
	include('tema/alt.php');
?>