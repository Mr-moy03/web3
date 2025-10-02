<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST["id"];
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    $db = mysqli_connect('localhost', 'root', '', 'sitio_db');
    $sql = "INSERT INTO autentificada (id, usuario, clave) VALUES ($id, '$usuario', '$clave')";
    mysqli_query($db, $sql);
    header("Location: ../table1.php");
    exit();
}
?>
<html>
<head>
    <title>Crear Nueva Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Crear Nueva Usuario</h1>

    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">id</label>
            <input type="number" class="form-control" name="id" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Clave</label>
            <input type="text" class="form-control" name="clave" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="../table1.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>