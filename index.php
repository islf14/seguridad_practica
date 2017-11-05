<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base64 Encriptacion</title>
    <style>.error{color:#ff0000;}</style>
</head>
<body>
    <?php
        include("guardar.php");
        $dato=$cod=$dec=$ent=$nombre="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["entrada"])){
               $ent="* Campo necesario";
            }else{
                
                //$dato = $_POST["entrada"];
                $dato = test_input($_POST["entrada"]);
                $cod = base64_encode($dato);
                $dec = base64_decode($cod);
                $nombre = test_input($_POST["nombre"]);
                $con= conectar();
                $con->query("INSERT INTO `usuario` (`cod`, `usuario`, `contrasena_en`) VALUES (NULL, '$nombre', '$cod');");
            }   
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    
    <h1>Encriptación Base64</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="nombre">Usuario:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" required><br><br>
        <label for="entrada">Contraseña: </label>
        <input type="password" name="entrada" id="entrada" value="<?php echo $dato;?>">
        <span class="error"><?php echo $ent?></span>
        <br><br>
        <input type="submit" name="boton"  value="Enviar">
    </form>
    <br><br>
    <label for="">Datos ingresado:</label><br><br>
    <label for="nom_salida">Usuario</label>
    <input type="text" id="nom_salida" value="<?php echo $nombre;?>" readonly><br><br>
    <label for="cod">Contraseña encriptada:</label>
    <input type="text" id="cod" value="<?php echo $cod;?>" readonly><br><br>
    <label for="dec">Contraseña desencriptada:</label>
    <input type="text" id="dec" value="<?php echo $dec;?>" readonly>
    <br>

</body>
</html>