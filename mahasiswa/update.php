<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Edit data</div>

		<?php

		include("connection.php");
		// proses menampilkan data
		if (isset($_GET['url-nim'])) {
			
			$input_nim = $_GET['url-nim'];

			$query = "SELECT * FROM mahasiswa WHERE nim ='$input_nim'";
			$result = mysqli_query($link, $query);
			$isi = mysqli_fetch_object($result);
		}
		
		// proses simpan data

		if(isset($_POST['simpan'])){
			$input_nim = $_POST['txtnim'];
			$input_nama = $_POST['txtnama'];
			$input_prodi = $_POST['txtprodi'];
			$input_alamat= $_POST['txtalamat'];

			$query = "INSERT INTO mahasiswa VALUES('$input_nim', '$input_nama', '$input_prodi', '$input_alamat')";

			$query ="UPDATE mahasiswa SET nama_mahasiswa='$input_nama', alamat='$input_alamat' WHERE nim='$input_nim'";
			$result = mysqli_query($link, $query);
			if ($result){
				header('location: mahasiswa.php');

			}else{
				echo 'Gagal disimpan :' .mysql_error($link);
			}

		}
		?>

		<form action=""method="post">
			<div class="form-group">
				<label for="">NIM</label>
				<input type="text" class="form-control" name="txtnim">
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama">
			</div>
			<div class="form-group">
				<label for="">Prodi</label>
				<input type="text" class="form-control" name="txtprodi">
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="txtalamat">
			</div>
			<input type="submit" class="btn btn-primary"
			 name="simpan" value="Simpan Data">
			 <a href="mahasiswa.php" class="btn btn-warning">Batal</a>
			
		</form>

		

</body>
</html>