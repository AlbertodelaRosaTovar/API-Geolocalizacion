<?php
require_once "cdn.html";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>
        Geolozalización
    </title>
    <link href="img/logo .png" rel="icon" />
    </meta>
    </meta>
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
</head>

<body>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVhdkO3M5ZRLRhz_o5vsjvz-NbausdC1I&callback=initmap">
    </script>
    <script type="text/javascript">
        var x = document.getElementById("errores");
        navigator.geolocation.getCurrentPosition(initmap, showError); //Obtiene la posición
        function initmap(position) {
            lat = position.coords.latitude; //Obtener latitud
            lon = position.coords.longitude; //Obtener longitud
            latlon = new google.maps.LatLng(lat, lon); //Crear objeto que representa un punto geográfico
            divmapa = document.getElementById('mapa');
            divmapa.style.height = '400px'; //Alto
            divmapa.style.width = '600px'; //Ancho

            //Opciones para el mapa
            var myOptions = {
                center: latlon,
                zoom: 11, //Zoom
                mapTypeId: google.maps.MapTypeId.ROADMAP, //Tipo de mapa
                mapTypeControl: false, //Deshabilita el control de tipo de mapa
                navigationControlOptions: {
                    style: google.maps.NavigationControlStyle.SMALL
                } //Aspecto pequeño
            };

            var infoWindow = new google.maps.InfoWindow({
                position: latlon,
                map: map,
                title: "<h1>Esta es tu ubicacion </h1>" + "<h1>latitude:" + position.coords.latitude + " </h1>" + "<h1>longitude:" + position.coords.longitude + "</h1>"
            });

            var map = new google.maps.Map(document.getElementById("mapa"), myOptions); //Funcion que crea un mapa en la div .
            var marker = new google.maps.Marker({
                position: latlon,
                map: map,
                title: "Estás aquí!"
            }); //Constructor para crear marcador de la posición
        }


        //Funcion para mostrar errores-- >
        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = "Denegada la peticion de Geolocalización en el navegador."
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "La información de la localización no esta disponible."
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "El tiempo de petición ha expirado."
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "Ha ocurrido un error desconocido."
                    break;
            }
        }
    </script>
    <br />
    <!-- División o secciona para mostrar errores -->
    <div id="errores">
    </div>
    <!-- División o secciona para mostrar mapa -->
    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-8">
                <h2>
                    Tu estas aqui en el punto rojo:
                </h2>
                <div id="mapa">
                </div>
            </div>
        </div>
    </div>
    <br />
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
<!-- Container wrapper -->
<!-- Navbar -->
<!--inicio carousel-->