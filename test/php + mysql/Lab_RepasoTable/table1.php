<html>
<head>
    <title>Sistema de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Chismes</h1>
        <a href="table_1/crear.php" class="btn btn-info">Crear Nueva Chisme</a>
    </div>

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'sitio_db');
    $resultado = mysqli_query($db, 'SELECT * FROM chismes');
    ?>

    <table class="table table-striped">
        <tr class="table-dark">
            <th>Id</th>
            <th>Fecha</th>
            <th>Titular</th>
            <th>descripcion</th>
            <th>ABC</th>
        </tr>
        <?php while($fila = mysqli_fetch_array($resultado)): ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['fecha']; ?></td>
                <td><?php echo $fila['titular']; ?></td>
                <td><?php echo $fila['descripcion']; ?></td>
                
                <td>
                    <a href='table_1/modificar.php?id=<?php echo $fila['id']; ?>' class='btn btn-sm btn-primary'>Modificar</a>
                    <a href='table_1/eliminar.php?id=<?php echo $fila['id']; ?>' class='btn btn-sm btn-danger'
                       onclick='return confirm("¿Está seguro de eliminar?")'>Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br>

</div>
</body>
</html>