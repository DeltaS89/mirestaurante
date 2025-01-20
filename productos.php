<?php include "header.php" ?>


<main class="container-fluid">
    <h1>Bienvenidos al Menú del Restaurante</h1>
    <p>Aquí encontrarás una variedad de deliciosos platillos para disfrutar.</p>
</main>

<section>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2 class="mb-4 text-center">Entradas</h2>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Entradas/Ensalada de Quinoa y Aguacate.jpg" class="card-img-top img-fluid" alt="Imagen de ensalada" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Ensalada de aguacate y anacardos</h3>
                        <p class="card-text flex-grow-1">Una deliciosa ensalada fresca con aguacate maduro y anacardos crujientes. El aliño especial le da un toque único.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="precio">₡
                                <span>5000</span>
                            </div>
                            <div class="cta">
                                <button class="btn btn-primary" onclick="agregarAlCarrito('Ensalada de Aguacate y Anacardos', 5000)">Pedir ahora</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Entradas/Rollitos de Alga Nori con Salmon.jpg" class="card-img-top img-fluid" alt="Imagen de rollitos de alga nori con salmón" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Rolllitos de Alga Nori con Salmon</h3>
                        <p class="card-text flex-grow-1">Una deliciosa opción de sushi con alga nori, salmón fresco y otros ingredientes. ¡Un placer para el paladar!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>7500</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Rolllitos de Alga Nori con Salmon', 7500)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Entradas/Sopa de Calabaza Asada.jpg" class="card-img-top img-fluid" alt="Imagen de Sopa de Calabaza " style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Sopa de Calabaza Asada</h3>
                        <p class="card-text flex-grow-1">Una reconfortante sopa preparada con calabaza asada, perfecta para los días fríos. Su sabor y textura te encantarán.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>6000</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Sopa de Calabaza Asada', 6000)">Pedir ahora </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2 class="mb-4 text-center">Platos Principales</h2>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Platos Principales/Pasta de Calabacin con Pesto de Albahaca.jpg" class="card-img-top img-fluid" alt="Imagen de Pasta de Calabacín con Pesto de Albahaca" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Pasta de Calabacín con Pesto de Albahaca</h3>
                        <p class="card-text flex-grow-1">Una opción saludable y sabrosa, la Pasta de Calabacín con Pesto de Albahaca combina calabacines en tiras con pesto de albahaca para un plato fresco y delicioso.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>9500</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Pasta de Calabacín con Pesto de Albahaca', 9500)">Pedir ahora </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Platos Principales/Pollo a la Barbacoa con Batata Asada.jpg" class="card-img-top img-fluid" alt="Imagen de Pollo a la Barbacoa con Batata Asada " style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Pollo a la Barbacoa con Batata Asada</h3>
                        <p class="card-text flex-grow-1">Una combinación irresistible de pollo jugoso y batata asada con un toque ahumado y sabor a barbacoa.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>12000</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Pollo a la Barbacoa con Batata Asada', 12000)">Pedir ahora </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Platos Principales/Salmon a la Parrilla con Salsa de Limon.jpg" class="card-img-top img-fluid" alt="Imagen de Salmon a la Parrilla con Salsa de Limon" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Salmón a la Parrilla con Salsa de Limón</h3>
                        <p class="card-text flex-grow-1">Una opción deliciosa con fusión de sabores, donde el salmón a la parrilla se encuentra con una refrescante salsa de limón.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>14500</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Salmón a la Parrilla con Salsa de Limón', 14500)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Platos Principales/Tofu Salteado con Vegetales.jpg" class="card-img-top img-fluid" alt="Imagen de Tofu Salteado con Vegetales " style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Tofu Salteado con Vegetales</h3>
                        <p class="card-text flex-grow-1">Una opción vegetariana llena de sabor, donde el tofu y los vegetales se combinan en un plato sazonado y saludable.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>10800</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Tofu Salteado con Vegetales', 10800)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section>

<div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2 class="mb-4 text-center">Guarniciones</h2>
                </div>
                <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Guarniciones/Berenjenas al Horno.jpg" class="card-img-top img-fluid" alt="Imagen de Berenjenas al Horno  " style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Berejenas al Horno</h3>
                        <p class="card-text flex-grow-1">Una deliciosa y saludable forma de disfrutar las berenjenas, asadas a la perfección para realzar su sabor natural.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>8000</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Berejenas al Horno', 8000)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Guarniciones/Pure de Coliflor y Brocoli.jpg" class="card-img-top img-fluid" alt="Imagen de Pure de Coliflor y Brocoli  " style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Pure de Coliflor y Brocol</h3>
                        <p class="card-text flex-grow-1">Una opción cremosa y deliciosa que combina coliflor y brócoli en un puré reconfortante y saludable.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>9500</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Pure de Coliflor y Brocol', 9500)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Guarniciones/Ensalada de Lentejas y Kale.jpg" class="card-img-top img-fluid" alt="Imagen de Ensalada de Lentejas y Kale  " style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Ensalada de Lentejas y Kale</h3>
                        <p class="card-text flex-grow-1">Una mezcla refrescante de lentejas y kale, perfecta para una comida saludable y llena de nutrientes.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>10200</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Ensalada de Lentejas y Kale', 10200)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section>

<div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2 class="mb-4 text-center">Postres</h2>
                </div>
                <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Postres/Chia Pudding con Frutos Rojos.jpg" class="card-img-top img-fluid" alt="Imagen de Chia Pudding con Frutos Rojos" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Chia Pudding con Frutos Rojos</h3>
                        <p class="card-text flex-grow-1">Un postre o desayuno saludable y delicioso que combina la textura de las semillas de chía con la frescura de los frutos rojos.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>7800</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Chia Pudding con Frutos Rojos', 7800)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Postres/Tarta de Manzana sin Azucar.jpg" class="card-img-top img-fluid" alt="Imagen de Tarta de Manzana sin Azúcar" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Tarta de Manzana sin Azucar</h3>
                        <p class="card-text flex-grow-1">Un postre saludable y sabroso que prescinde del azúcar, resaltando el dulzor natural de las manzanas en cada bocado.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span> 11000</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Tarta de Manzana sin Azucar', 11000)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Postres/Yogur Griego Natural con Frutas.jpg" class="card-img-top img-fluid" alt="Imagen de Yogur Griego Natural con Frutas" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Yogur Griego Natural con Frutas</h3>
                        <p class="card-text flex-grow-1">Una opción de desayuno o postre que combina la cremosidad del yogur griego con la frescura y el sabor de las frutas.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>6500</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Yogur Griego Natural con Frutas', 6500)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section>

<div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2 class="mb-4 text-center">Bebidas</h2>
                </div>
                <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Bebidas/Agua Infundida.jpg" class="card-img-top img-fluid" alt="Imagen de Agua Infundida" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Agua Infundida</h3>
                        <p class="card-text flex-grow-1">Refresca tu paladar con nuestra agua infundida, una bebida que combina el sabor natural del agua con toques sutiles de frutas y hierbas frescas. Es la elección perfecta para mantenerte hidratado y disfrutar de un sabor refrescante.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>2500</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Agua Infundida', 2500)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Bebidas/Agua.jpg" class="card-img-top img-fluid" alt="Imagen de Agua " style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Agua</h3>
                        <p class="card-text flex-grow-1">La bebida más esencial y refrescante para mantenerse hidratado y mantener un equilibrio saludable en la vida.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>1000</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Agua', 1000)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Bebidas/Te Verde Frio con Menta y Limon.jpg" class="card-img-top img-fluid" alt="Imagen de Te Verde Frio con Menta y Limon" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Té Verde Frío con Menta y Limón</h3>
                        <p class="card-text flex-grow-1">Una combinación perfecta de té verde, menta y limón que te brinda una experiencia refrescante y deliciosa en cada sorbo. Perfecto para mantenerse hidratado con un toque vibrante y revitalizante. ¡Descubre la frescura en cada gota!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>4500</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Té Verde Frío con Menta y Limón', 4500)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/Bebidas/Batido de Proteinas con Espinacas.jpg" class="card-img-top img-fluid" alt="Imagen de Batido de Proteínas con Espinacas y Plátano " style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title text-center">Batido de Proteínas con Espinacas y Plátano</h3>
                        <p class="card-text flex-grow-1">Una bebida energizante que combina proteínas, espinacas y plátano para un batido saludable y lleno de sabor.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="precio">₡
                                <span>8800</span>
                            </div>
                            <div class="cta">
                            <button href="#" class="btn btn-primary" onclick="agregarAlCarrito('Batido de Proteínas con Espinacas y Plátano', 8800)">Pedir ahora </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

<?php include "footer.php" ?>
