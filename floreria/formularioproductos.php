<?php 

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="floreria";


$con =mysqli_connect($db_host, $db_user, $db_password,$db_name);

if(!$con){
    die("Error " . mysqli_connect_error());
}else{
    echo "conectado..";
}


//Usuario
//iformacion a agregar

$nombre = $_POST["nombre"];
$categoria = $_POST["categoria"];
$precio = $_POST["precio"];
$imagen = $_POST["imagen"];


//Consulta en la base de datos

$inser = "INSERT INTO productos (id, nombre, categoria, precio, imagen) VALUES (0,'$nombre','$categoria',$precio,'$imagen')";

    $ir=mysqli_query($con,$inser);

    if($ir){
        echo "se ha registrado con exito";

    }else{

        echo "hay un error";
    }



    mysqli_close($con)
?>
