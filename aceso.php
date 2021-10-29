<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("porfavor debes iniciar sesion ");
    window.location="../Login.php"
  
    </script> ';
    session_destroy();
    die();

} 
    

?>

<?php 
  include('DB/conexion.php');
  $query = "select * from publicaciones ORDER BY fecha ASC";
  $resultado = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!--====== Title ======-->
    <title>Pagina Mascotas</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/cuidado-de-mascotas.png" type="image/png">

    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
        
    <!--====== Animate CSS ======-->
 
        
    
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
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->    
   
   
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
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
      <div class="navbar-area">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <nav class="navbar navbar-expand-lg">
                      <h5 class="navbar-brand">
                                <img src="../img/perro.png">
                            MASCOT</h5>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="toggler-icon"></span>
                              <span class="toggler-icon"></span>
                              <span class="toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                              <ul id="nav" class="navbar-nav ml-auto">
                        
                        
                          </div>
                      </nav> <!-- navbar -->
                  </div>
              </div> <!-- row -->
          </div> <!-- container -->
      </div> <!-- navbar area -->
        <br><br><br><br>
     <div class="container">
      <header class="header">
        <ul>
          <li class="cor-1"></li>
          <li class="cor-2"></li>
          <li class="cor-3"></li>
          <li class="cor-4"></li>
          <li class="cor-5"></li>
        </ul>
        </header>
      <div class="wrap">
      
          <aside class="sidebar">
          <div class="widget">
            <h2>Quieres Crear una Publicacion?</h2>
            <p>En el siguente aprtado se te mostraran 3 botones para que eligas que quieres hacer.</p>
            </div>
            <div class="widget">
            <h2>Interactua con nosotros</h2>
            <h2>Que deceas hacer?</h2>
            <a href="./Publicaciones.php" class="main-btn1" >  <i class="fas fa-save"></i> Publicar</a>
            <br>
            <br>

            <a href="../publicaciones/aceso.php" class="main-btn2" >  <i class="fas fa-sync-alt"></i> Actualizar</a>
            <br>
            <br>
            <a href="../php/cerrarsesion.php" class="main-btn3" >  <i class="fas fa-power-off"></i> Cerrar seccion</a>

            </div>
        </aside>
            <div class="blog">
            <?php foreach($resultado as $row){ ?>
        <div class="conteudo">
        <div class="post-info">
          <h5 class="card-title"><strong><?php echo $row['fecha'];       ?></strong></h5>
          </div> 
        <img src="DB/img/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">  
        <h1>Detalles de la publicacion</h1> 
        <hr>
        <div class="card mb-3">
       
          
        <div class="card-body">
        <h5 class="card-title"><strong><?php echo $row['nombre']; ?></strong></h5>
        <h5 class="card-title">Apellido      →<strong><?php echo $row['apellido'];    ?></strong></h5>
           <h5 class="card-title">Numero        →<strong><?php echo $row['numero'];      ?></strong></h5>
           <h5 class="card-title">Correo        →<strong><?php echo $row['correo'];      ?></strong></h5>
           <h5 class="card-title">Direccion     →<strong><?php echo $row['direccion'];   ?></strong></h5>
           <p class="card-text"><?php echo $row['descripcion']; ?></p>
             </div>
            </div>    
            </div>
            <?php }?>
        </div>  

     <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
 

    
    <!--====== Bootstrap js ======-->
  
    <script src="../assets/js/bootstrap.min.js"></script>
    
  
    
    


    
    <!--====== wow js ======-->
   
    
    <!--====== Main js ======-->
    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>
