<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$mail = $_REQUEST['mail'];
$carrera = $_REQUEST['idCarrera'];
mysqli_query($conexion,"insert into alumnos(nombre,apellido,mail,idCarrera) values 
                       ('".$nombre."','".$apellido."','".$mail."',".$carrera.");")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "El alumno fue dado de alta. ";
?>
<form action="alta.html" method="post">
Volver a menu Principal:
<input type="submit" value="Menu Principalncipal">
</body>
</html>

