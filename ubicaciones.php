<?php include "header.php" ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicaciones de Restaurantes</title>
    <link rel="stylesheet" href="css/ubicaciones.css">
</head>

<body>
    <div id="map"></div>

    <!-- Contenedor para la información debajo del mapa -->
    <div class="container" style="max-width: 1500px;">
        <div class="info-row">
            <!-- Primer Restaurante -->
            <div class="info-box">
                <img src="img/Ubicaciones/Limon.jpg" alt="GreenBite Limón" class="info-image">
                <div class="info-details">
                    <p><strong>GreenBite Limón</strong></p>
                    <p>Dirección: Ruta Nacional Treciaria 803, Limón, Matina</p>
                    <p>Teléfono: +506 2256 7832 ext. 01</p>
                </div>
            </div>

            <!-- Segundo Restaurante -->
            <div class="info-box">
                <img src="img/Ubicaciones/SanJose.jpg" alt="GreenBite San José" class="info-image">
                <div class="info-details">
                    <p><strong>GreenBite San José</strong></p>
                    <p>Dirección: San José, San José, Goicoechea, Guadalupe</p>
                    <p>Teléfono: +506 2256 7832 ext. 02</p>
                </div>
            </div>

            <!-- Tercer Restaurante -->
            <div class="info-box">
                <img src="img/Ubicaciones/Alajuela.jpg" alt="GreenBite Alajuela" class="info-image">
                <div class="info-details">
                    <p><strong>GreenBite Alajuela</strong></p>
                    <p>Dirección: Ave Tomás Guardia Alajuela</p>
                    <p>Teléfono: +506 2256 7832 ext. 03</p>
                </div>
            </div>
        </div>

        <div class="info-row">
            <!-- Cuarto Restaurante -->
            <div class="info-box">
                <img src="img/Ubicaciones/Heredia.jpg" alt="GreenBite Heredia" class="info-image">
                <div class="info-details">
                    <p><strong>GreenBite Heredia</strong></p>
                    <p>Dirección: Heredia, Fatima</p>
                    <p>Teléfono: +506 2256 7832 ext. 04</p>
                </div>
            </div>

            <!-- Quinto Restaurante -->
            <div class="info-box">
                <img src="img/Ubicaciones/Cartago.jpg" alt="GreenBite Cartago" class="info-image">
                <div class="info-details">
                    <p><strong>GreenBite Cartago</strong></p>
                    <p>Dirección: Avenida Central Provincia de Cartago, Cartago</p>
                    <p>Teléfono: +506 2256 7832 ext. 05</p>
                </div>
            </div>


            <!-- Sexto Restaurante -->
            <div class="info-box">
                <img src="img/Ubicaciones/Puntarenas.jpg" alt="GreenBite Puntarenas" class="info-image">
                <div class="info-details">
                    <p><strong>GreenBite Puntarenas</strong></p>
                    <p>Dirección: Barranca, Puntarenas Province</p>
                    <p>Teléfono: +506 2256 7832 ext. 06</p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/ubicaciones.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPWM3osMJTdxKFvEsqY2xy9mWWfW7PRh4&callback=initMap"></script>
</body>

</html>

<?php include "footer.php" ?>