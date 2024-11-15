<?php include 'config/conexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Document</title>
</head>
<body>
<table>
    <?php include './menu.php'?>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Tipo de mascota</th>
      <th>Raza</th>
      <th>Sexo</th>
      <th>Nombre del cliente</th>
      <th>Fecha de nacimiento</th>
    </tr>
    <?php
    $sql = "SELECT * FROM mascotas";
    $result = mysqli_query($link, $sql); //ejecuto la consulta
    while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?= $row['id_mascota']; ?></td>
        <td><?= $row['nombre']; ?></td>
        <td><?= $row['tipo_de_mascota']; ?></td>
        <td><?= $row['raza']; ?></td>
        <td><?= $row['sexo']; ?></td>
        <td><?= $row['nombre_del_cliente']; ?></td>
        <td><?= $row['fecha_de_nacimiento']; ?></td>
        <td><a href="./modificar_formulario.php?mod=<?php print $row['id_mascota']; ?> ">Modificar</a></td>
        <td><a href="./eliminar.php?eli=<?php print $row['id_mascota']; ?> ">Eliminar</a></td>
      </tr>
      <?php } ?>
  </table>
</body>
</html>