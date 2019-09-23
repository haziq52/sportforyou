<?php
	$conn = mysqli_connect('localhost', 'root', '', 'sportforyou');

	if (mysqli_connect_errno()) {
	    echo "gagal".mysqli_connect_error();
		}else{
			echo "Sambungan Berjaya";
	}
	
?>