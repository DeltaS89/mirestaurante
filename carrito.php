<?php include "header.php" ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<main class="container-fluid">
    <h1>Este es tu carrito</h1>
</main>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>

    <script>
        function eliminarProducto(nombreProducto) {
            $.ajax({
                type: 'POST',
                url: 'eliminarProducto.php',
                data: {
                    nombreProducto: nombreProducto
                },
                success: function(response) {
                    // eliminar el producto
                    if (response === 'success') {
                        // recargar la página si la eliminación fue exitosa
                        location.reload();
                    } else {
                        alert('Error al eliminar el producto');
                    }
                },
                error: function(error) {
                    console.error('Error al eliminar el producto:', error);
                }
            });
        }
    </script>
</head>

<body>

    <h1>Carrito de Compras</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio Unitario</th>

                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalCarrito = 0;
            $productosEnCarrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];

            foreach ($productosEnCarrito as $producto) {
                $nombreProducto = $producto['nombre'];
                $precioProducto = $producto['precio'];

                // es numérico
                if (is_numeric($precioProducto)) {
            ?>
                    <tr>
                        <td><?php echo $nombreProducto; ?></td>
                        <td id="precio-unitario-<?php echo $nombreProducto; ?>"><?php echo '₡' . number_format(floatval($precioProducto), 2); ?></td>

                        <td id="total-<?php echo $nombreProducto; ?>"><?php echo '₡' . number_format(floatval($precioProducto), 2); ?></td>
                        <td>
                        <button type="button" class="btn btn-dark" onclick="eliminarProducto('<?php echo $nombreProducto; ?>')">Eliminar</button>
                        </td>
                    </tr>
            <?php
                    // Sumar al total del carrito
                    $totalCarrito += $precioProducto;
                }
            }
            ?>
            <tr>
                <td colspan="2">Total del Carrito:</td>
                <td><?php echo '₡' . number_format($totalCarrito, 2); ?></td>
            </tr>
        </tbody>
    </table>

</body>




</html>
<?php include "footer.php" ?>