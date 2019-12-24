<?php
	include "tema/ust.php";
	$sorgu = mysql_query("select * from bicme where ekmeId in (select ekmeId from ekme where kullaniciId = ".$_SESSION['kullaniciId'].")");
	
?>
		<div id="main">
        	<div class="full_w">
            	<div class="h_title">Biçilenler</div>
				
				<table>
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Bitki Adı</th>
							<th scope="col">Biçme Tarihi</th>
							<th scope="col">Ürün Miktarı</th>
							<th scope="col">Verim</th>
							<th scope="col" style="width: 65px;">Modify</th>
						</tr>
					</thead>
						
					<tbody>
                    <?php
						
						while($sonuc = mysql_fetch_array($sorgu)){
							$bitki = mysql_fetch_array(mysql_query("select * from bitki where bitkiId = (select bitkiId from ekme where ekmeId = ".$sonuc['ekmeId'].")"));
							$urun = mysql_fetch_array(mysql_query("select * from urun where bicmeId = ".$sonuc['bicmeId']));
					?>
						<tr>
							<td class="align-center"><?= $sonuc['bicmeId'] ?></td>
							<td><?= $bitki['adi'] ?></td>
							<td><?= $sonuc['bicmeTarihi'] ?></td>
							<td><?=  $urun['miktar']?></td>
							<td><?= $urun['verim'] ?></td>
							<td>
                                <a href="bitkidetay.php?bitkiId=<?= $bitki['bitkiId'] ?>" class="table-icon archive" title="Bitki Detayı"></a>
							</td>
						</tr>
                    <?php } ?>
						
				</table>
				
			</div>
		</div>
<?php
	include "tema/alt.php";
?>