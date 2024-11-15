<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insertar</title>
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <?php include 'menu.php' ?>
  <form method="post" action="./insertar_logica.php">
    <label id="nombre">Nombre: <input id="nombre" name="nombre" type="text" required /></label>
    <label id="tipo_de_mascota">tipo de mascotas: <input id="tipo_de_mascota" name="tipo_de_mascota" type="text" required /></label>
    <label id="raza">Raza: <input id="raza" name="raza" type="text" required ></label>
    <legend>Sexo:</legend>
    <input type="radio" name="sexo" id="F" value="F" required>
    <label for="F">Femenino</label>
    <input type="radio" name="sexo" id="M" value="M">
    <label for="M">Masculino</label>
    <label id="nombre_del_cliente">Nombre del cliente: <input id="nombre_del_cliente" name="nombre_del_cliente" type="text" required /></label>
    <label id="fecha_de_nacimiento">Fecha de nacimiento: <input id="fecha_de_nacimiento" name="fecha_de_nacimiento" type="date" required /></label>
    <input id="registrar" name="Registrar" type="submit" />
    <input id="limpiar" name="Limpiar" type="reset" />
  </form>
</body>
</html>