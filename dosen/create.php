<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Tambah Data</div>

		<?php

		include("Koneksi.php");
		if (isset($_POST['simpan'])) {
			# code...
			$input_nip = $_POST['txtnip'];
			$input_nama = $_POST['txtnama'];
			$input_alamat= $_POST['txtalamat'];

			$query = "INSERT INTO dosen VALUES('$input_nip', '$input_nama', '$input_alamat')";
			$result =mysqli_query($link, $query);
			if ($result) {
				header('location:index.php');
				
			}else{
				echo 'Gagal disimpan :' .mysqli_error($link);
			}
		}

		?>

		<form action=""method="post">
			<div class="form-group">
				<label for="">NIP</label>
				<input type="text" class="form-control" name="txtnip">
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama">
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="txtalamat">
			</div>
			<input type="submit" class="btn btn-primary"
			 name="simpan" value="Simpan Data">
			 <a href="index.php" class="btn btn-warning">Batal</a>
		</form>

		

</body>
</html>