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
                echo '"usuario":{';
                $id_usuario = $publicacion['id_usuario'];
                $usuario = mysqli_fetch_assoc(mysqli_query($conn, "SELECT e.nombre, e.apellido, u.img FROM usuarios AS u INNER JOIN empleados AS e ON u.id_empleado = e.id WHERE u.id = {$id_usuario}"));
                echo '"nombre":"'.$usuario['nombre'].'", ';
                echo '"apellido":"'.$usuario['apellido'].'", ';
                echo '"img":"'.$usuario['img'].'"';
                echo "}, ";
                $id_publicacion = $publicacion['id'];
                $sql = "SELECT * FROM articulos WHERE id_publicacion = {$id_publicacion}";
                $articuloQuery = mysqli_query($conn, $sql);
                echo '"articulos":[';
                $firstA = true;
                while($articulo = mysqli_fetch_assoc($articuloQuery)){
                    if(!$firstA){
                        echo ",";
                    }
                    $firstA = false;
                    echo '{';
                    echo '"id":"'.$articulo['id'].'", ';
                    echo '"img":"'.$articulo['img'].'", ';
                    $contenido = str_replace('"', '\"', $articulo['contenido']);
                    echo '"contenido":"'.$contenido.'"';
                    echo '}';
                }
                echo ']';
                echo '}';

            }
            echo ']';
            break;
        
        default:
            # code...
            break;
    }
}