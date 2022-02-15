<?php
    session_start();
  include('connection/conn_db.php');
 
    $username = $_POST['user'];
    $password = $_POST['pass'];
 
    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='".$username."' AND pass='".$password."';");
    
    if($result = mysqli_fetch_assoc($query)){
        $_SESSION['id'] = $result['id'];
        
        $_SESSION['nombre'] = $result['nombre'];
        $_SESSION['tipo'] = $result['tipo'];
        
        $hoy = date("Y-m-d H:i:s");
        mysqli_query($conn, "UPDATE usuarios SET fecha_login = '$hoy', estatus='ACTIVO' WHERE id=".$result['id']);
        echo $_SESSION['nombre'];
    }else{
        
        echo "error";
    }

?>