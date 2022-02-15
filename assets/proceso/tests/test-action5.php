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
    $cali = ($aciertos * 100) / 4 ;
    $cali_forma= bcdiv($cali, '1', 1);
    
    $datos = mysqli_query($conn, "SELECT * FROM postulados WHERE curp= '".$_SESSION['curp']."'");
    
    $ultimo = mysqli_fetch_assoc($datos);
    
    session_destroy();
     $inser = mysqli_query($conn, "UPDATE resul_test SET res_test5= '".$cali_forma."' WHERE id_postulados= '".$ultimo['id']."'");
   echo "<script type='text/javascript'>
	      			 window.location.href='fin-action.php';
	      		</script>";                 
?>
