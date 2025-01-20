<div class="container">
    <h2 class="my-3 mx-6"><?php echo $titulo ?></h2>

    <div class="table-responsive mb-3">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Rol</th>

                    <div>
                    <a href="index.php?page=nuevoUsuario" class="btn btn-secondary btn-nuevo"><i class="fas fa-plus"></i> Nuevo</a>
                    </div>
                </tr>
               
            </thead>
            <tbody id="datosTablaUsuarios"></tbody>
        </table>
    </div>


</div>