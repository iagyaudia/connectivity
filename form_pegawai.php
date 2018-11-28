<!DOCTYPE html>

<html>

	<head>
		<title></title>
	</head>
	
	<body>
		<form action="habis_form_pegawai.php" method="post">
			<label for="id"> Id Pegawai:  </label> <br />
			<input type="text" name="idPegawai" placeholder="isikan id" required> <br/>
			
			<label for="nama depan"> Nama depan: </label> <br />
			<input type="text" name="namaDepan" placeholder="isikan nama belakang" required> <br/>

			<label for="nama belakang"> Nama belakang: </label> <br />
			<input type="text" name="namaBlk" placeholder="isikan nama belakang" required> <br/>

			<label for="tanggal lahir"> Tanggal lahir: </label> <br />
			<input type="date" name="tanggalLhr" placeholder="isikan tanggal lahir" required> <br/>

			<label for="jenis kelamin"> Jenis kelamin: </label> <br />
			<input type="text" name="jenisKel" placeholder="isikan 'p' atau 'w'" required> <br/>
			
			<label for="alamat"> Alamat: </label> <br />
			<input type="text" name="alamat" placeholder="isikan alamat" required> <br/>
			
			<label for="gaji"> Gaji: </label> <br />
			<input type="text" name="gaji" placeholder="isikan gaji" required> <br/>

			<input type="submit" name="Kirim">
		</form>
	</body>
</html>