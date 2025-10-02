<?php
// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST["id"];
    $fecha = $_POST["fecha"];
    $titular = $_POST["titular"];
    $descripcion = $_POST["descripcion"];

    $db = mysqli_connect('localhost', 'root', '', 'sitio_db');
    $sql = "INSERT INTO chismes (fecha, titular,descripcion) VALUES ('$fecha', '$titular','$descripcion')";
    mysqli_query($db, $sql);
    header("Location: ../table1.php");
    exit();
}
?>
<html>
<head>
    <title>Crear Nueva Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Crear Nueva chisme</h1>

    <form method="POST" action="">

        <!--div class="mb-3">
            <label class="form-label">id</label>
            <input type="number" class="form-control" name="id" required>
        </div-->

        <div class="mb-3">
            <label class="form-label">fecha</label>
            <input type="text" class="form-control" name="fecha" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Titular</label>
            <input type="text" class="form-control" name="titular" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="../table1.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>