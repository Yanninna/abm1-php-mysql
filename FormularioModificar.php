<html>
<head>
<title>Problema</title>
</head>
<body> 
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select id, nombre, apellido, mail, idCarrera
                        from alumnos where mail='".$_REQUEST['mail']."';") or
                         die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  echo "<form action='modificar.php' method='post'>";
  echo "Nombre: <input type='text' name='nombre' value='".$reg['nombre']."'><br>";
  echo "Apellido: <input type='text' name='apellido' value='".$reg['apellido']."'><br>";
  echo "Mail:  <input type='text' name='mail' value='".$reg['mail']."'><br>";
  if($reg['idCarrera'] = '1'){
  echo "Carrera: <select name='idCarrera'>
                    <option value='1' selected>Sistemas</option>
                    <option value='2'>Multimedia</option>
                    <option value='3'>Instalacion</option>
                </select>";
              }
  if($reg['idCarrera'] = '2'){
  echo "Carrera: <select name='idCarrera'>
                    <option value='1'>Sistemas</option>
                    <option value='2' selected>Multimedia</option>
                    <option value='3'>Instalacion</option>
                </select>";
              }
  if($reg['idCarrera'] = '3'){
  echo "Carrera: <select name='idCarrera'>
                    <option value='1'>Sistemas</option>
                    <option value='2'>Multimedia</option>
                    <option value='3' selected>Instalacion</option>
                </select>";
              }
  echo "<input type='submit' value='Modificar'>";
  echo "<input type='hidden' name='id' value='".$reg['id']."'>";
  echo "</form>";
}
else
{
  echo "No existe un alumno con ese mail.";
}
mysqli_close($conexion);
?>
<form action="alta.html" method="post">
Volver a menu Principal:
<input type="submit" value="Menu Principalncipal">
</body>
</html>