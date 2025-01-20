<?php include "header.php"?>

<main class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="text-primary">Bienvenido a GreenBite: Comida Saludable y Deliciosa</h2>
            <p class="p1">Servimos deliciosos platos para llevar o entrega a domicilio.</p>
        </div>
        <div id="demo" class="carousel slide mx-auto" data-bs-ride="carousel" style="height: 600px; width: 1500px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h5>Vegetales</h5>
                        <p class="p2">Nos enorgullece ofrecer una experiencia culinaria única centrada en la frescura y la vitalidad de los vegetales.</p>
                    </div>
                    <img src="img/Portada/Portada1.jpg" alt="Los Angeles" class="d-block w-100" style="object-fit: cover; height: 100%;">
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h5>Proteínas</h5>
                        <p class="p2">En nuestro menú, encontrarás opciones cuidadosamente seleccionadas para nutrir tu cuerpo con platos ricos en proteínas magras</p>
                    </div>
                    <img src="img/Portada/Portada2.jpg" alt="Chicago" class="d-block w-100" style="object-fit: cover; height: 100%;">
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h5>Hidratación</h5>
                        <p class="p2">Nuestro menú ofrece bebidas revitalizantes, infusiones y batidos nutritivos, diseñados para satisfacer tu sed y nutrir tu cuerpo</p>
                    </div>
                    <img src="img/Portada/Portada3.jpg" alt="New York" class="d-block w-100" style="object-fit: cover; height: 100%;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <div class="col-md-12 text-center mt-3">
            <button class="btn btn-primary boton-ver-menu" type="button" onclick="window.location.href='Productos.php';" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">Ver Menú</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            //cambiar de diapositiva
            $('#demo').on('slide.bs.carousel', function() {
                // diapositiva actual
                $('.carousel-item.active .carousel-caption h5, .carousel-item.active .carousel-caption .p2')
                    .removeClass('carousel-caption-visible')
                    .addClass('carousel-caption-hidden');
            });

            // Cuando la animación de cambio de diapositiva ha terminado
            $('#demo').on('slid.bs.carousel', function() {
                //nueva diapositiva
                $('.carousel-item.active .carousel-caption h5, .carousel-item.active .carousel-caption .p2')
                    .removeClass('carousel-caption-hidden')
                    .addClass('carousel-caption-visible');
            });
        });
    </script>

    <div class="row">
        <!-- testimonios -->
        <div class="carousel-test col-md-12 text-center mt-5">
            <div id="testimonials-carousel" class="carousel slide mx-auto" data-bs-ride="carousel" style="height: 400px; width: 100%; background-image: url('img/Testimonios/background.jpg');  background-size: cover; background-position: center;">
                <!-- carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-none d-md-block text-center">
                            <img src="img/Testimonios/Jake.jpg" alt="User1" class="rounded-circle" style="width: 150px;">
                            <h6>Jake Blake</h6>
                            <p class="p3">El servicio fue rápido y el personal amable. Definitivamente mi nueva opción para comidas saludables y deliciosas. Recomiendo el bowl de quinoa y aguacate, ¡una explosión de sabores!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block text-center">
                            <img src="img/Testimonios/Alexander.jpg" alt="User2" class="rounded-circle" style="width: 150px;">
                            <h6>Alexander Smith</h6>
                            <p class="p3">Cada plato está cuidadosamente preparado, y se nota la dedicación a ingredientes frescos y nutritivos. Probé el wrap de pollo a la parrilla y quedé impresionado. Además, el ambiente es relajado y acogedor.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block text-center">
                            <img src="img/Testimonios/Hannah.jpg" alt="User3" class="rounded-circle" style="width: 150px;">
                            <h6>Hannah Brown</h6>
                            <p class="p3">Probé el bowl de ensalada mediterránea y quedé encantada con la variedad de sabores y la abundancia de opciones vegetarianas. 
                                El personal es amable y siempre dispuesto a hacer recomendaciones.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonials-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonials-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>

</main>



<?php include "footer.php" ?>