<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inicio</title>
</head>
<body>
    <h1>Usuarios Registrados</h1>
    <?php
        include("conexion.php");
        $link = conectar();
        $q = "SELECT * FROM `usuario` ORDER BY cod ASC";
        $rs = $link->query($q);
        echo "codgio    Usuario  Contraseña";
        
        while ($row = mysqli_fetch_array($rs)) {
                echo '<p>'.$row['cod'].'|'.$row['usuario'].'|'.$row['contrasena_en'].'</p>';
        }
    ?>
<br>
<br>
<br>
    <div>
    
    <a href="index.php">Inicio</a>

        
    </div>
</body>
</html>