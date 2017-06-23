(function($) {
	$(document).ready(function(e) {
		
		var id_data = "";
		var main = "index.html";//buat memanggil database
		
		$("#data-register").load(main);
		
		$("#simpan-register").bind("click", function(event) {
		
			var url = "data/input.php";

			var v_nama 			= $('input:text[name=nama]').val();
			var v_nickname 		= $('input:text[name=nickname]').val();
			var v_agama 		= $('input:text[name=agama]').val();
			var v_tempat_lahir	= $('input:text[name=tempat_lahir]').val();
			var v_ttl 			= $('input:text[name=ttl]').val();
			var v_tinggi		= $('input:text[name=tinggi]').val();
			var v_berat			= $('input:text[name=berat]').val();
			
			var v_gold 			= $('input:text[name=gold]').val();
			var v_pekerjaan 	= $('input:text[name=pekerjaan]').val();
			var v_stats 		= $('input:text[name=stats]').val();
			var v_sukua 		= $('input:text[name=sukua]').val();
			var v_sukui 		= $('input:text[name=sukui]').val();
			
			var v_nama_ayah 	= $('input:text[name=nama_ayah]').val();
			var v_nama_ibu 		= $('input:text[name=nama_ibu]').val();
			var v_izinmenikah 	= $('input:text[name=izinmenikah]').val();
			var v_alamat 		= $('input:text[name=alamat]').val();
			
			var v_sd 			= $('input:text[name=sd]').val();
			var v_smp 			= $('input:text[name=smp]').val();
			var v_sma 			= $('input:text[name=sma]').val();
			var v_pt 			= $('textarea[name=pt]').val();
			
			var v_prestasi 		= $('textarea[name=prestasi]').val();
			var v_panitia		= $('textarea[name=panitia]').val();
			var v_organisasi	= $('textarea[name=organisasi]').val();
			
			var v_pengalamankerja 	= $('textarea[name=pengalamankerja]').val();
			
			var v_keahlian1 	= $('input:text[name=keahlian1]').val();
			var v_keahlian2		= $('input:text[name=keahlian2]').val();
			var v_keahlian3		= $('input:text[name=keahlian3]').val();
			
			var v_motto 		= $('input:text[name=motto]').val();
			var v_hobi 			= $('input:text[name=hobi]').val();
			var v_bukufav 		= $('input:text[name=bukufav]').val();
			var v_situsfav 		= $('input:text[name=situsfav]').val();
			var v_idola 		= $('input:text[name=idola]').val();
			var v_disukai 		= $('input:text[name=disukai]').val();
			var v_tidaksuka 	= $('input:text[name=tidaksuka]').val();
			
			var v_positif 		= $('input:text[name=positif]').val();
			var v_negatif 		= $('input:text[name=negatif]').val();
			var v_penyakit 		= $('textarea[name=penyakit]').val();
			var v_jamaah 		= $('input:text[name=jamaah]').val();
			
			var v_pbapak 		= $('textarea[name=pbapak]').val();
			var v_pibu 			= $('textarea[name=pibu]').val();
			var v_psaudara	 	= $('textarea[name=psaudara]').val();
			
			var v_merokok 		= $('input:text[name=merokok]').val();
			var v_makanminum	= $('textarea[name=makanminum]').val();
			var v_tidur	 		= $('input:text[name=tidur]').val();
			var v_ibadah_wajib_harian	 = $('input:text[name=ibadah_wajib_harian]').val();
			var v_ibadah_sunnah_harian	 = $('input:text[name=ibadah_sunnah_harian]').val();
			
			var v_hafalan 		= $('input:text[name=hafalan]').val();
			var v_pengajian		= $('input:text[name=pengajian]').val();
			var v_waktu_luang	= $('input:text[name=waktu_luang]').val();
			var v_sosialisasi	= $('input:text[name=sosialisasi]').val();
			
			var v_ilmu 			= $('input:text[name=ilmu]').val();
			var v_finansial		= $('input:text[name=finansial]').val();
			var v_mental		= $('input:text[name=mental]').val();
			var v_kesehatan		= $('input:text[name=kesehatan]').val();
			var v_ortu			= $('input:text[name=ortu]').val();
			var v_waktu			= $('input:text[name=waktu]').val();
			
			var v_visi 			= $('textarea[name=visi]').val();
			var v_misi			= $('textarea[name=misi]').val();
			
			var v_nonfisik		= $('textarea[name=nonfisik]').val();
			var v_fisik			= $('textarea[name=fisik]').val();
			var v_kriteria_ortu	= $('textarea[name=kriteria_ortu]').val();
			
			var v_gambaran_acara_pernikahan		= $('textarea[name=gambaran_acara_pernikahan]').val();
			var v_pembiayaan_acara_pernikahan	= $('textarea[name=pembiayaan_acara_pernikahan]').val();
			var v_domisili						= $('textarea[name=domisili]').val();
			var v_karir							= $('textarea[name=karir]').val();
			
			var v_kehidupan_RT		= $('textarea[name=kehidupan_RT]').val();
			var v_pendidikan_anak	= $('textarea[name=pendidikan_anak]').val();
			var v_keuangan_keluarga	= $('textarea[name=keuangan_keluarga]').val();
			
			var v_peningkatan_ilmu	= $('textarea[name=peningkatan_ilmu]').val();
			var v_target_pendek		= $('textarea[name=target_pendek]').val();
			var v_target_panjang	= $('textarea[name=target_panjang]').val();
			
			var v_email	= $('input:text[name=email]').val();
			var v_phone	= $('input:text[name=phone]').val();
			
			$.post(url, {nama: v_nama, nickname: v_nickname, agama: v_agama, tempat_lahir: v_tempat_lahir, ttl: v_ttl, tinggi: v_tinggi, berat: v_berat, gold: v_gold, pekerjaan: v_pekerjaan, stats : v_stats, sukua : v_sukua, sukui : v_sukui, nama_ayah : v_nama_ayah, nama_ibu : v_nama_ibu, izinmenikah : v_izinmenikah, alamat : v_alamat, sd : v_sd, smp : v_smp, sma : v_sma, pt : v_pt, prestasi : v_prestasi, panitia : v_panitia, organisasi : v_organisasi, pengalamankerja : v_pengalamankerja, motto : v_motto, hobi : v_hobi, bukufav : v_bukufav, situsfav : v_situsfav, idola : v_idola, disukai : v_disukai, tidaksuka : v_tidaksuka, positif : v_positif, negatif : v_negatif, penyakit : v_penyakit, jamaah : v_jamaah, pbapak : v_pbapak, pibu : v_pibu, psaudara : v_psaudara, merokok : v_merokok, makanminum : v_makanminum, tidur : v_tidur, ibadah_wajib_harian : v_ibadah_wajib_harian, ibadah_sunnah_harian : v_ibadah_sunnah_harian, hafalan : v_hafalan, pengajian : v_pengajian, waktu_luang : v_waktu_luang, sosialisasi : v_sosialisasi, ilmu : v_ilmu, finansial : v_finansial, mental : v_mental, kesehatan : v_kesehatan, ortu : v_ortu, waktu : v_waktu, visi : v_visi, misi : v_misi, nonfisik : v_nonfisik, fisik : v_fisik, kriteria_ortu : v_kriteria_ortu, gambaran_acara_pernikahan : v_gambaran_acara_pernikahan, pembiayaan_acara_pernikahan : v_pembiayaan_acara_pernikahan, domisili : v_domisili, karir : v_karir, kehidupan_RT : v_kehidupan_RT, pendidikan_anak : v_pendidikan_anak, keuangan_keluarga : v_keuangan_keluarga, peningkatan_ilmu : v_peningkatan_ilmu, target_pendek : v_target_pendek, target_panjang : v_target_panjang, email : v_email, phone : v_phone, id: v_id_data},function() {
				$("#data-register").load(main);
				$('#dialog-register').modal('hide');
				$("#myModalLabel").html("Tambah Data Register");
			});
		});
	});
}) (jQuery);