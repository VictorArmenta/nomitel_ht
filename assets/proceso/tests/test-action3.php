<?php
    session_start();
    include('../../../connection/conn_db.php');

    $datos = $_POST['cali'];
    $re = rand(21, 29);
    
    $cali = ($re * 100) / 29 ;
    $cali_forma= bcdiv($cali, '1', 1);
    
    $datos = mysqli_query($conn, "SELECT * FROM postulados WHERE curp= '".$_SESSION['curp']."'");
    
    $ultimo = mysqli_fetch_assoc($datos);
    

    $inser = mysqli_query($conn, "UPDATE resul_test SET res_test3= '".$cali_forma."' WHERE id_postulados= '".$ultimo['id']."'");
    echo "<script type='text/javascript'>
	      			 window.location.href='test4.php';
	      		</script>";          
?>

