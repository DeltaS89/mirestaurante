<div class="container-fluid">
  <footer class="row justify-content-center">

    <div class="col-md-4 col-lg-4 mx-auto mb-4">
      <h3 class="text-uppercase fw-bold">Productos</h3>
      <p><a href="#">Entradas</a></p>
      <p><a href="#">Platos Principales</a></p>
      <p><a href="#">Guarniciones</a></p>
    </div>

    <div class="col-md-4 col-lg-4 mx-auto mb-4">
      <h3 class="text-uppercase fw-bold">Acerca de Nosotros</h3>
      <p><a href="#">Historia</a></p>
      <p><a href="#">Misión</a></p>
      <p><a href="#">Visión</a></p>
    </div>

    <div class="col-md-4 col-lg-4 mx-auto mb-4">
      <h3 class="text-uppercase fw-bold">Contactenos</h3>
      <p><i class="fas fa-home mr-3"></i> San José, 10801, CR</p>
      <p><i class="fas fa-envelope mr-3"></i> info@greenbite.com</p>
      <p><i class="fas fa-phone mr-3"></i> +506 2256 7832</p>
    </div>

    <div class="redes">
      <section class="d-flex justify-content-center">
        <div class="me-5">
          <span>Accede a nuestras redes sociales:</span>
        </div>
        <div>
          <a href="" class="text-dark me-4"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="" class="text-dark me-4"><i class="fa-brands fa-twitter"></i></a>
          <a href="" class="text-dark me-4"><i class="fa-brands fa-instagram"></i></a>
          <a href="" class="text-dark me-4"> <i class="fa-brands fa-linkedin"></i></a>
        </div>
      </section>
      <div class="copyright text-center p-3">
        © 2023 Copyright:
        <a href="https://uia.ac.cr/">Programación III</a>
      </div>
    </div>
  </footer>
</div>

<!-- Script van aca -->
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://kit.fontawesome.com/f360adb569.js" crossorigin="anonymous"></script>
<script src="js/header.js"></script>
<?php
  if($url[0]=="resultados"){
    echo '<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>';
    echo "<script src='js/resultados.js'></script>";  
}
?>
</body>
</html>