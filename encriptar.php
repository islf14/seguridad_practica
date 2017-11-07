<?php

    function pulsa(){
        echo "pulsa";
    }
    function pulsa2(){
        echo "pulsa2";
    }
   
    include("conexion.php");

    $dato = $_POST["entrada"];
    //echo  $dato;
    ///$str = 'This is an encoded string';
    echo "Codificado: ";
    $cod = base64_encode($dato);
    echo $cod;
    echo "\n";
    echo "    Decodificado: ";
    $dec = base64_decode($cod);
    echo $dec;

    $con= conectar();
	//$sql2=$con->query("SELECT * FROM administrador WHERE usuario='$username'");

    //$con->query("INSERT INTO alumno VALUES('$tarjeta','$codigo','$nombres','$apellidos','$tipobeca','$pagos','$direccion','$telefono',
    //'$facultad','$escuela')");
    $con->query("INSERT INTO `codificado`.`dato` (`codificado`) VALUES ('$cod');");

    if (isset($_POST['boton1'])) 
    { 
       echo "button 1 has been pressed"; 
    } 
    if (isset($_POST['boton11'])) 
    { 
       echo "button 2 has been pressed"; 
    } 
?>