<?php
session_start();
include('../../../connection/conn_db.php');

	$aciertos=0;
    foreach($_POST['idPregunta'] as $idPregunta){
        
       $sql = mysqli_query($conn, "SELECT * FROM respuestas WHERE correcta = 1 AND id_pregunta =".$idPregunta);

        $respuesta = mysqli_fetch_assoc($sql);
        if($respuesta['id'] == $_POST['optradio_'.$idPregunta]){
            $aciertos++;
        }
    }
    $cali = ($aciertos * 100) / 11 ;
    $cali_forma= bcdiv($cali, '1', 1);
    
    $datos = mysqli_query($conn, "SELECT * FROM postulados WHERE curp= '".$_SESSION['curp']."'");
    
    $ultimo = mysqli_fetch_assoc($datos);
    

    $inser = mysqli_query($conn, "INSERT INTO resul_test (id_postulados, res_test1) 
                                VALUES('".$ultimo['id']."', '$cali_forma')");

   echo "<script type='text/javascript'>window.location.href='test2.php';</script>";                 
?>

