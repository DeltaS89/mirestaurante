<?php
include "header.php";
?>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreProducto = $_POST['nombre'];
    $precioProducto = $_POST['precio'];

    // Agregar el producto al carrito
    agregarAlCarrito($nombreProducto, $precioProducto);

    // notificación con SweetAlert
    echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Producto agregado al carrito',
                showConfirmButton: false,
                timer: 1500
            });
         </script>";
} else {
    // error con SweetAlert
    echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Solicitud no válida',
                showConfirmButton: false,
                timer: 1500
            });
         </script>";
}

include "footer.php";
?>
