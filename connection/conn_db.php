<?php

	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$conn = mysqli_connect("localhost", "root", "", "nomina");
	if (!$conn) {
	    echo "
	    <script type='text/javascript'>
			alert('ERROR DE CONEXIÓN.');

		</script>";
	}
?>