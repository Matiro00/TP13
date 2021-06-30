<?php
    $usuarios=[
        "Nombre"=>"Ignacio",
        "Apellido"=>"Mendoza",
        "Edad"=>"24",
        "Hobbie"=>"Fulbo",
        "Editor de codigo preferido"=>"Vs studio",
        "Sistema operativo que utiliza"=>"Windows 7",

    ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php foreach ($usuarios as $clave=>$usuario){
        echo $clave."  = ".$usuario. "<br>";
        }?>
    
</body>
</html>