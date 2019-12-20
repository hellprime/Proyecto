 <!DOCTYPE html>
 <html lang="en" class=" -webkit-">

 <head>
     <meta charset="UTF-8">
     <title>VET+ La mejor veterinaria del pais</title>
     <?php include 'Views/head.php';?>
 </head>

 <body>

     <div class="navbar navbar-dark bg-dark">
         <?php require_once 'Views/menu.php';?>
         <div class="container">
             <a href="#" class="navbar-brand d-flex align-items-center"><strong>VET+</strong></a>
         </div>
     </div>

     <div class="text-center py-5">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-md-9">
                     <h1>Panel administrativo</h1>
                     <p class="lead">En este panel podras ver y modificar el catalogo de servicios</p>
                 </div>
             </div>
         </div>
     </div>

     <?php if (isset($_SESSION['usuario'])) {?>
     <?php echo '<script type="text/javascript"> window.location = "panelServicios.php" </script>';?>
     <?php } else {?>

     <div class="py-2" id="fullbody">
         <div class="container">
             <div class="py-5 my-3 bg-white">
                 <div class="container">
                     <div class="row justify-content-center">
                         <div class="col-md-9">
                             <h2>Por favor inicia sesion</h2>

                             <form action="" method="POST">
                                 <div class="form-group">
                                     <label for="usuario">Usuario:</label>
                                     <input class="form-control" type="text" name="usuario" placeholder="usuario"
                                         required="true">
                                 </div>
                                 <div class="form-group">
                                     <label for="contrasena">Contrasena</label>
                                     <input class="form-control" type="contrasena" name="contrasena"
                                         placeholder="contrasena">
                                 </div>
                                 <input class="btn btn-primary btn-lg" type="submit" value="Entrar">
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <?php }?>

     <footer class="py-4">
         <div class="container">
             <p>Creado por Jose Mendieta © Bahamonde | <a href="index.php">Inicio</a></p>
             <p>Proyecto final para la clase de Programacion 4.</p>
         </div>
     </footer>

 </body>

 </html>