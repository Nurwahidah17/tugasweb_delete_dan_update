<?php
if (isset($_GET['nip'])) {

	include("Koneksi.php");
	$input_nip = $_GET['nip'];

	$query ="DELETE FROM dosen WHERE nip='$input_nip'";
	$result = mysqli_query($link, $query);

	if ($result) {
		header('location: index.php');
		
	}else{
		echo 'Gagal dihapus :' .mysqli_error($link);
	}

	
}