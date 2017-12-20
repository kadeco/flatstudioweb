<?php
	$con = @mysqli_connect("localhost", "root", "", "flatstud_cimol");
	//cek koneksi error atau tidak
	if (!$con) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}
?>