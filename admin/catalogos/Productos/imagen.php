<!-- <?php
    if (isset($_POST['enviarImagen']) && isset($_FILES['imagen'])) {
        include_once("../mirestaurante/apiRestaurante/src/public/conexion.php");

        $nombreImagen = $_FILES['imagen']['name'];
        $tamImagen = $_FILES['imagen']['size'];
        $tmp_name = $_FILES['imagen']['tmp_name'];
        $error = $_FILES['imagen']['error'];

        if ($error === 0) {
            if ($tamImagen > 125000) {
                $em = "Archivo Extenso";
                header("Location: ../mirestaurante/admin/catalogos/Productos/listProductos.php");
            } else {
                $imagen_extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);
                $imagen_extension_lc = strtolower($imagen_extension);
                $imagenPermitida = array('png', 'jpg', 'jpeg', 'webp');

                if (in_array($imagen_extension, $imagenPermitida)) {
                    $nombreNuevaImagen = uniqid("IMG", true) . "." . $imagen_extension_lc;
                    $imagen_subida = "../Subidas/" . $nombreNuevaImagen;

                    $NombreProducto = $_POST['nombre'];
                    $costo = $_POST['costo'];
                    $tipo = $_POST['tipo'];
                    $duracion = $_POST['duracion'];
                    $sql = "INSERT INTO tplatillos(nombre, costo, tipo, duracion, imagen) VALUES
                    ('$NombreProducto','$costo','$tipo','$duracion','$nombreNuevaImagen')";

                    $QUERY = mysqli_query($conexion, $sql);

                    if ($QUERY) {
                        header("Location: /listProductos.php");
                    }
                } else {
                    $em = "HA OCURRIDO UN ERROR";
                    header("location: /listProductos.php?error=$em");
                }
            }
        } else {
            header('Location:/listProductos.php');
        }
    }
?> -->
