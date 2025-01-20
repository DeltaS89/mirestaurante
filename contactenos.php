<?php include "header.php" ?>

<main class="container">
    <section class="mb-4">
        <div class="contact form-title" style="background-image: url('img/Contactenos/Vegetales.jpeg');">
            <h4 class="text-center my-4">Contactenos</h4>
        </div>
        <section class="row">
            <form class="col-lg-6" action="procesar_formulario.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="contact form-control" name="nombre" id="nombre" placeholder="Digite su Nombre">
                    <label for="nombre">Nombre</label>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="form-floating mb-3" for="email"></label>
                        <input type="email" class="contact form-control" name="email" id="email" placeholder="Correo electronico">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-floating mb-3" for="telefono"></label>
                        <input type="phone" class="contact form-control" name="telefono" id="telefono" placeholder="Telefono">
                    </div>
                </div>

                <div class="mb-3 mensaje">
                    <label for="mensaje">Mensaje</label>
                    <textarea class="contact form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <input type="submit" class="btn btn-success" value="Enviar">
                </div>
            </form>

            <div class="col-md-6 text-center">
                <ul class="list-unstyled mb-0">
                    <li>
                        <h3>Información</h3>
                        <p>¿Tienes alguna pregunta o inquietud? ¡Estamos aquí para ayudarte! No dudes en contactarnos directamente. Nuestro equipo estará encantado de responder a tus consultas y brindarte la asistencia que necesitas. Completa el formulario a continuación o utiliza la información de contacto proporcionada. Nos comprometemos a responderte en cuestión de horas.</p>
                    </li>
                    <li>
                        <i class="locacion fa-solid fa-location-dot fa-xl"></i>
                        <p>San José, 10801, CR</p>
                    </li>
                    <li>
                        <i class="telefono fa-solid fa-phone fa-xl"></i>
                        <p>+506 2256 7832</p>
                    </li>
                    <li>
                        <i class="correo fa-solid fa-envelope fa-xl"></i>
                        <p>info@greenbite.com</p>
                    </li>
                </ul>
            </div>
        </section>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

    <script>
        $(document).ready(function () {
            $('form').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: response.message,
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.error,
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Hubo un error en el servidor. Inténtalo de nuevo más tarde.',
                        });
                    }
                });
            });
        });
    </script>
</main>

<?php include "footer.php" ?>
