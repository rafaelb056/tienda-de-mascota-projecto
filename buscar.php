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
    <?php include './menu.php'?>
    <form method="POST" name="form1">
    <div class="buscador">
      <label for="buscar">ID: </label>
      <input type="text" name="buscar" id="buscar" />
      <input type="submit" value="Buscar" />
    </div>
  </form>
  <?php if (isset($_POST['buscar'])) { ?>
  <table>
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
      $sql = "SELECT * FROM mascotas WHERE id_mascota ='$_POST[buscar]'";
      $result = mysqli_query($link, $sql); //ejecuto la consulta
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?= $row['id_mascota']; ?></td>
        <td><?= $row['nombre']; ?></td>
        <td><?= $row['tipo_de_mascota']; ?></td>
        <td><?= $row['raza']; ?></td>
        <td><?= $row['sexo']; ?></td>
        <td><?= $row['nombre_del_cliente']; ?></td>
        <td><?= $row['fecha_de_nacimiento']; ?></td>
      </tr> <?php } ?>
  </table><?php } ?>
</body>
</html>