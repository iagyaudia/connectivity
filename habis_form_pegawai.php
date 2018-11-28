<?php

include "C:/xampp/htdocs/conf/koneksi.php";


	$idP = $_POST['idPegawai'];
	$nama_dpn = $_POST['namaDepan'];
	$nama_blk = $_POST['namaBlk'];
	$tanggal_lhr = $_POST['tanggalLhr'];
	$jenis_kel = $_POST['jenisKel'];
	$alamat = $_POST['alamat'];
	$gaji =$_POST['gaji'];


	$sql = "INSERT INTO pegawai (id_pegawai, nama_depan, nama_belakang, tanggal_lahir, jenis_kelamin, alamat, gaji) VALUES ('$idP', '$nama_dpn', '$nama_blk', '$tanggal_lhr', '$jenis_kel', '$alamat', '$gaji')";

	$q = $koneksi->query($sql);

	if($q===TRUE){
		echo "Input sudah masuk kedalam tabel";
	} else {
		echo "Gagal menginput data kedalam tabel. ".$koneksi->error;
	}
	$koneksi->close();