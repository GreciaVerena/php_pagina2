<?php
	
	// (host, user, pass, db)
	$conn = mysqli_connect("localhost", "ciisa_backend_v1_eva2_A", "l4cl4v3-c11s4", "ciisa_backend_v1_eva2_A");
	
	// error 
	if (!$conn) {
		die("La connection no fue establecida: " .mysqli_connect_error());
	}

?>