<?php
$id = $_GET["id"];
$db = mysqli_connect('localhost', 'root', '', 'sitio_db');
$resultado = mysqli_query($db, "SELECT * FROM chismes WHERE id=$id");
$fila = mysqli_fetch_array($resultado);
?>
<html>
<head>
    <title>Modificar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Modificar Chisme</h1>

    <form method="POST" action="gmodificar.php">
        <input type="hidden" name="id_original" value="<?php echo $fila['id']; ?>"/>

        <div class="mb-3">
            <label class="form-label">id</label>
            <input type="text" class="form-control" name="id" value="<?php echo $fila['id']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">fecha</label>
            <input type="text" class="form-control" name="fecha" value="<?php echo $fila['fecha']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">titular</label>
            <input type="text" class="form-control" name="titular" value="<?php echo $fila['titular']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="<?php echo $fila['descripcion']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Aceptar</button>
        <a href="../table1.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>