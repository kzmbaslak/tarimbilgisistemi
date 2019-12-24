<?php
	include "tema/ust.php";
	
	if($_POST){
		
		$baslik = "Arama";
		$baslikAciklama = "Aradığınınz kelimeyle ilgili sonuçlar aşağıda listelenmiştir";
		$sorgu = mysql_query("select * from bitki where adi LIKE '%".$_POST['bitkiAdi']."%'");
	}
	else{
		$baslik = "Önerilen Bitkiler";
		$baslikAciklama = "Bulunduğunuz şehirde yetişebilen bitkiler aşağıda listelenmiştir.";	
		$sorgu = mysql_query("select * from bitki where bitkiId = (SELECT iklimId FROM sehir where sehirId =".$_SESSION['sehirId'].")");
	}
?>
		<div id="main">
        	<div class="full_w">
            	<div class="h_title">Bitkiler</div>
                <form action="" method="post">
                        <div class="element">
                            <label for="bitkiAdi">Bitki Adı: <span class="red"></span></label>
                            <input id="bitkiAdi" name="bitkiAdi" class="text err" />
                            <button type="submit" class="button" style="margin-top:10px">Ara</button>
                        </div>
                        
                </form>
			
				
				<h2><?= $baslik ?></h2>
				<p><?= $baslikAciklama ?></p>
				
				<table>
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Adı</th>
							<th scope="col">Ekme Ayı</th>
							<th scope="col">Biçme Ayı</th>
							<th scope="col" style="width: 65px;">Modify</th>
						</tr>
					</thead>
						
					<tbody>
                    <?php
						
						while($sonuc = mysql_fetch_array($sorgu)){
							
					?>
						<tr>
							<td class="align-center"><?= $sonuc['bitkiId'] ?></td>
							<td><?= $sonuc['adi'] ?></td>
							<td><?= $sonuc['ekmeAyi'] ?></td>
							<td><?= $sonuc['bicmeAyi'] ?></td>
							<td>
								<a href="ekme.php?bitkiId=<?= $sonuc['bitkiId'] ?>" class="table-icon edit" title="Ekme işlemini başlat"></a>
                                
								<a href="bitkidetay.php?bitkiId=<?= $sonuc['bitkiId'] ?>" class="table-icon archive" title="Bitki Detay"></a>
							</td>
						</tr>
                    <?php } ?>
						
				</table>
				
			</div>
		</div>
<?php
	include "tema/alt.php";
?>