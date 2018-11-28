<?php

include "C:/xampp/htdocs/conf/koneksi.php";


	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$id = $_POST['idManager'];
	$tanggal_mulai = $_POST['tanggal'];




	$sql = "INSERT INTO departemen (kode_departemen, nama_departemen, id_manajer, tanggal_mulai_manajer) VALUES ('$kode', '$nama','$id', '$tanggal_mulai')";
	$q = $koneksi->query($sql);

	if($q===TRUE){
		echo "Input sudah masuk kedalam tabel";
	} else {
		echo "Gagal menginput data kedalam tabel. ".$koneksi->error;
	}
	$koneksi->close();