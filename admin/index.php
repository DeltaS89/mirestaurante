  <?php
  require "shared/dashEncabezado.php";
  $page = isset($_GET["page"]) ? $_GET["page"] : "";

  ?>

  <main class="contenido col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php

    switch ($page) {
      case 'usuario':
        $titulo = "Catálogo Usuarios";
        require "catalogos/Usuarios/listUsuarios.php";
        break;
      case 'productos':
        $titulo = "Productos";
        require "catalogos/Productos/listProductos.php";
        break;
      case 'horarios':
        $titulo = "Catálogo Horarios";
        break;
      case 'pedidos':
        $titulo = "Catálogo Pedidos";
        break;
      case 'nuevoProducto':
        $titulo = "Nuevo Producto";
        require "catalogos/Productos/nuevoProducto.php";
        break;
      case 'nuevoUsuario':
        $titulo = "Nuevo Usuario";
        require "catalogos/Usuarios/nuevoUsuario.php";
        break;
      default:
        $titulo = "Bienvenido";
        break;
    }


    ?>
  </main>

  <?php require "shared/dashPie.php" ?>