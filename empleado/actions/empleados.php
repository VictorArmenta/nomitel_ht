<?php
session_start();
include("./../../connection/conn_db.php");
if(isset($_POST['action'])){
    switch ($_POST['action']) {
        case 'getSessionEmpleado':
                echo json_encode($_SESSION["empleado"]);
            break;
        
        case "updatePerfil":

            $id = $_SESSION["empleado"]["id"];
            $telefono = $_POST["telefono"];
            $estado_civil = $_POST["estado_civil"];
            $nacionalidad = $_POST["nacionalidad"];
            $codigo_postal = $_POST["codigo_postal"];
            $colonia = $_POST["colonia"];
            $calle = $_POST["calle"];
            $no_ext = $_POST["no_ext"];
            $no_int = $_POST["no_int"];
            
            $sql = "UPDATE empleados SET telefono='{$telefono}', estado_civil='{$estado_civil}', nacionalidad='{$nacionalidad}', codigo_postal='{$codigo_postal}', colonia='{$colonia}', calle='{$calle}', no_ext='{$no_ext}', no_int='{$no_int}' WHERE id={$id}";
            $query = mysqli_query($conn, $sql);

            if($query){
                echo "true";
                $sql = "SELECT * FROM empleados WHERE id={$id}";
                $_SESSION["empleado"] = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            }else{
                echo "false";
            }

            break;
            
    }
}