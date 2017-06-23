<?php
define('DB_NAMA', 'u1122888_taaruf'); 
define('DB_USER', 'u1122888_super'); 
define('DB_PASSWORD', 'Anind4ever'); 
define('DB_HOST', 'localhost'); 
function koneksi_buka() {
	mysql_select_db(DB_NAMA,mysql_connect(DB_HOST,DB_USER,DB_PASSWORD));
}
function koneksi_tutup() {
	mysql_close(mysql_connect(DB_HOST,DB_USER,DB_PASSWORD));
}
?>