<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0a1929;
            color: #e0e0e0;
        }
        .card {
            background-color: #132f4c;
            border: 1px solid #1e3a5f;
        }
        .card-header {
            background: linear-gradient(135deg, #0d47a1, #1976d2) !important;
            border-bottom: 1px solid #1e3a5f;
        }
        .form-control {
            background-color: #1e3a5f;
            border: 1px solid #2a4a7a;
            color: #e0e0e0;
        }
        .form-control:focus {
            background-color: #1e3a5f;
            border-color: #1976d2;
            color: #e0e0e0;
            box-shadow: 0 0 0 0.25rem rgba(25, 118, 210, 0.25);
        }
        .form-label {
            color: #bbdefb;
        }
        .btn-primary {
            background: linear-gradient(135deg, #0d47a1, #1976d2);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #1565c0, #1e88e5);
        }
        a {
            color: #bbdefb;
        }
        a:hover {
            color: #90caf9;
        }
        .form-check-label {
            color: #e0e0e0;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<main class="flex-grow-1 d-flex align-items-center justify-content-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-8">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header text-white text-center fs-4">
                        Login
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-4 align-items-center">

                            <!-- Imagen -->
                            <div class="col-12 col-md-6 text-center">
                                <!--img src="./imagenes/usuario.png" class="img-fluid" alt="Usuario" style="max-width:250px;"-->
                                <img src="./imagenes/icon.png" class="img-fluid" alt="Usuario" style="max-width:250px;border-radius:30px">
                            </div>

                            <!-- Formulario -->
                            <div class="col-12 col-md-6">
                                <form action="validarlogin.php" method="POST">
                                    <!-- User -->
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Usuario</label>
                                        <input type="text" id="text" class="form-control" placeholder="Ingrese su usuario" name="Usuario">
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" class="form-control" placeholder="Ingrese su contraseña" name="Clave">
                                    </div>

                                    <!-- Recordar -->
                                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                                        <div class="form-check mb-2 mb-md-0">
                                            <input class="form-check-input" type="checkbox" id="remember">
                                            <label class="form-check-label" for="remember">Recordar</label>
                                        </div>
                                        <a href="#" class="text-decoration-none">Olvido su contraseña?</a>
                                    </div>

                                    <!-- Botón login -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg" name="Enviar">Ingresar</button>
                                    </div>

                                    <p class="small fw-bold mt-3 mb-0 text-center">
                                        No tiene cuenta? <a href="#" class="link-danger">Registrese</a>
                                    </p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>