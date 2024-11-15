<?php

  include './config/conexion.php';
  $sql="INSERT INTO mascotas (nombre,	tipo_de_mascota,	raza,	sexo,	nombre_del_cliente,	fecha_de_nacimiento) VALUES ('$_POST[nombre]','$_POST[tipo_de_mascota]', '$_POST[raza]','$_POST[sexo]','$_POST[nombre_del_cliente]','$_POST[fecha_de_nacimiento]')";
  $result = mysqli_query($link, $sql); //ejecuto la consulta
  if (!mysqli_error($link)) {
?>
<script>
  alert("Se ingreso con total normalidad");
</script>
<?php
  }else{
?>
<script>
  alert ("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=insertar.php">