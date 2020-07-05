<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");
$registros=mysqli_query($conexion, "select * from alumnos
                        where mail='".$_REQUEST['mail']."';") or
  die("Problemas en el select:".mysqli_error($conexion));
if($reg=mysqli_fetch_array($registros))
{
$registros=mysqli_query($conexion,"UPDATE alumnos SET nombre='".$_REQUEST['nombre']."', apellido='".$_REQUEST['apellido']."', mail='".$_REQUEST['mail']."' , idCarrera =".$_REQUEST['idCarrera']." WHERE id = ".$_REQUEST['id'].";") or
  die("Problemas en el select:".mysqli_error($conexion));

	echo "El alumno fue modificado";

 }
 
else
{
  echo "No existe un alumno ese mail.";
}
mysqli_close($conexion); 
?>
<form action="alta.html" method="post">
Volver a menu Principal:
<input type="submit" value="Menu Principalncipal">
</body>
</html>