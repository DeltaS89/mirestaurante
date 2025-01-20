<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmUsuario" class="w-40 m-auto mx-3 my-3" action="" method="GET" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id">
    <div class="container">
        <div class="p-3 bd-highlight">
            <a href="index.php?page=usuario" class="btn btn-secondary btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>

        <div class="container">
            <div>
                <h2>Catálogo Usuario</h2>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                <label for="nombre">Nombre</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                <label for="usuario">Usuario</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
                <label for="contrasena">Contraseña</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="gmail" id="gmail" placeholder="Gmail">
                <label for="gmail">Gmail</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                <label for="telefono">Telefono</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="rol" id="rol" placeholder="Rol">
                <label for="rol">Rol</label>
            </div>

            <!-- <div class="mb-3">
                <div>
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*">
                </div>
            </div> -->

            <div class="mb-3">
                <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
                <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
            </div>
        </div>

</form>