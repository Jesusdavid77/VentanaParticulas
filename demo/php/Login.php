<?php
//:~coneccion
  $conexion = mysqli_connect("localhost","root", "" );
//:~Revisa la coneccion y se une a la base de datos resident_evil
  $db = mysqli_select_db( $conexion, "resident_evil" ) ;
//:~Varialbe de la Contraseña
  $Contraseña=$_POST["Contraseña"];
//:~Mete la variable Contraseña en la columna contraseña
  $consulta = "INSERT INTO contraseñas VALUES ('$Contraseña')";
//:~No se que hace pero es importante tu solo ponlo
  $resultado = mysqli_query( $conexion, $consulta );
//:~Cierra la coneccion
  mysqli_close($conexion);
//:~Muestra la contraseña en pantalla
  echo $Contraseña;
 ?>
