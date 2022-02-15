<?php
session_start();
include("./../../connection/conn_db.php");
if(isset($_POST['action'])){
    switch ($_POST['action']) {
        case 'getSolicitudes':
                $sql = "SELECT * FROM solicitudes";
                $query = mysqli_query($conn, $sql);
                $first = true;
                echo "[";
                while($evento = mysqli_fetch_assoc($query)){
                    if(!$first){
                        echo ", ";
                    }
                    $first = false;
                    echo json_encode($evento);
                }
                echo "]";
            break;
        
        case "addSolicitud":
            $motivo = $_POST["motivo"];
            $desde = $_POST["desde"];
            $hasta = $_POST["hasta"];
            $comentario = $_POST["comentario"];
            if($motivo == "Justificar Falta"){

            }else{
                $formato = "0";
            }
            $id_empleado = $_SESSION["empleado"]["id"];
            $estado = "Pendiente";
            $sql = "INSERT INTO solicitudes (motivo, desde, hasta, comentario, formato, id_empleado, estado) VALUES ('{$motivo}', '{$desde}', '{$hasta}', '{$comentario}', '{$formato}', {$id_empleado}, '{$estado}')";
            $query = mysqli_query($conn, $sql);
            if($query){
                echo "true";
            }else{
                echo "false";
            }
            break;
    }
}