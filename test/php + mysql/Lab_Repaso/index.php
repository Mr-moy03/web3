<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            width: 100%;
            background-color: #0a1929;
            color: #e0e0e0;
        }
        header {
            background: linear-gradient(135deg, #0d47a1, #1976d2);
            border-radius: 0 0 15px 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
        .navbar-brand, .nav-link {
            color: #e3f2fd !important;
        }
        .nav-link:hover {
            color: #bbdefb !important;
        }
        .about_section {
            background-color: #132f4c;
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .img-box {
            background-color: #1e3a5f;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #bbdefb;
            border-bottom: 2px solid #1976d2;
            padding-bottom: 10px;
        }
        footer {
            background: linear-gradient(135deg, #0d47a1, #1976d2);
            border-radius: 15px 15px 0 0;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<?php
session_start();
?>
<header class="header_section text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">

            <a class="navbar-brand" href="index.html">
                <span>Umsa</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="table1.php">Tabla_1</a></li>
                            <li><a class="dropdown-item" href="table2.php">Tabla_2</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-white">
                        <?php
                        if(isset($_SESSION["Usuario"])){
                        ?>
                    <li class="nav-item"><a class="nav-link" href="#"><?php echo "usuario: ".$_SESSION["Usuario"]." " ?></a></li>
                    <?php
                    echo '<li class="nav-item"><a class="nav-link" href="salir.php">Salir</a></li>';
                    }
                    else{
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Ingresar</a></li>';
                    }
                    ?>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>

<main>
    <section class="about_section py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="img-box rounded">
                        <img src="imagenes/#img_test.png" alt="Hechizos de amor" class="img-fluid" style="max-width: 300px;border-radius: 10px">
                        <!--img src="imagenes/img_test.png" alt="Hechizos de amor" class="img-fluid" style="max-width: 300px;border-radius: 10px"-->
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="detail-box">
                        <div class="heading_container mb-3">
                            <h2 class="fw-bold">Hechizos de amor</h2>
                        </div>
                        <p class="text-justify">
                            Todo el mundo conoce la leyenda: Boa Hancock, la Emperatriz Pirata, la mujer más hermosa del mundo, cuyo corazón está prendado únicamente de Monkey D. Luffy. ¿Mi historia? Es la de cómo esa leyenda... cambió.

                            Llegué a Amazon Lily por error, tras un naufragio. Estaba herido, perdido y, para colmo, rodeado de guerreras que querían mi cabeza por invadir su territorio sagrado. Cuando me llevaron ante ella, ya esperaba mi destino: convertirme en otra estatua de piedra más en su jardín.

                            Pero entonces, sucedió.

                            Hancock me miró con esos ojos profundos y arrogantes, dispuesta a pronunciar su frase característica. Pero se detuvo. No sé qué vio en mí. Tal vez la herida en mi costado le recordó a alguien, o quizás fue la forma en que la miré: no con lujuria o miedo, sino con puro asombro. No por su belleza legendaria, sino por la fuerza feroz que irradiaba.

                            "¿No... no te vuelvo de piedra?", musitó, más para sí misma que para mí. Por primera vez, su confianza pareció titubear.

                            Ese fue el comienzo. Mientras me curaban, me obligaron a quedarme. Yo, un simple intruso, me convertí en el único hombre aparte de Luffy en caminar libremente por la isla. Al principio, ella mantenía la fachada. La pose de "amor por Luffy", la actitud de desprecio.

                            Pero empecé a ver más allá. Vi cómo amaba a sus hermanas en secreto, cómo sufría por las cicatrices de su pasado y cómo, detrás de toda esa arrogancia, había una mujer que había sido lastimada y que usaba el orgullo como armadura.

                            Un día, tras una feroz batalla contra unos marines que me buscaban, yo me interpuse para proteger a una de sus guerreras más jóvenes. Resulté gravemente herido. Cuando desperté, ella estaba a mi lado, su expresión era de preocupación genuina, no de teatro.

                            "¿Por qué lo hiciste? Podrías haber muerto", dijo, su voz perdiendo por completo su tono de emperatriz.

                            "Porque es lo correcto. Y porque... no soportaría ver sufrir a alguien de tu reino", contesté débilmente.

                            Ella se quedó en silencio. Luego, con una voz tan baja que casi no la escuché, confessó: "Siempre pensé que solo un necio de paja podría ignorar mi belleza... pero tú... tú ves algo más. Y eso... es mucho más aterrador".

                            No fue un amor a primera vista. Fue un amor que nació del respeto, de romper sus expectativas y de mostrarle que su valor no residía solo en su belleza o su título, sino en la líder compasiva que era en realidad.

                            Ahora, cuando me mira antes de dar una orden a sus subordinadas, ya no hay desprecio en su mirada. Hay un brillo de complicidad, de cariño. Y aunque el mundo aún cree que su corazón le pertenece solo a un emperador pirata de sombrero de paja, yo soy el secreto mejor guardado de Amazon Lily.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<footer class="text-white text-center py-3 mt-auto">
    <p class="mb-0">&copy; 2025 Programación Web III</p>
</footer>
</body>
</html>