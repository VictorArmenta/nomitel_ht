<?php
    session_start();
    include('../../../connection/conn_db.php');


    $siempre=0;
    $c_siempre=0;
    $c_nunca=0; 
    $nunca=0;
    
    foreach($_POST['idPregunta'] as $idPregunta){
        
       $sql = mysqli_query($conn, "SELECT * FROM respuestas WHERE correcta = 1 AND id_pregunta = 0");

        $respuesta = mysqli_fetch_assoc($sql);
        
        
        if($idPregunta == 27){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 4;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 3;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 2;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 1;
            }
        }
        if($idPregunta == 41){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 1;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre+2;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 3;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 4;
            }
        }
        if($idPregunta == '29'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 1;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 2;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 3;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 4;
            }
        }
        if($idPregunta == '30'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 1;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 2;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 3;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 4;
            }
        }
        if($idPregunta == '46'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 4;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 3;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 2;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 1;
            }
        }
        if($idPregunta == '47'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 4;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 3;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 2;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 1;
            }
        }
        if($idPregunta == '44'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 4;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 3;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 2;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 1;
            }
        }
        if($idPregunta == '45'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 4;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 3;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 2;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 1;
            }
        }
        if($idPregunta == '43'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 4;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 3;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 2;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 1;
            }
        }
        if($idPregunta == '42'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 4;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 3;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 2;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 1;
            }
        }
        if($idPregunta == '48'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 4;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 3;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 2;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 1;
            }
        }
        if($idPregunta == '49'){
            if($_POST['optradio_'.$idPregunta]== 70){
                $siempre + 4;
            }else if($_POST['optradio_'.$idPregunta]== 71){
                $c_siempre + 3;
            }
            else if($_POST['optradio_'.$idPregunta]== 72){
               $c_nunca + 2;
            }else if($_POST['optradio_'.$idPregunta]== 73){
                $nunca + 1;
            }
        }
    } 
    
    $r= $siempre + $c_siempre + $c_nunca + $nunca;
    $estado="";
    if($r >=37 && $r<=48 ){
        $estado = "MUY APTO";
    }
    else if( $r >=25 && $r<=36){
        $estado = "APTO";
    }
    else if( $r>=13 & $r<=24){
        $estado = "POCO APTO";
    }
    else if($r == 12 ){
        $estado = "NO APTO";
    }
    
    $datos = mysqli_query($conn, "SELECT * FROM postulados WHERE curp= '".$_SESSION['curp']."'");
    
    $ultimo = mysqli_fetch_assoc($datos);
    
   
    
        $inser = mysqli_query($conn, "UPDATE resul_test SET res_test4= 'APTO' WHERE id_postulados= '".$ultimo['id']."'");
    
   echo "<script type='text/javascript'>
	      			 window.location.href='test5.php';
	      		</script>";  
?>

