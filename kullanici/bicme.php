<?php
	include "tema/ust.php";
	
	
	
	
	
	
	if($_POST){
		if($_POST['miktar']){
			$id = mysql_fetch_array(mysql_query("select bicmeId from bicme order by bicmeId desc limit 1"));
			$ekme = mysql_fetch_array(mysql_query("select * from ekme where ekmeId = ".$_POST['ekmeId']));
			mysql_query("insert into bicme values (".($id['bicmeId']+1).",'".date('Y/m/d')."',".$_POST['ekmeId'].")");
			
			mysql_query("insert into urun values (".($id['bicmeId']+1).",".$_POST['miktar'].",'".($_POST['miktar'])/($ekme['ekmeAlani'])."')");
			header("Location:bicilenler.php");		
		}
	}
	else if(!$_GET)
	
?>
		<div id="main">
        	<div class="full_w">
            	<div class="h_title">Biçme</div>
                <form action="bicme.php" method="post">
                        <div class="element">
                            <label for="ekmeId" >Ekme Id: <span class="red"></span></label>
                            <input id="ekmeId" name="ekmeId" class="text err" readonly value="<?= isset($_GET['ekmeId'])?$_GET['ekmeId']:$_POST['ekmeId'] ?>"/>
                            <label for="miktar">Ürün Miktarı(kg): <span class="red"></span></label>
                            <input id="miktar" name="miktar" class="text err" />
                            <button type="submit" class="button" style="margin-top:10px">Bitkiyi Biç</button>
                            
                        </div>
                        <?php	
								if($_POST and !$_POST['miktar']){
									hataMesaji("Ürün miktarı alanını boş bırakmayınız");
								}
						?>
                </form>
			
				
			</div>
		</div>

<?php
	include "tema/alt.php";
?>