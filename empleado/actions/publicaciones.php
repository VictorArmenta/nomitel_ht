<?php
session_start();
include("./../../connection/conn_db.php");
if(isset($_POST['action'])){
    switch ($_POST['action']) {
        case 'getPubArt':
            $sql = "SELECT * FROM publicaciones";
            $publicacioensQuery = mysqli_query($conn, $sql);
            $first = true;
            echo "[";
            while($publicacion = mysqli_fetch_assoc($publicacioensQuery)){
                if(!$first){
                    echo ",";
                }
                echo "{";
                $first = false;
                echo '"id":"'.$publicacion['id'].'", ';
                echo '"fecha":"'.$publicacion['fecha'].'", ';
                echo '"nombre":"'.$publicacion['nombre'].'", ';
                echo '"des":"'.$publicacion['des'].'", ';
                echo '"img":"'.$publicacion['img'].'", ';
                echo '"usuario":{';
                    $id_usuario = $publicacion['id_usuario'];
                    $usuario = mysqli_fetch_assoc(mysqli_query($conn, "SELECT e.nombres, e.apellido_paterno, e.apellido_materno, u.img FROM usuarios AS u INNER JOIN empleados AS e ON u.id_empleado = e.id WHERE u.id = {$id_usuario}"));
                    echo '"nombres":"'.$usuario['nombres'].'", ';
                    echo '"apellido_paterno":"'.$usuario['apellido_paterno'].'", ';
                    echo '"apellido_materno":"'.$usuario['apellido_materno'].'", ';
                    echo '"img":"'.$usuario['img'].'"';
                    echo "}, ";
                echo '"contenido":"'.$publicacion["contenido"].'"';
                echo '}';

            }
            echo ']';
            break;
        
        default:
            # code...
            break;
    }
}