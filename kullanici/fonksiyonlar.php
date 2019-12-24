<?php
	function hataMesaji($mesaj){
		echo "<div class='n_error'><p>$mesaj</p></div>";
	}
	function onayMesaji($mesaj){
		echo "<div class='n_ok'><p>$mesaj</p></div>";
	}
	function dikkatMesaji($mesaj){
		echo "<div class='n_warning'><p>$mesaj</p></div>";
	}
?>