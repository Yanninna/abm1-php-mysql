<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");
$registros=mysqli_query($conexion, "select * from alumnos
                        where mail='".$_REQUEST['mailbuscar']."';") or
  die("Problemas en el select:".mysqli_error($conexion));
if($reg=mysqli_fetch_array($registros))
{
mysqli_query($conexion, "delete from alumnos
                        where mail='".$_REQUEST['mailbuscar']."';") or
  die("Problemas en el select:".mysqli_error($conexion));
   echo "Se elimino el alumno.";

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