<?php include 'config/conexion.php' ?>
<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Modificar Formulario</title>
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <?php
    $sql = "SELECT * FROM mascotas WHERE id_mascota ='$_GET[mod]'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>
  <form id="form1" name="form1" method="post" action="modificar_logica.php">
    <label for="textfield">Nombre: <input type="text" name="nombre" id="nombre" value="<?php print $row['nombre']; ?>" /></label>
    <label for="textfield2">Tipo de mascota: <input type="text" name="tipo_de_mascota" id="tipo_de_mascota" value="<?php print $row['tipo_de_mascota']; ?>" /></label>
    <label for="textfield2">Raza: <input type="text" name="raza" id="raza" value="<?php print $row['raza']; ?>" /></label>
    <legend>Sexo:</legend>
    <?php if ($row['sexo'] == 'F') { ?>
    <input type="radio" name="sexo" value="F" id="F" checked="checked" />
    <?php } else { ?> <input type="radio" name="sexo" value="F" id="F" /><?php } ?>
    <label for="F">Femenino</label>
    <?php if ($row['sexo'] == 'M') { ?>
    <input type="radio" name="sexo" value="M" id="M" checked="checked" />
    <?php } else { ?> <input type="radio" name="sexo" value="M" id="M" /><?php } ?>
    <label for="M">Masculino</label>
    <label for="textfield2">Nombre del cliente: <input type="text" name="nombre_del_cliente" id="nombre_del_cliente" value="<?php print $row['nombre_del_cliente']; ?>" /></label>
    <label for="textfield2">Fecha de nacimiento: <input type="text" name="fecha_de_nacimiento" id="fecha_de_nacimiento" value="<?php print $row['fecha_de_nacimiento']; ?>" /></label>
    <input type="hidden" name="oculto" id="oculto" value="<?php print $row['id_mascota']; ?>" />
    <input type="submit" name="submit" id="submit" value="Enviar">
  </form>
</body>
</html>