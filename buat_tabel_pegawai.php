<?php
// mengakses file koneksi.php;
include "C:/xampp/htdocs/conf/koneksi.php";

// membuat tabel
$sql = "CREATE TABLE Pegawai (
id_pegawai int(6) UNSIGNED NOT NULL PRIMARY KEY,
nama_depan varchar(30) NOT NULL,
nama_belakang varchar(30) DEFAULT NULL,
tanggal_lahir date DEFAULT NULL,
jenis_kelamin enum('p','w') DEFAULT NULL,
alamat varchar(150) DEFAULT NULL,
gaji int(8) UNSIGNED DEFAULT NULL
)";

//membuat SQL query
$q = $koneksi->query($sql); //memproses query
if ($q === TRUE) {
	echo "Tabel Departemen sukses dibuat";
} else {
	echo "Gagal membuat tabel. ". $koneksi->error;
}
$koneksi->close(); //menutup koneksi

?>