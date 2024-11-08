<?php include 'config/conexion.php' ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<table>
    <tr>
      <th>ID de la mascota</th>
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
        <td><?= $row['tipo_mascota']; ?></td>
        <td><?= $row['raza']; ?></td>
        <td><?= $row['sexo']; ?></td>
        <td><?= $row['nombre_del_cliente']; ?></td>
        <td><?= $row['fecha_de_nacimiento']; ?></td>
      </tr> <?php } ?>
  </table>
</body>
</html>