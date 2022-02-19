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
        case 'getSolicitudById':
                $id = $_POST["id"];
                $sql = "SELECT * FROM solicitudes WHERE id={$id}";
                $query = mysqli_query($conn, $sql);
                $evento = mysqli_fetch_assoc($query);
                echo json_encode($evento);
            break;
        
        case "addSolicitud":
            $motivo = $_POST["motivo"];
            $desde = $_POST["desde"];
            $hasta = $_POST["hasta"];
            $comentario = $_POST["comentario"];  
            $id_empleado = $_SESSION["empleado"]["id"];
            $estado = "Pendiente";

            if($motivo == "Justificar Falta"){
                $formato = basename($_FILES["formato"]["name"]);
            }else{
                $formato = "0";
            }

            $sql = "INSERT INTO solicitudes (motivo, fecha_inicio, fecha_final, comentario, formato, id_empleado, estatus) VALUES ('{$motivo}', '{$desde}', '{$hasta}', '{$comentario}', '{$formato}', {$id_empleado}, '{$estado}')";
            $query = mysqli_query($conn, $sql);

            if($motivo == "Justificar Falta"){
                $id = mysqli_insert_id($conn);
                $target_dir = "../../formatos/{$id_empleado}_{$id}_";
                $target_file = $target_dir . $formato;
                move_uploaded_file($_FILES["formato"]["tmp_name"], $target_file);
            }

            if($query){
                echo "true";
            }else{
                echo "false";
            }
            break;
    }
}