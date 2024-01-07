<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
  header('location: login.php');
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal | Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/E Del logo ENEL.png" type="image/x-icon">
    <link rel="stylesheet" href="/vista/css/normalize.css">
    <link rel="stylesheet" href="vista/css/Principal.css">
</head>
<body>
    <header>
        
        <nav class="barraNavegacion_bloque_bienvenida_usuario">
            <div class="imagen_barraNavegacion">
                <img src="vista/assets/img/Logo ENEL Inventarios.png"  class="logoiNV-head"  alt="Logo Inventarios Enel">
            </div>
          
            <div class="bloque_bienvenida_usuario"> 
              
            
               <a>Bienvenido, <?php echo $_SESSION['username']; ?></a>
               |
               <a href='config/SALIR.php'> Cerrar Sesión</a>               
               
            </div>   
        </nav>   

    </header>

    <main>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="vista/assets/img/Imagen Carrusel 1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>©Enel Colombia</h5>
                  <p>Todos los derechos reservados</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="vista/assets/img/Imagen Carrusel 2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>©Enel Colombia</h5>
                  <p>Todos los derechos reservados</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="vista/assets/img/Imagen Carrusel 3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>©Enel Colombia</h5>
                  <p>Todos los derechos reservados</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
         </div>
           
          <ul class="listado_navegacion_busqueda_agregarMaterial_Reportes">
            <li><a href="#">BUSQUEDA</a></li>              
            <li><a href="andex.php">AGREGAR MATERIAL</a></li>
            <li><a href="#">REPORTES</a></li>               
          </ul>

          <div class="apartado_icono_asistencia">
            <a href="#">
              <img src="vista/assets/img/Icono Asistencia.png" class="Icono_de_asistencia" alt="IconoDeAsistencia">
            </a>
            <a href="#">
              <P class="tienes_problemas_ico">¿Tienes Problemas?</P>
            </a>
          </div>
                  
    </main>

    <footer class="footer-page">

      <p>
      <img src="vista/assets/img/Logo Enel White (C).png" class="logoenelwhite_footer" alt="logoEnelWhite">Colombia SA ESP 2023 | Sistema de Inventarios 
      </p>
      
      <a href="#">Créditos</a> 
      |
      <a href="#"> Legal</a>
      | 
      <a href="#"> Privacidad</a>
        
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

