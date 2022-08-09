<?php
require_once "cdn.html";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    </meta>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    </meta>
    <title>
        Geolozalización
    </title>
    <link href="img/logo .png" rel="icon" />
    <style>
        #naz {
            background-color: #fff;
        }
    </style>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="naz">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="index.php">
                <img alt="" height="46" loading="lazy" src="img/logo .png" style="margin-top: -1px;" />
            </a>

            <!-- Toggle button -->
            <button aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-mdb-target="#navbarButtonsExample" data-mdb-toggle="collapse" type="button">
                <i class="fas fa-bars">

                </i>
            </button>
            <!-- Left links -->
            <div class="d-flex align-items-center">
                <a href="quees.php">
                    <button class="btn btn-outline-primary " type="button">
                        ¿Qué es geolocalización?
                    </button>
                </a>
                <a href="tipos.php">
                    <button class="btn btn-outline-primary " type="button">
                        tipos mas utilizados
                    </button>
                </a>
                <a href="5apps.php">
                    <button class="btn btn-outline-primary " type="button">
                        5 apps
                    </button>
                </a>
                <a href="API.php">
                    <button class="btn btn-outline-primary " type="button">
                        ¿Qué es una API?
                    </button>
                </a>
                <a href="CAPI.php">
                    <button class="btn btn-outline-primary " type="button">
                        ¿ clave API?
                    </button>
                </a>
                <a href="localizacion.php">
                    <button class="btn btn-outline-primary me-1" type="button">
                        Mostrar mi ubicación
                    </button>
                </a>
            </div>
        </div>
        <!-- Collapsible wrapper -->
    </nav>
    <div class="carousel slide" data-ride="carousel" id="slider">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid d-block " src="img/1.png" />
            </div>
            <div class="carousel-item">
                <img class="img-fluid d-block " src="img/2.jpg" />
            </div>
        </div>
        <a class="carousel-control-prev" data-slide="prev" href="#slider" role="button">
            <span aris-hidden="true" class="carousel-control-prev-icon">

            </span>
            <span class="sr-only">
                Slider Previo
            </span>
        </a>
        <a class="carousel-control-next" data-slide="next" href="#slider" role="button">
            <span aris-hidden="true" class="carousel-control-next-icon">

            </span>
            <span class="sr-only">
                Slider Siguiente
            </span>
        </a>
    </div>
</head>

<body>
    <!--fin -->
    <footer class=" text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.7);">
            © 2021 Copyright:
            <a>
                Alberto De La Rosa
            </a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>