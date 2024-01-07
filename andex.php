
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
    <title>Agregar material | Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/E Del logo ENEL.png" type="image/x-icon">
    <link rel="stylesheet" href="vista/css/normalizes.css">
    <link rel="stylesheet" href="vista/css/Index.css">
</head>
<body>
    <header>       
        <nav class="barraNavegacion_bloque_bienvenida_usuario">
            <div class="imagen_barraNavegacion">
                <a href="principal.php">
                    <img src="vista/assets/img/Logo ENEL Inventarios.png"  class="logoiNV-head"  alt="Logo Inventarios Enel">
                </a>
            </div>
          
            <div class="bloque_bienvenida_usuario">  
               <a>Bienvenido, <?php echo $_SESSION['username']; ?></a>                         
               |
               <a href='config/SALIR.php'> Cerrar Sesión</a>   
            </div>   
        </nav>  
    </header>


    <main>
        <div class="container">
            <div class="main-title"></div>
            <div class="content">
                <input type="radio" name="indicator" checked id="Agregar-material">
                <input type="radio" name="indicator" id="Busqueda-material">
                <input type="radio" name="indicator" id="Reportes-material">
                <div class="list">
                    <label for="Agregar-material" class="Agregar-material">
                        <span class="topic">Agregar material</span>                      
                    </label>                   
                    <label for="Busqueda-material" class="Busqueda-material">
                        <span class="topic">Búsqueda</span>                      
                    </label>
                    <label for="Reportes-material" class="Reportes-material">
                        <span class="topic">Reportes</span>                      
                    </label>
                    <div class="indicator"></div>                   
                </div>
                <div class="text-content">
                    <div class="title-text-content">Detalles del material</div>
                    <div class="tabset">
                        <!-- tab 1 -->
                        <input type="radio" name="tabset" id="tab1" aria-controls="material" checked>
                        <label for="tab1">Material</label>
                        <!-- tab 2 -->
                        <input type="radio" name="tabset" id="tab2" aria-controls="subirImagen">
                        <label for="tab2">Subir Imagen</label>

                        <div class="tab-panels">
                            <section id="material" class="tab-panel">
                                <form action="AGREGAR_MATERIAL.php" method="post" name="form">                                    
                                    <div class="form-group5">
                                        <a class="Solo_agregar_conceptos_de_materiales_nuevos" href="">Solo agregar conceptos de materiales nuevos.</a> si es necesario modificar cantidades, descripciones, especificaciones, ubicaciones o imagenes de un concepto de material ya <a class="CREADO_hp" href="">CREADO</a>, ingrese a la pestaña <a class="Búsqueda_hp" href="">Búsqueda</a> y gestione las respectivas modificaciones.
                                    </div>
                        
                                    <div class="form-group1">
                                        <div class="inputs-group1-codigo-meterial">
                                            <label for="">
                                                Código Material
                                                <span class="requiredIcon">*</span>    
                                            </label>
                                            <br>
                                            <input type="text" class="#" name="codigoMaterial_conex">
                                        </div>
                                        <div>
                                            <label for="inputs-group1-id-material">
                                            ID Material   
                                            </label>
                                            <br>
                                            <input type="number" class="#" name="idMaterial_conex" disabled>
                                        </div>
                                    </div>
        
                                    

                                    <div class="form-group2">
                                        <div>
                                            <label for="">
                                                Nombre de material
                                                <span class="requiredIcon">*</span>  
                                            </label>
                                            <br>
                                            <input type="text" name="nombreMaterial_conex">
                                            <br>           
                                        </div>
                                    </div>


                                
                                    <div class="form-group3">
                                        <div>
                                            <label for="">
                                                Especificaciones tecnicas
                                                <span class="requiredIcon">*</span> 
                                            </label> 
                                            <br>
                                            <textarea name="" id="" cols="30" placeholder="" rows="4" name="especificacionesTecnicas_conex"></textarea>
                                        </div>                                                                              
                                    </div>




                                    <div class="form-group4">
                                        <div>
                                            <label for="">
                                                Cantidad
                                                <span class="requiredIcon">*</span>
                                            </label> 
                                            <br>
                                            <input type="number" value="0" class="text_cantidad_input_form-group4" name="cantidadMaterial_conex">
                                        </div> 
                                        <div>
                                            <label for="">
                                                Ubicacion
                                                <span class="requiredIcon">*</span>
                                            </label> 
                                            <br>
                                            <select name="menu" id="sinid" name="ubicacionMaterial_conex">
                                                <option value="" checked="">Sin seleccionar</option>                                              
                                                <option value="">PDI</option>
                                                <option value="">FACA</option>
                                                <option value="">SALITRE</option>                                                                                   
                                            </select>
                                        </div>
                                        <div class="date_input_form-group4">
                                            <label for="">
                                                Fecha ultima ubicacion
                                                <span class="requiredIcon">*</span>
                                            </label>
                                            <br>
                                            <input class="text_date_input_form-group4" type="date" name="fechaultimaubicacionMaterial_conex">
                                        </div>                                                                                                             
                                    </div> 



                        
                                    <div class="form-group1-botton">
                                        <div class="form-group5">
                                            <button type="submit" class="botton-agregarMaterial">Agregar Material</button>
                                            <button type="reset" class="botton-Limpiar">Limpiar</button>
                                        </div>                              
                                    </div>  
                                </form>
             
                                

                            </section>
                            <section id="subirImagen" class="tab-panel">
                                <p>Cargar imagenes</p>       
                                <br>
                                <div class="form-group1-files">
                                    <label for="uploadImageFile">
                                        Selecciona Imagen (
                                            <span class="blueText">JPG</span>    
                                            ,                                      
                                            <span class="blueText">JPEG</span>
                                            ,
                                            <span class="blueText">GIF</span>
                                            ,
                                            <span  class="blueText">PNG</span>
                                            ,
                                        solamente )
                                    </label>
                                    <br>
                                    <input type="file" class="form-control-file" name="uploadImageFile">
                                </div>
                                    <div class="form-group2-botton">
                                        <button type="button" id="deleteImageButton" class="deleteUploadImageFile">Eliminar Imagen</button>
                                        <button type="reset" class="cleanUploadImageFile">Limpiar</button>
                                    </div>                            
                            </section>
                        </div>                                      
                    </div>                     
                </div>
                
            </div>
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