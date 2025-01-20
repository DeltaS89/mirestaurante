<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="generator" content="">
  <title>Dashboard Restaurante</title>



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>


  <header class="navbar sticky-top bg-green flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="index.php">Mi Restaurante</a>

    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
      </li>
    </ul>

    <div id="navbarSearch" class="navbar-search w-100 collapse">
      <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="sidebar col-md-3 col-lg-2 p-0">
        <div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Menú</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 <?php if( $url[0]=="index") echo "active"?>" aria-current="page" href="index.php">
                  <i class="fa-solid fa-house"></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 <?php if( $url[0]=="usuario") echo "active"?>" href="index.php?page=usuario">
                  <i class="fa-solid fa-user"></i>
                  Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 <?php if( $url[0]=="productos") echo "active"?>" href="index.php?page=productos">
                  <i class="fa-solid fa-utensils"></i>
                  Productos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=horarios">
                  <i class="fa-solid fa-calendar"></i>
                  Horarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="index.php?page=banners">
                  <i class="fa-solid fa-image"></i>
                  Banners
                </a>
              </li>

            </ul>



            <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
              <ul class="nav flex-column">
                <!-- Otras listas de enlaces aquí -->

                <hr class="my-3">

                <ul class="nav flex-column mt-auto">
                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                      <i class="fa-solid fa-door-open"></i>
                      Cerrar Sesión
                    </a>
                  </li>
                </ul>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>