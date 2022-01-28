<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
    <title>Dólares a euros</title>
</head>
<body>
    
</body>
</html>

<?php

if(isset($_POST['submit']) && $_POST['submit'] == "Enviar"){
    echo "\t<tr class=\"odd\">\n";
    echo "\t\t<td>\nEuros\n</td>\n";
    extract($_POST);
    $dolares = !empty($dolares) ? $dolares : "<a href=\"discusion_4.html\"> No ingreso sus dolares :(";
    $euros = $dolares * 0.90;
    echo "\t\t<td>\n" . $euros . "\n</td>\n";
    echo "\t</tr>\n";
    echo "\t<tr>\n";
// } else {
//     echo "\t<tr class=\"odd\">\n";
//     echo "\t\t<td>No se han ingresado desde el formulario.</td>";
//     echo "\t</tr>\n";
}


