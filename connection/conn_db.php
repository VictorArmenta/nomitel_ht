<?php

	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$conn = mysqli_connect("localhost", "root", "s1573345.", "nominas_db");
	if (!$conn) {
	    echo "
	    <script type='text/javascript'>
			alert('ERROR DE CONEXIÓN.');

		</script>";
	}
?>