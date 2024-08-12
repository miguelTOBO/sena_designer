<?php
include('conexion.php');
date_default_timezone_set('America/Bogota');
//almacenar imagen 
//revisar si se encuentra el archivo seleccionado en el form

$check = getimagesize($_FILES["image"]["tmp_name"]); //nombre temporal
//var_dump($check);
if($check!==false){
    $image = $_FILES["image"]["tmp_name"];
    //var_dump($image);
    $imageContent = addslashes(file_get_contents($image));
    //insertar imagen

    if($varConexion->connect_error){
        echo "error conexion";
    }
    else{
        $timenow = date("Y-m-d H:i:s");
        $sql = "INSERT INTO images (imagen, created) values('".$imageContent."', '".$timenow."')";
        $result = $varConexion->query($sql);
        if($result){
            echo "La imagen se guardo en la base de datos";
        }else{
            echo "Problemas con el almacenamiento de los datos";
        }
    }
}


?>