<?php
include('../conexionU.php');

$logemail=$_POST['logemail'];
$logpassword=$_POST['logpassword'];

$usuarios = mysqli_query($varConexion, "SELECT * FROM usuario WHERE correo = '".$logemail."'");
$contraseña = mysqli_query($varConexion, "SELECT * FROM usuario WHERE contraseña = '".$logpassword."'");
$validar = mysqli_query($varConexion, "SELECT * FROM usuario WHERE correo = '".$logemail."' and contraseña = '".$logpassword."'");

function validar($logemail,$logpassword,$validar){
    while($rowv=$validar->fetch_array(MYSQLI_NUM)){
        $e = array();
        if($logemail == $rowv[3] && $logpassword == $rowv[4]){
            echo json_encode(5);
            session_start();
            $id=$rowv[0];
            $nombre=$rowv[1];
            $apellido=$rowv[2];
            $_SESSION['id'] = $id;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellido'] = $apellido;
            header("../module.php");
            break;
        }
    }
}

if($usuarios){
    while($rowu=$usuarios->fetch_array(MYSQLI_NUM)){
        $e = array();
        if($logemail == $rowu[3] && $logpassword!=$rowu[4]){
            echo json_encode(0);
            break;
        } else {
            validar($logemail,$logpassword,$validar);
        }
    }
}

else if($contraseña){
    while($rowp=$contraseña->fetch_array(MYSQLI_NUM)){
        $e = array();
        if($logemail != $rowp[3] && $logpassword==$rowp[4]){
            echo json_encode(1);
            break;
        } else {
            validar($logemail,$logpassword,$validar);
        }
    }
}

if(($logpassword == '' || $logpassword == null) && ($logemail == '' || $logemail == null)){
    echo json_encode(2);
}