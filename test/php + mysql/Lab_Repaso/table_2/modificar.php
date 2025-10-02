<?php
$id = $_GET["id"];
$db = mysqli_connect('localhost', 'root', '', 'sitio_db');
$resultado = mysqli_query($db, "SELECT * FROM autentificada WHERE id=$id");
$fila = mysqli_fetch_array($resultado);
?>
<html>
<head>
    <title>Modificar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Modificar Persona</h1>

    <form method="POST" action="gmodificar.php">
        <input type="hidden" name="id_original" value="<?php echo $fila['id']; ?>"/>

        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo $fila['id']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" value="<?php echo $fila['usuario']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Clave</label>
            <input type="text" class="form-control" name="clave" value="<?php echo $fila['clave']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Aceptar</button>
        <a href="../table1.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>