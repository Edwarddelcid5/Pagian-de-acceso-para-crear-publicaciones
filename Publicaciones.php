<?php
session_start();


if (!isset($_SESSION['usuario'])) {
   echo '
 <script>
  alert("porfavor debes inicair seccion ");
   window.location="../Login.php"
  
</script> ';
   session_destroy();
  die();

} 
    

?> 


<?php 
  include('DB/conexion.php');
  $query = "select * from publicaciones";
  $resultado = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crea tu publicaciones</title>
    <link rel="stylesheet" href="Imagen.css" />
    <link rel="stylesheet" href="style.css">
  <!--====== Line Icons CSS ======-->
  <link rel="stylesheet" href="../assets/css/LineIcons.css">
        
        <!--====== Font Awesome CSS ======-->
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
            
        <!--====== Bootstrap CSS ======-->
    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        
      
        
        <!--====== Style CSS ======-->
        <link rel="stylesheet" href="../assets/css/style.css">
      
    
        <link rel="stylesheet" href="./Imagen.css">
        <link rel="stylesheet" href="style.css">
        
    
    
    
   
   
  </head>
  <body>
    
 <!--====== PRELOADER PART START ======-->

 <div class="preloader">
  <div class="loader">
      <div class="ytp-spinner">
          <div class="ytp-spinner-container">
              <div class="ytp-spinner-rotator">
                  <div class="ytp-spinner-left">
                      <div class="ytp-spinner-circle"></div>
                  </div>
                  <div class="ytp-spinner-right">
                      <div class="ytp-spinner-circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!--====== PRELOADER PART ENDS ======-->
        
<br>
<br>
<br>

<form action="./DB/subir.php" method="POST" enctype="multipart/form-data">
          <div class="container">
            <div class="contact-box">
              <div class="contact-info">
                <h3 class="title">Crea tu Publicacion</h3>
                <p class="text">
               Porfavor brindanos la informacion que se solicita.
                </p>
                <div class="information-wrap">
                  <div class="information">
    

    
                    <div class="profile-images-card">
                      <div class="profile-images">
                        <img src="" id="upload-img">
                      </div>
                      <div class="custom-file">
                      
                        <label class="btn" for="imagen"><i class="fas fa-cloud-download-alt"></i> Subir Imagen</label> 
                        
                        <input type="file"   name="imagen" id="imagen" >

                     
                      </div>
                    </div>

                  </div>
    
           
                </div>
              </div>
              <div class="contact-form">
                <h3 class="title">LLena los Datos de la Publicacion</h3>
                <div class="row"> 
                
                  <input name="nombre" type="text" class="contact-input" placeholder="Nombre"/>
    
    
                  <input  name="apellido" type="text" class="contact-input" placeholder=" Apellido"
                  />
                </div>
    
                <!-- datos  -->
                <div class="row">
                  <input type="text" class="contact-input"  placeholder="Numero de telefono" name="numero" />
                  <input type="email" class="contact-input" placeholder="Email" name="correo" />
                  
                </div>
                <div class="row">
                  <input type="text" class="contact-input" placeholder="Direccion" name="direccion" /> 

                  <input type="date" class="contact-input" placeholder="fecha" name="fecha"/>

              
                </div>
                
    
                <div class="row">
                  <textarea
                    name="descripcion"
                    class="contact-input textarea"
                    placeholder="Message"
                  ></textarea>
                </div>
          <button type="submit" class="main-btn2" name="Guardar"> <i class="fas fa-save"></i></button> 
         
          <a href="../publicaciones/aceso.php" class="main-btn1" >  <i class="fas fa-file-export"></i> Regresar</a>
              </div>
            </div>
            </form>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
  
    <!--====== Main js ======-->
    <script src="main.js"></script>
    <script src="jquery-latest.min.js"></script>
    <script>
      $(function(){
        $("#imagen").change(function(event) {
          var x = URL.createObjectURL(event.target.files[0]);
          $("#upload-img").attr("src",x);
          console.log(event);
        });
      })
    </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>