<?php
include("cn.php");
$usuarios = "SELECT * FROM usuarios";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximus-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Imprimir una Tabla BD</title>
</head>

<body>

    <div class="container-add">
        <h2 class="container__title">Registrar Usuario</h2>
        <div class="container__form">
            <label for="" class="container__label">Nombre</label>
            <input type="text" class="container__input">

            <label for="" class="container__label">Apellido</label>
            <input type="text" class="container__input">
            
            <label for="" class="container__label">Area</label>
            <input type="text" class="container__input">
            
            <label for="" class="container__label">Telefono</label>
            <input type="number" class="container__input">
            
            <label for="" class="container__label">Email</label>
            <input type="text" class="container__input">
            
            <input class="container__submit" type="submit" value="Registrar"></div>
    </div>


    <div class="container-table">
        <div class="table__title">Organigrama</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Area</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Email</div>
        <?php $resultado = mysqli_query($conexion, $usuarios);
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="table__item"><?php echo $row["nombre"]; ?></div>
            <div class="table__item"><?php echo $row["apellido"]; ?></div>
            <div class="table__item"><?php echo $row["area"]; ?></div>
            <div class="table__item"><?php echo $row["telefono"]; ?></div>
            <div class="table__item"><?php echo $row["email"]; ?></div>
            <?php } mysqli_free_result($resultado); ?>
    </div>

</body>

</html>