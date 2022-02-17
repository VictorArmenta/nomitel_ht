<?php
session_start();
include("./../../connection/conn_db.php");
if(isset($_POST['action'])){
    switch ($_POST['action']) {
        case 'getEventos':
                $sql = "SELECT e.id, e.fecha, e.fecha_evento, e.nombre AS titulo, e.des, u.img, ep.nombres, ep.apellido_paterno, ep.apellido_materno FROM eventos AS e INNER JOIN usuarios AS u ON u.id = e.id_usuario INNER JOIN empleados AS ep ON u.id_empleado = ep.id;";
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
        
        default:
            # code...
            break;
    }
}