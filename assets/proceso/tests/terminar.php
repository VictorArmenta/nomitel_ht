<?php
    session_start();
	session_destroy();
	header('Location: ../../../proceso-selec.php');
?>