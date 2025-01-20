<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/InicioSesion.css">
</head>
<body style="background: url('img/Portada/Inicio.jpg') center/cover no-repeat fixed;">
    <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="card shadow-lg rounded-lg" style="width: 90%; max-width: 1000px; margin: auto;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img id="backgroundImage" src="img/Servicios/Servicios1.png" class="card-img img-fluid" alt="Background Image">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Iniciar Sesión</h2>
                        <form action="apiRestaurante/src/public/procesar_login.php" method="post">
                            <div class="form-group">
                                <label for="usuario">
                                    <i class="fas fa-user"></i> Usuario:
                                </label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="contrasena">
                                    <i class="fas fa-lock"></i> Contraseña:
                                </label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/f360adb569.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // transición suave al cargar la página
            document.body.style.opacity = '1';
            // transición hacia abajo al cargar la página
            document.body.style.transform = 'translateY(0)';
            document.body.style.transition = 'transform 1s ease';

            // Efecto de desvanecimiento en la imagen 
            const backgroundImage = document.getElementById('backgroundImage');
            if (backgroundImage) {
                backgroundImage.addEventListener('mouseenter', function () {
                    this.style.transition = 'opacity 0.5s ease';
                    this.style.opacity = '0.7';
                });

                backgroundImage.addEventListener('mouseleave', function () {
                    this.style.transition = 'opacity 0.5s ease';
                    this.style.opacity = '1';
                });
            }
        });
    </script>
</body>
</html>
