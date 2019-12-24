<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
<div id="sidebar">
					<div id="logo">
						<h1><a href="index.php">tarım </a></h1>
						<p>Kullanıcı Panele <a href="kullanici/index.php" rel="nofollow"><u><i>git</i></u></a></p>
					</div>
					<div id="menu">
						<ul>
							<li class="current_page_item"><a href="index.php">Tümü</a></li>
                            <?php
								$sorgu = mysql_query("select * from iklim",$db);
								while($sonuc=mysql_fetch_array($sorgu)){
									echo "<li><a href='index.php?iklimId=".$sonuc["iklimId"]."'>".$sonuc["adi"]."</a></li>";
								}
							?>
                            
							
						</ul>
					</div>
					<ul>
						<li>
							<h2>Hakkımızda</h2>
							<p>Tarım bilgi sistemi...</p>
						</li>
						
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>

<div id="footer">
	
</div>
<!-- end #footer -->
</body>
</html>