<?php
require '../konfigurasi.php';
koneksi_buka();
	
	$subscribe= $_POST['subscribe'];
	
	
	
	
	if($subscribe!=NULL){
	
		mysql_query("INSERT INTO `u1122888_taaruf`.`data` (`id_data`, `email`, `status`) VALUES (NULL, '$subscribe', '0');");
	}

koneksi_tutup();
header("Location: ../");
exit;
?>