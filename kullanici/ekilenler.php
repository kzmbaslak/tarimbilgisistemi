<?php
	include "tema/ust.php";
	$sorgu = mysql_query("select * from ekme where kullaniciId = ".$_SESSION['kullaniciId']);
	
	
?>
		<div id="main">
        	<div class="full_w">
            	<div class="h_title">Ekilenler</div>
				
				<table>
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Ekim Tarihi</th>
							<th scope="col">Ekim Alanı (m2)</th>
							<th scope="col">Şehir</th>
							<th scope="col">Bitki Adı</th>
							<th scope="col" style="width: 65px;">Modify</th>
						</tr>
					</thead>
						
					<tbody>
                    <?php
						
						while($sonuc = mysql_fetch_array($sorgu)){
							$sehir = mysql_fetch_array(mysql_query("select * from sehir where sehirId =".$sonuc['sehirId']));
							$bitki = mysql_fetch_array(mysql_query("select * from bitki where bitkiId =".$sonuc['bitkiId']));
					?>
						<tr>
							<td class="align-center"><?= $sonuc['ekmeId'] ?></td>
							<td><?= $sonuc['ekmeTarihi'] ?></td>
							<td><?= $sonuc['ekmeAlani'] ?></td>
							<td><?= $sehir['adi'] ?></td>
							<td><?= $bitki['adi'] ?></td>
							<td>
								<a href="bicme.php?ekmeId=<?= $sonuc['ekmeId'] ?>" class="table-icon edit" title="Biçme İşlemini Başlat"></a>
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