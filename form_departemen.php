<!DOCTYPE html>

<html>

	<head>
		<title></title>
	</head>
	
	<body>
		<form action="habis_form.php" method="post">
			<label for="nama"> Kode:  </label> <br />
			<input type="text" name="kode" placeholder="isikan kode " required> <br/>
			
			<label for="email"> Nama: </label> <br />
			<input type="text" name="nama" placeholder="isikan nama" required> <br/>

			<label for="email"> Id: </label> <br />
			<input type="text" name="idManager" placeholder="isikan id" required> <br/>


			<label for="email"> Tanggal mulai: </label> <br />
			<input type="date" name="tanggal" placeholder="isikan tanggal" required> <br/>


			<input type="submit" name="Kirim">
		</form>
	</body>
</html>