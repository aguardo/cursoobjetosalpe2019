<?php
    $texto=file_get_contents("20.html");
    $doc = new DOMDocument();
    $doc->loadHTML($texto);
    $doc->getElementById("salida")->textContent= strtoupper($doc->getElementById("entrada")->textContent);
    $salida=$doc->saveHTML();
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?= $texto ?>
        <?= $salida ?>
    </body>
</html>
