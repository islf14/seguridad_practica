<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="func_enc.php" method="POST">
        <input type="text" name="entrada">
        <br><br>
        <input type="submit" name="button1s"  value="Encriptar" onclick="pulsa()"/>
    </form>
<?php
    $dato = $_POST["entrada"];
    echo "Codificado: ";
    $cod = base64_encode($dato);
    echo $cod;
    echo " Decodificado: ";
    $dec = base64_decode($cod);
    echo $dec;
?>

</body>
</html>