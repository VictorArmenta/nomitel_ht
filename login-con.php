<?php
session_start();
include('connection/conn_db.php');
date_default_timezone_set('America/Hermosillo');

$username = $_POST['user'];
$password = $_POST['pass'];

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='{$username}' AND pass='{$password}'");

if($result = mysqli_fetch_assoc($query)){
    $_SESSION['usuario'] = $result;
    $id = $result['id_empleado'];
    $query = mysqli_query($conn, "SELECT * FROM empleados  WHERE id={$id}");
    if($result = mysqli_fetch_assoc($query)){
        $_SESSION['empleado']  = $result;
        $id_usuario = $_SESSION['usuario']['id'];
        $hoy = date('d-m-Y H:i:s');
        mysqli_query($conn, "UPDATE usuarios SET fecha_login = '{$hoy}', estatus='ACTIVO' WHERE id={$id_usuario}");
        echo '{"nombre":"'.$_SESSION['empleado']['nombre'].'", "tipo":"'.$_SESSION['usuario']['tipo'].'"}';
    }else{
        echo "error";
    }
}else{
    echo "error";
}

?>