<!DOCTYPE html>
<html lang="es">
<head>
    <title>Variables predefinidas</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-
    scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
    <link rel="stylesheet" href="css/discusion1.css" />
</head>
<body>
<?php
    printf("<div id=\"contenedor\">\n");
    printf("<header>\n");
    printf("\t<h1>Variables predefinidas - Matrices superglobales</h1>\n");
    printf("</header>\n");
    printf("<article>\n");
    printf("<h3>Dirección completa del script</h3>\n");
    printf("<ul>\n<li>El nombre del servidor junto a la ruta completa del script que se está ejecutando es:\n".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']);
    printf("</article>\n");
?>
</body>
</html>