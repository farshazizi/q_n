<?php
require 'konfigurasi.php';
koneksi_buka();
	
	$panggilan	 	= $_POST['panggilan'];
	$email			= $_POST['email'];
	$gender		 	= $_POST['gender'];
	
	if($panggilan !=NULL){
		mysql_query("INSERT INTO `u1122888_taaruf`.`register` VALUES (NULL, '$panggilan', '$email', '$gender')");
	}

koneksi_tutup();
header("Location: register/");
exit;
?>