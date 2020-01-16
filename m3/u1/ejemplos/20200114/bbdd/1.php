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
        $tabla = "actor";
        $campos = "*";
        $consulta = "SELECT $campos FROM $tabla";
        
        
        
        $conexion = @new mysqli($equipo, $nombre_usuario, $contrasena,$basedatos);
                    if($conexion->connect_error){
                        die("¡No se ha podido establecer la conexión con el servidor! - " . $conexion->connect_error);
                    }
        var_dump($conexion);
                    
                    
        $conexion->select_db($basedatos)
                    or die('No pudo seleccionarse la BD.');
        
        var_dump($conexion);
        
        $conexion->query("SET NAMES 'utf8'");
        
        var_dump($conexion);
        
        
        $sconsulta = $conexion->query($consulta)
                    or die('No puedo realizar la consulta.' . $conexion->error);
        
        var_dump($sconsulta);
        
        $resultados = $sconsulta->fetch_all();
        
        var_dump($resultados);
        var_dump($sconsulta);
         
         
        $sconsulta->data_seek(0);
        
        var_dump($sconsulta);
        $resultados2 = $sconsulta->fetch_all(MYSQLI_ASSOC);
                    
        var_dump($resultados2);
        
        
        ?>
    </body>
</html>
