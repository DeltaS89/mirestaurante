<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f360adb569.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/informacionPersonal.js"></script>
</head>

<body>
    <div class="container">
        <h2>Información Personal</h2>

        <form id="formularioInformacionPersonal">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
            </div>
            <div class="mb-3">
                <label for="gmail" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="gmail" name="gmail" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <button type="button" id="actualizarBtn" class="btn btn-primary">Actualizar Información</button>
        </form>
    </div>
</body>

</html>