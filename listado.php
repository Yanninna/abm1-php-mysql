<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
$conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select id, nombre, apellido, mail, idCarrera
                        from alumnos") or
                          die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  echo "id:".$reg['id']."<br>";
  echo "Nombre:".$reg['nombre']."<br>";
  echo "Apellido:".$reg['apellido']."<br>";
  echo "Mail:".$reg['mail']."<br>";
  echo "Carrera:";
  switch ($reg['idCarrera']) {
    case 1:echo "Sistemas";
           break;
    case 2:echo "Multimedia";
           break;
    case 3:echo "Instalacion";
           break;
  }
  echo "<br>";
  echo "<hr>";
}

mysqli_close($conexion);
?>
<form action="alta.html" method="post">
Volver a menu Principal:
<input type="submit" value="Menu Principalncipal">
	
</body>
</html>