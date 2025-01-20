<?php
session_start(); // Start the session at the beginning of your code
$url = basename($_SERVER["PHP_SELF"]);
$url = explode(".", $url);

// Verifica si el usuario es un administrador (si ha iniciado sesión)
$is_admin = isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin';
// Verifica si el usuario ha iniciado sesión
$sesionIniciada = isset($_SESSION['usuario']);
?>

<?php
// Iniciar la sesión si aún no se ha iniciado
if (!isset($_SESSION)) {
    session_start();
}

// Inicializar el carrito si aún no existe
if (isset($_SESSION['carrito']) && is_array($_SESSION['carrito'])) {
    $productosEnCarrito = $_SESSION['carrito'];
}

// Función para agregar un producto al carrito
function agregarAlCarrito($nombreProducto, $precioProducto)
{
    // Estructura de datos del producto
    $producto = array(
        'nombre' => $nombreProducto,
        'precio' => $precioProducto
    );

    $_SESSION['carrito'][] = $producto;
}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/<?php echo $url[0] ?>.css">

    <!-- Latest compiled JavaScript -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.btn-primary').on('click', function() {
                var nombreProducto = $(this).closest('.card-body').find('.card-title').text();
                var precioProducto = $(this).closest('.card-body').find('.precio span').text();
                $.ajax({
                    type: 'POST',
                    url: 'agregar_al_carrito.php',
                    data: {
                        nombre: nombreProducto,
                        precio: precioProducto
                    },
                    success: function(response) {
                        // Reemplazar la alerta con SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Producto agregado al carrito',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error: function(error) {
                        // Reemplazar la alerta de error con SweetAlert
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al agregar el producto al carrito',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/f360adb569.js" crossorigin="anonymous"></script>


</head>

<body>
    <!-- contenido de la pagina -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-green">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img class="logo" src="img/logo.jpg" alt="GreenBite">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-center flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "productos") echo "active" ?>" aria-current="page" href="productos.php">Nuestros productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "acerca") echo "active" ?>" aria-current="page" href="acerca.php">Acerca de Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "servicios") echo "active" ?>" aria-current="page" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "ubicaciones") echo "active" ?>" aria-current="page" href="ubicaciones.php">Nuestras Ubicaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "contactenos") echo "active" ?>" aria-current="page" href="contactenos.php">Contáctenos</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "carrito") echo "active" ?>" aria-current="page" href="carrito.php">Carrito</a> -->
                    </ul>
                    <ul class="nav navbar-nav justify-content-center">
                        <form id="frmBusqueda" action="resultados.php" class="d-flex" role="search">
                            <script src="https://kit.fontawesome.com/f360adb569.js" crossorigin="anonymous"></script>
                            <div class="input-group">
                                <input id="txtBuscar" class="form-control" type="search" placeholder="Buscar">
                                <button class="btn btn-buscar" type="button">
                                    <i class="fa-solid fa-magnifying-glass fa-bounce fa-xs"></i>
                                </button>
                            </div>
                            <?php if ($sesionIniciada) : ?>
                                <li class="nav-item dropdown justify-content-end">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-user fa-xs"></i> <?php echo $_SESSION['usuario']; ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="max-height: 300px; overflow-y: auto; width: 310px; margin-left: -200px;">
                                        <?php if ($is_admin) : ?>
                                            <!-- si es un admin muestra el enlace al dashboard -->
                                            <li><a class="dropdown-item" href="/mirestaurante/admin/">Dashboard</a></li>
                                        <?php else : ?>
                                            <!-- si es un usuario normal muestra el enlace al carrito y a la información personal -->
                                            <li><a class="dropdown-item" href="/mirestaurante/carrito.php">Carrito</a></li>
                                            <li><a class="dropdown-item" href="/mirestaurante/informacionPersonal.php">Información Personal</a></li>
                                        <?php endif; ?>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="/mirestaurante/cerrarSesion.php">Cerrar Sesión</a></li>
                                    </ul>
                                </li>
                            <?php else : ?>
                                <button class="btn btn-inicio" type="button" onclick="window.location.href='InicioSesion.php';">Iniciar <i class="fa-solid fa-user fa-xs"></i></button>
                                <button class="btn btn-registrarse" type="button" onclick="window.location.href='Registro.php';">Registro <i class="fa-solid fa-registered fa-xs"></i></button>
                            <?php endif; ?>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>