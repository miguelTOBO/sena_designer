<?php
include('../conexionU.php');

$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$subpassword=$_POST['subpassword'];

$countemail="SELECT * FROM `usuario` WHERE correo='".$email."'";
$result=$varConexion->query($countemail);

while($rowv=$result->fetch_array(MYSQLI_NUM)){
    $e=array();
    if($email === $rowv[3]){
        echo json_encode(2);
        break;
    }
}

if(!$rowv){
    $create="INSERT INTO usuario (nombre,apellido,correo,contraseña) VALUES ('".$name."','".$lastname."','".$email."','".$subpassword."')";
    $register=$varConexion->query($create);
    if($register){
        echo json_encode(1);
        header("../login.php");
    }
}

?>