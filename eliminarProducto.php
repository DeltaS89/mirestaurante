<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreProducto = $_POST['nombreProducto'];

    // Buscar el producto en el carrito y eliminarlo
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $key => $producto) {
            if ($producto['nombre'] === $nombreProducto) {
                unset($_SESSION['carrito'][$key]);
                break;
            }
        }
    }

    // Guardar la sesión actualizada
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);

    // Puedes devolver alguna respuesta si es necesario
    echo 'success';
} else {
    // Manejar la solicitud de otra manera si no es POST
    echo 'Invalid Request';
}
