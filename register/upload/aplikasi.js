(function($) {
	$(document).ready(function(e) {
		
		var id_data = "";
		var main = "index.html";//buat memanggil database
		
		$("#data-register").load(main);
		
		$("#simpan-register").bind("click", function(event) {
		
			var url = "data/input.php";

			var v_nama 			= $('input:text[name=nama]').val();
			var v_agama 		= $('input:text[name=agama]').val();
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
			var v_alamat 		= $('textarea[name=alamat]').val();
			
			var v_sd 			= $('input:text[name=sd]').val();
			var v_smp 			= $('input:text[name=smp]').val();
			var v_sma 			= $('input:text[name=sma]').val();
			var v_pt 			= $('textarea[name=pt]').val();
			
			var v_org1 			= $('input:text[name=org1]').val();
			var v_org2 			= $('input:text[name=org2]').val();
			var v_org3 			= $('input:text[name=org3]').val();
			
			var v_pekerjaan1 	= $('input:text[name=pekerjaan1]').val();
			var v_pekerjaan2	= $('input:text[name=pekerjaan2]').val();
			var v_pekerjaan3	= $('input:text[name=pekerjaan3]').val();
			
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
			
			var v_positif 		= $('textarea[name=positif]').val();
			var v_negatif 		= $('textarea[name=negatif]').val();
			var v_penyakit 		= $('input:text[name=penyakit]').val();
			var v_jamaah 		= $('input:text[name=jamaah]').val();
			
			var v_pbapak 		= $('textarea[name=pbapak]').val();
			var v_pibu 			= $('textarea[name=pibu]').val();
			var v_psaudara	 	= $('textarea[name=psaudara]').val();
			
			var v_merokok 		= $('textarea[name=merokok]').val();
			var v_makanminum	= $('textarea[name=makanminum]').val();
			var v_tidur	 		= $('textarea[name=tidur]').val();
			var v_ibadah_wajib_harian	 = $('textarea[name=ibadah_wajib_harian]').val();
			var v_ibadah_sunnah_harian	 = $('textarea[name=ibadah_sunnah_harian]').val();
			
			var v_hafalan 		= $('textarea[name=hafalan]').val();
			var v_pengajian		= $('textarea[name=pengajian]').val();
			var v_waktu_luang	= $('textarea[name=waktu_luang]').val();
			var v_sosialisasi	= $('textarea[name=sosialisasi]').val();
			
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
			
			$.post(url, {nama: v_nama, agama: v_agama, ttl: v_ttl, tinggi: v_tinggi, berat: v_berat, gold: v_gold, pekerjaan: v_pekerjaan, stats : v_stats, sukua : v_sukua, sukui : v_sukui, nama_ayah : v_nama_ayah, nama_ibu : v_nama_ibu, izinmenikah : v_izinmenikah, alamat : v_alamat, sd : v_sd, smp : v_smp, sma : v_sma, pt : v_pt, org1 : v_org1, org2 : v_org2, org3 : v_org3, pekerjaan1 : v_pekerjaan1, pekerjaan2 : v_pekerjaan2, pekerjaan3 : v_pekerjaan3, keahlian1 : v_keahlian1, keahlian2 : v_keahlian2, keahlian3 : v_keahlian3, motto : v_motto, hobi : v_hobi, bukufav : v_bukufav, situsfav : v_situsfav, idola : v_idola, disukai : v_disukai, tidaksuka : v_tidaksuka, positif : v_positif, negatif : v_negatif, penyakit : v_penyakit, jamaah : v_jamaah, pbapak : v_pbapak, pibu : v_pibu, psaudara : v_psaudara, merokok : v_merokok, makanminum : v_makanminum, tidur : v_tidur, ibadah_wajib_harian : v_ibadah_wajib_harian, ibadah_sunnah_harian : v_ibadah_sunnah_harian, hafalan : v_hafalan, pengajian : v_pengajian, waktu_luang : v_waktu_luang, sosialisasi : v_sosialisasi, ilmu : v_ilmu, finansial : v_finansial, mental : v_mental, kesehatan : v_kesehatan, ortu : v_ortu, waktu : v_waktu, visi : v_visi, misi : v_misi, nonfisik : v_nonfisik, fisik : v_fisik, kriteria_ortu : v_kriteria_ortu, gambaran_acara_pernikahan : v_gambaran_acara_pernikahan, pembiayaan_acara_pernikahan : v_pembiayaan_acara_pernikahan, domisili : v_domisili, karir : v_karir, kehidupan_RT : v_kehidupan_RT, pendidikan_anak : v_pendidikan_anak, keuangan_keluarga : v_keuangan_keluarga, peningkatan_ilmu : v_peningkatan_ilmu, target_pendek : v_target_pendek, target_panjang : v_target_panjang, email : v_email, phone : v_phone, id: v_id_data},function() {
				$("#data-register").load(main);
				$('#dialog-register').modal('hide');
				$("#myModalLabel").html("Tambah Data Register");
			});
		});
	});
}) (jQuery);