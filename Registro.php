<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Registro.css">
    <script src="https://kit.fontawesome.com/f360adb569.js" crossorigin="anonymous"></script>
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
                        <h2 class="card-title text-center mb-4">Registro de Usuarios</h2>
                        <form action="apiRestaurante/src/public/procesar_registro.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="user-icon">
                                    <label for="imagen_usuario" class="fa-solid fa-user-circle fa-5x"></label>  
                                    <input type="file" class="form-control" id="imagen_usuario" name="imagen_usuario" style="display: none;">
                                </div>
                                <div class="user-text"><i>Profile Photo</i></div>
                            </div>

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
                            <div class="form-group">
                                <label for="nombre_apellidos">
                                    <i class="fas fa-user"></i> Nombre y Apellidos:
                                </label>
                                <input type="text" class="form-control" id="nombre_apellidos" name="nombre_apellidos" required>
                            </div>
                            <div class="form-group">
                                <label for="correo_electronico">
                                    <i class="fas fa-envelope"></i> Correo Electrónico:
                                </label>
                                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">
                                    <i class="fas fa-phone"></i> Teléfono:
                                </label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                            </div>
                            <!-- Imagen de Usuario -->
                            <div class="form-group">
                                <label for="fecha_cumpleanos">
                                    <i class="fas fa-calendar-alt"></i> Fecha de Cumpleaños:
                                </label>
                                <div class="row">
                                    <div class="col">
                                        <label for="dia">Día</label>
                                        <select id="dia" name="dia" class="form-control" required>
                                            <?php for ($i = 1; $i <= 31; $i++) : ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="mes">Mes</label>
                                        <select id="mes" name="mes" class="form-control" required>
                                            <?php
                                            $meses = [
                                                'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
                                                'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                                            ];
                                            ?>
                                            <?php foreach ($meses as $key => $mes) : ?>
                                                <option value="<?= $key + 1 ?>"><?= $mes ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="anio">Año</label>
                                        <select id="anio" name="anio" class="form-control" required>
                                            <?php for ($i = date('Y'); $i >= 1900; $i--) : ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            //transición al cargar la página
            document.body.style.opacity = '1';
            //transición hacia abajo al cargar la página
            document.body.style.transform = 'translateY(0)';
            document.body.style.transition = 'transform 1s ease';

            // Efecto de desvanecimiento en la imagen de fondo al hacer hover
            const backgroundImage = document.getElementById('backgroundImage');
            if (backgroundImage) {
                backgroundImage.addEventListener('mouseenter', function() {
                    this.style.transition = 'opacity 0.5s ease';
                    this.style.opacity = '0.7';
                });

                backgroundImage.addEventListener('mouseleave', function() {
                    this.style.transition = 'opacity 0.5s ease';
                    this.style.opacity = '1';
                });
            }
        });
    </script>
</body>

</html>