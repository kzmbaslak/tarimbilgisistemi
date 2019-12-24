<?php
	include "tema/ust.php";
	
	if($_POST){
		$id = mysql_fetch_array(mysql_query("select ekmeId from ekme order by ekmeId desc limit 1"));
		if($_POST['ekmeAlani']){
			mysql_query("insert into ekme values(".($id['ekmeId'] + 1).",'".date('Y/m/d')."',".$_POST['ekmeAlani'].",".$_POST['sehirId'].",".$_POST['kullaniciId'].",".$_POST['bitkiId'].")");
			header("Location:ekilenler.php");
			
		}
		else{
			$sonuc = mysql_fetch_array(mysql_query("select * from bitki where bitkiId = ".$_GET['bitkiId']));
			
		}
		
		
	}
	else if($_GET){
		$sonuc = mysql_fetch_array(mysql_query("select * from bitki where bitkiId = ".$_GET['bitkiId']));
		$id = mysql_fetch_array(mysql_query("select ekmeId from ekme order by ekmeId desc limit 1"));
	}
	else
		header("Location:index.php");
	
?>
		<div id="main">
        	<div class="full_w">
            	<div class="h_title">Bitkiler</div>
                <form action="" method="post">
                        <div class="element">
                            <label for="ekmeId" >Ekme Id: <span class="red"></span></label>
                            <input id="ekmeId" name="ekmeId" class="text err" readonly value="<?= $id['ekmeId']+1 ?>"/>
                            <label for="ekmeTarihi" >Ekme Tarihi: <span class="red"></span></label>
                            <input id="ekmeTarihi" name="ekmeTarihi" class="text err" readonly value="<?= date("Y-m-d") ?>"/>
                            <label for="ekmeAlani">Ekim Alanı(m2): <span class="red"></span></label>
                            <input id="ekmeAlani" name="ekmeAlani" class="text err" />
                            <label for="sehirId" >Şehir Id: <span class="red"></span></label>
                            <input id="sehirId" name="sehirId" class="text err" readonly value="<?= $_SESSION['sehirId'] ?>" />
                            <label for="kullaniciId" >Kullanıcı Id: <span class="red"></span></label>
                            <input id="kullaniciId" name="kullaniciId" class="text err" readonly value="<?= $_SESSION['kullaniciId'] ?>"/>
                            <label for="bitkiId" >Bitki Id: <span class="red"></span></label>
                            <input id="bitkiId" name="bitkiId" class="text err" readonly value="<?= $sonuc['bitkiId'] ?>"/>
                            <button type="submit" class="button" style="margin-top:10px">Bitki Ek</button>
                            
                        </div>
                        <?php	
								if($_POST and !$_POST['ekmeAlani']){
									hataMesaji("Ekme alanını boş bırakmayınız");
								}
						?>
                </form>
			
				
			</div>
		</div>

<?php
	include "tema/alt.php";
?>