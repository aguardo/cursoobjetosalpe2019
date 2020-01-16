<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        
        $equipo = "127.0.0.1";
        $nombre_usuario = "root";
        $contrasena = "";
        $conexion;
        $basedatos = "videoteca";
        $sconsulta;
        
        
        
        $tabla = $_GET["tabla"];
        $campos = "*";
        $consulta = "SELECT $campos FROM $tabla";
        
        
        
        
        $conexion = @new mysqli($equipo, $nombre_usuario, $contrasena,$basedatos);
                    if($conexion->connect_error){
                        die("¡No se ha podido establecer la conexión con el servidor! - " . $conexion->connect_error);
                    }
                           
                    
        $conexion->select_db($basedatos)
                    or die('No pudo seleccionarse la BD.');
        
        
        
        $conexion->query("SET NAMES 'utf8'");
        
       
        
        $sconsulta = $conexion->query($consulta)
                    or die('No puedo realizar la consulta.' . $conexion->error);
        
        
        
        
        
        $titulo = 1;

            echo '<table width="100%" border="1">';
            while ($fila = $sconsulta->fetch_assoc()) {
                if ($titulo) {
                    echo '<tr>';
                    foreach ($fila as $campo => $dato) {
                        echo '<td>';
                        echo $campo;
                        echo '</td>';
                    }
                    echo '</tr>';
                    $titulo=0;
                }
                echo '<tr>';
                foreach ($fila as $dato) {
                    echo '<td>';
                    echo $dato;
                    echo '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
            $sconsulta->data_seek(0);
            
            
            
        
        
        ?>
    </body>
</html>
