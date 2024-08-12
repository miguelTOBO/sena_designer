<?php
include("conexion.php");
date_default_timezone_set('America/Bogota');

$nombreArchivo = $_POST['nombre'];
$formatoArchivo = $_POST['formato'];
//se valida la existencia del archivo de sonido y que no traiga errores
if(isset($_FILES['sonido']) && ($_FILES['sonido']['error']==0)) {
    //alteracion del sonido respecto a la ubicacion
    //crear ubicacion de la carpeta 
    $direccion = "./sonidos/";
    $nombreUnico = uniqid()."_".$_FILES['sonido']['name']; 
    $rutaArchivo = $direccion.$nombreUnico;
    
    //movimiento del archivo a la carpeta sonidos
    if(move_uploaded_file($_FILES['sonido']['tmp_name'], $rutaArchivo)){
        //conectar con la base de datos
    
        if($varConexion->connect_error){
            echo "Error con la conexion a la BD";
        }
        else{
            $archivoSonido = addslashes(file_get_contents($rutaArchivo));
            $timenow = date("Y-m-d H:i:s");
            $sql = "INSERT INTO sonidos (nombre,formato,sonido,fecha_subida) VALUES ('".$nombreArchivo."','".$formatoArchivo."','".$archivoSonido."','".$timenow."')";
            $result = $varConexion->query($sql);
        }
        if($result){
            echo "Se paso el archivo de sonido a la BD";
        }else{
            echo "Error en la escritura del archivo";
        }
    }
}
?> 