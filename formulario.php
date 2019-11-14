<?php

	$email = $_POST["email"];
	$contraseña1 = $_POST["email"];
	$contraseña2 = $_POST["email"];

	$longitudContraseña = strlen($contraseña1);

	if (($contraseña1 === $contraseña2) && ($longitudContraseña >= 8) ) {
		echo "Datos procesados correctamente.";
	} else {
		echo "Error en el formulario."
	}

?>


