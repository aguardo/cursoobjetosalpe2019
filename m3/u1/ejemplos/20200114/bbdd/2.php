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
        
        
        $consulta = "SHOW TABLES";
        
        /*
        $tabla = "actor";
        $campos = "*";
        
        */
        
        
        
        
        $conexion = @new mysqli($equipo, $nombre_usuario, $contrasena,$basedatos);
                    if($conexion->connect_error){
                        die("¡No se ha podido establecer la conexión con el servidor! - " . $conexion->connect_error);
                    }
                           
                    
        $conexion->select_db($basedatos)
                    or die('No pudo seleccionarse la BD.');
        
        
        
        $conexion->query("SET NAMES 'utf8'");
        
       
        
        $sconsulta = $conexion->query($consulta)
                    or die('No puedo realizar la consulta.' . $conexion->error);
        
       
            while ($fila = $sconsulta->fetch_assoc()) {
                echo '<ul>';
                foreach ($fila as $dato) {
                    echo '<li><a href="listado.php?tabla='.$dato.'">';
                    echo $dato;
                    echo '</a></li>';
                }
                echo '</ul>';
            }
            echo '</table>';
            $sconsulta->data_seek(0);
       

                    
       
        
        
        ?>
    </body>
</html>
