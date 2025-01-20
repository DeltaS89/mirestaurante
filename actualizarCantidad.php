
<!-- SE DESCARTA USO DE CODIGO  -->


<!-- <?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreProducto = $_POST['nombreProducto'];
    $cantidad = $_POST['cantidad'];

    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as &$producto) {
            if ($producto['nombre'] === $nombreProducto) {
                $producto['cantidad'] += $cantidad;
                $producto['cantidad'] = max(0, $producto['cantidad']);
                $producto['total'] = $producto['cantidad'] * $producto['precio'];
                break;
            }
        }
    }
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);
    echo 'success';
} else {
    echo 'Invalid Request';
}
?> -->


<!-- SE DESCARTA USO DE CODIGO  -->
