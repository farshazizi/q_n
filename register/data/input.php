<?php
require '../konfigurasi.php';
koneksi_buka();
	
	$nama	 		= $_POST['nama'];
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir 	= $_POST['tanggal_lahir'];
	$tinggi			= $_POST['tinggi'];
	$berat 			= $_POST['berat'];
	$golongan_darah		= $_POST['golongan_darah'];
	$status_pernikahan 	= $_POST['status_pernikahan'];
	$pekerjaan			= $_POST['pekerjaan'];
	$penghasilan		= $_POST['penghasilan'];
	$nama_ayah			= $_POST['nama_ayah'];
	$suku_ayah	 		= $_POST['suku_ayah'];
	$nama_ibu			= $_POST['nama_ibu'];
	$suku_ibu	 		= $_POST['suku_ibu'];
	$izinmenikah 		= $_POST['izinmenikah'];
	$alamat	 			= $_POST['alamat'];
	
	$sd						= $_POST['sd'];
	$smp					= $_POST['smp'];
	$sma	 				= $_POST['sma'];
	$perguruan_tinggi		= $_POST['perguruan_tinggi'];
	$prestasi_penghargaan	= $_POST['prestasi_penghargaan'];
	
	$organisasi_komunitas	= $_POST['organisasi_komunitas'];
	$panitia				= $_POST['panitia'];
	
	$pengalamankerja	= $_POST['pengalamankerja'];
	
	
	$tentang_dirimu		= $_POST['tentang_dirimu'];
	$motto				= $_POST['motto'];
	$hobi				= $_POST['hobi'];
	$buku_favorit 		= $_POST['buku_favorit'];
	$situs_favorit		= $_POST['situs_favorit'];
	$idola				= $_POST['idola'];
	$disukai			= $_POST['disukai'];
	$tidaksuka 			= $_POST['tidaksuka'];
	$positif			= $_POST['positif'];
	$negatif			= $_POST['negatif'];
	$penyakit 			= $_POST['penyakit'];
	$jamaah	 			= $_POST['jamaah'];
	
	$profil_ayah		= $_POST['profil_ayah'];
	$profil_ibu			= $_POST['profil_ibu'];
	$profil_saudara 	= $_POST['profil_saudara'];
	
	$merokok		= $_POST['merokok'];
	$makan			= $_POST['makan'];
	$minum			= $_POST['minum'];
	$tidur		 	= $_POST['tidur'];
	$ibadah_wajib_harian	= $_POST['ibadah_wajib_harian'];
	$ibadah_sunnah_harian	= $_POST['ibadah_sunnah_harian'];
	$membaca_alquran		= $_POST['membaca_alquran'];
	$hafalan		= $_POST['hafalan'];
	$pengajian		= $_POST['pengajian'];
	$waktu_luang 	= $_POST['waktu_luang'];
	$sosialisasi	= $_POST['sosialisasi'];
	
	$ilmu		= $_POST['ilmu'];
	$finansial	= $_POST['finansial'];
	$mental 	= $_POST['mental'];
	$ortu		= $_POST['ortu'];
	$waktu	 	= $_POST['waktu'];
	
	$visimisi	= $_POST['visimisi'];
	
	$kriteria_usia			= $_POST['kriteria_usia'];
	$kriteria_tinggi		= $_POST['kriteria_tinggi'];
	$kriteria_berat			= $_POST['kriteria_berat'];
	$kriteria_penghasilan	= $_POST['kriteria_usia'];
	$nonfisik				= $_POST['nonfisik'];
	$kriteria_ortu			= $_POST['kriteria_ortu'];
	
	$gambaran_acara_pernikahan	= $_POST['gambaran_acara_pernikahan'];
	$domisili					= $_POST['domisili'];
	$kehidupan_RT				= $_POST['kehidupan_RT'];
	$karir						= $_POST['karir'];
	$pendidikan_anak 	= $_POST['pendidikan_anak'];
	$keuangan_keluarga	= $_POST['keuangan_keluarga'];
	$target_pendek 		= $_POST['target_pendek'];
	$target_panjang		= $_POST['target_panjang'];
	$visi_hidup			= $_POST['visi_hidup'];
	$phone	 			= $_POST['phone'];
	
	
	
	if($nama !=NULL){
		mysql_query("INSERT INTO `u1122888_taaruf`.`cv` VALUES (NULL, '$nama', '$tempat_lahir', '$tanggal_lahir', '$tinggi', '$berat', '$golongan_darah', '$status_pernikahan', '$pekerjaan', '$penghasilan', '$nama_ayah', '$suku_ayah', '$nama_ibu', '$suku_ibu', '$izinmenikah', '$alamat', '$sd', '$smp', '$sma', '$perguruan_tinggi', '$prestasi_penghargaan', '$organisasi_komunitas', '$panitia', '$pengalamankerja', '$tentang_dirimu', '$motto', '$hobi', '$buku_favorit', '$situs_favorit', '$idola', '$disukai', '$tidaksuka', '$positif', '$negatif', '$penyakit', '$jamaah', '$profil_ayah', '$profil_ibu', '$profil_saudara', '$merokok', '$makan', '$minum', '$tidur', '$ibadah_wajib_harian', '$ibadah_sunnah_harian', '$membaca_alquran', '$hafalan', '$pengajian', '$waktu_luang', '$sosialisasi', '$ilmu', '$finansial', '$mental', '$ortu', '$waktu', '$visimisi', '$kriteria_usia', '$kriteria_tinggi', '$kriteria_berat', '$kriteria_penghasilan', '$nonfisik', '$kriteria_ortu', '$gambaran_acara_pernikahan', '$domisili', '$kehidupan_RT', '$karir', '$pendidikan_anak', '$keuangan_keluarga', '$target_pendek', '$target_panjang', '$visi_hidup', '$phone')");
	}

koneksi_tutup();
SESSION_START();
$_SESSION['nama'] = $nama;
header("Location: ../upload.php");
exit;
?>