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
    <meta content="open source x/html and css templates" lang="en" name="Description">
    </meta>
    <meta content="mlp design" name="author">
    </meta>
    <meta content="index, follow" name="robots">
    </meta>
    <title>
        ¿Cómo se genera una clave API?
    </title>
    <link href="img/logo .png" rel="icon" />
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    </link>
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
        </div><!-- Collapsible wrapper -->
    </nav>
</head>

<body>
    <!--start wrapper-->
    <div id="wrapper">
        <!--start body-->
        <div id="body">
            <!--start header-->
            <!--start containter-->
            <div id="container">
                <!--start content-->
                <div id="content">
                    <!--post item-->
                    <div class="container">
                        <div class="row">
                            <div class="col-0">

                            </div>
                            <div class="col-12 offset-1">
                                <div class="item">
                                    <h1>
                                        ¿Cómo se genera una clave API?
                                    </h1>

                                    <p>
                                        La clave de API es un identificador único que se utiliza para autenticar solicitudes asociadas a tu proyecto con fines de uso y facturación. Debes tener, al menos, una clave de API asociada a tu proyecto.
                                    </p>

                                    <h1>
                                        Para crear una clave de API, sigue estos pasos:
                                    </h1>


                                    <ol>
                                        <li>En Cloud Console, navega al panel API y servicios→Credenciales.
                                        </li>
                                        <br>
                                        <li>Selecciona Crear credenciales y, luego, Clave de API en el menú desplegable. <p>Se mostrará la clave nueva en el cuadro de diálogo Se creó la clave de API. Una clave de API es una string larga que contiene letras mayúsculas y minúsculas, números y guiones, como a4db08b7-5729-4ba9-8c08-f2df493465a1. Debes copiar tu clave y mantenerla segura. A menos que uses una clave de prueba que pretendas borrar más adelante, agrega restricciones de aplicación y de clave de API.</p>
                                            <img src="img/7.png" alt="">
                                        </li>
                                        <br>

                                    </ol>

                                    <h1>Cómo agregar la clave de API a tu app</h1>
                                    <p>En esta sección, se describe cómo almacenar tu clave de API para que tu app pueda hacer referencia a ella de manera más segura. No debes verificar la clave de API en el sistema de control de versión, por lo que te recomendamos almacenarla en el archivo local.properties, que se encuentra en el directorio raíz de tu proyecto. Para obtener más información sobre el archivo local.properties, consulta los archivos de propiedades de Gradle. </p>
                                    <p>Para optimizar esta tarea, puedes usar el complemento Secrets Gradle paraAndroid</p>
                                    <p>Para instalar el complemento y almacenar tu clave de API, haz lo siguiente:</p>
                                    <ol>
                                        <li>En Cloud Console, navega al panel API y servicios→Credenciales.
                                        </li>
                                        <br>
                                        <li>1.En Android Studio, abre el archivo build.gradle de nivel raíz y agrega el siguiente código al elemento dependencies en buildscript. <p>buildscript { dependencies { // ... classpath "com.google.android.libraries.mapsplatform.secrets-gradleplugin:secrets-gradle-plugin:2.0.0" }}</p>
                                        </li>

                                        <li> A continuación, abre el archivo build.gradle a nivel de la app y agrega el siguiente código al elemento plugins.
                                        </li>
                                        <br>
                                        <li>Guarda el archivo y sincroniza tu proyecto con Gradle.</li>
                                        <img src="img/5.png" alt="">
                                        <br>
                                        <li>.Abre el archivo local.properties en el directorio de nivel de proyecto y, luego, agrega el siguiente código.Reemplaza YOUR_API_KEY por la clave de API.
                                        </li>
                                        <br>
                                        <li>
                                            .En tu archivo AndroidManifest.xml, ve a com.google.android.geo.API_KEY y
                                            actualiza el android:value attribute de la siguiente manera:
                                        </li>
                                        <img src="img/6.png" alt="">

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of content-->
            </div>
            <!--end of container-->
        </div>
        <!--end of body-->
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