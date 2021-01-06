<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Edit data</div>

		<?php

		include("Koneksi.php");
		// proses menampilkan data
		if (isset($_GET['url-nip'])) {
			
			$input_nip = $_GET['url-nip'];

			$query = "SELECT * FROM dosen WHERE nip ='$input_nip'";
			$result = mysqli_query($link,$query);
			$isi = mysqli_fetch_object($result);
		}
		// proses simpan data

		if(isset($_POST['simpan'])){
			$input_nip = $_POST['txtnip'];
			$input_nama = $_POST['txtnama'];
			$input_alamat= $_POST['txtalamat'];

			$query = "INSERT INTO dosen VALUES('$input_nip', '$input_nama','$input_alamat')";

			$query ="UPDATE dosen SET nama_dosen='$input_nama', alamat='$input_alamat' WHERE nip='$input_nip'";
			$result = mysqli_query($link, $query);
			if ($result){
				header('location: index.php');

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
			</div>
		</form>

		

</body>
</html>