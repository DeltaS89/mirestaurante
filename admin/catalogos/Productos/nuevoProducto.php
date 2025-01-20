<form id="frmProductos" class="w-40 m-auto mx-3 my-3" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id">
    <div class="container">
        <div class="p-3 bd-highlight">
            <a href="index.php?page=productos" class="btn btn-secondary btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>

        <div class="text-center mb-4">
            <h2>Catálogo Menú</h2>
        </div>

        <div class="mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                <label for="nombre">Nombre</label>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="costo" id="costo" placeholder="Costo">
                <label for="costo">Costo</label>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo">
                <label for="tipo">Tipo</label>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Duración">
                <label for="duracion">Duración</label>
            </div>
        </div>

        <!-- <div class="mb-3">
            <label for="imagen">Imagen</label>
            <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*">
        </div> -->
        
        <!-- CAMBIOS PARA IMAGEN -->
        <!-- <div class="mb-3">
            <?php if (isset($_GET['error'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php endif ?>
        </div> -->
        <!-- CAMBIOS PARA IMAGEN -->


        <div class="mb-3 text-center">
            <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
    </div>
</form>