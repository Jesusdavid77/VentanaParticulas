<?php
  $conexion = mysqli_connect("localhost","root", "" )or die ("No se ha podido conectar al servidor de Base de datos");
  $db = mysqli_select_db( $conexion, "resident_evil" ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );


  $Contraseña=$_POST["Contraseña"];


  $consulta = "INSERT INTO (contraseñas) VALUES ('aaa')";
  $resultado = mysqli_query( $conexion, $consulta );



  if (mysql_query($conexion,$consulta)) {
    echo "Insercion correcta de datos ";
  }else {
    echo "Error No se inserto el dato ";
  }
  mysqli_close($conexions);

  mysqli_close( $conexion );


echo $Contraseña;
 ?>
