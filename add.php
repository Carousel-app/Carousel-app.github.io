<?php

  if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
  }

  if(isset($_POST['password'])){
    $password = $_POST['password'];
  }

  if(isset($_POST['email'])){
    $email = $_POST['email'];
  }

  try {

    require_once('bd_connection.php');
    // $sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `points`) ";
    // $sql .= "VALUES (NULL, '{$nombre}', '{$password}', '{$email}', 0);";
    $sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `points`) VALUES (NULL, 'Martin', '123456', 'micorreo@gmail.com', 0);";
    $result = mysqli_query($conn, $sql);

  } catch(Exception $ex) {
    $error = $e->getMessage();
    echo $error;
  }

  echo var_dump($_POST);

 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Carousel</title>

   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom fonts for this template -->
   <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

   <!-- Plugin CSS -->
   <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

   <!-- Custom styles for this template -->
   <link href="css/freelancer.min.css" rel="stylesheet">

 </head>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
   <div class="container">
     <a class="navbar-brand js-scroll-trigger" href="#page-top">Carousel</a>
     <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         Menu
         <i class="fa fa-bars"></i>
       </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">

         <li class="nav-item mx-0 mx-lg-1">
           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html#login">Login</a>
         </li>

         <li class="nav-item mx-0 mx-lg-1">
           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="sign_up.html#sign_up">Sign up</a>
         </li>

         <li class="nav-item mx-0 mx-lg-1">
           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html#portfolio">Portfolio</a>
         </li>
         <li class="nav-item mx-0 mx-lg-1">
           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html#about">About</a>
         </li>
         <li class="nav-item mx-0 mx-lg-1">
           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html#contact">Contact</a>
         </li>
       </ul>
     </div>
   </div>
 </nav>


 <!-- Header -->
 <header class="masthead mb-0 text-secondary text-center">
   <div class="container">
     <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
     <h1 class="text-uppercase mb-0">Carousel</h1>
     <hr class="star-dark mb-5">
     <h2 class="font-weight-light mb-0">[Descripcion de lo que somos]</h2>
   </div>
 </header>

 <body class="page-top">

   <?php
   if($result){
     header ("Location: /");
     echo "Contacto creado";
     echo var_dump($_POST);
   } else {
     echo "Error: " . $conn->error;
   }
   ?>

   <?php $conn->close();
      unset($conn);
   ?>
 </body>

 <!-- Footer -->
 <footer class="footer text-center">
   <div class="container">
     <div class="row">
       <div class="col-md-4 mb-5 mb-lg-0">
         <h4 class="text-uppercase mb-4">Location</h4>
         <p class="lead mb-0">2215 John Daniel Drive
           <br>Clark, MO 65243</p>
       </div>
       <div class="col-md-4 mb-5 mb-lg-0">
         <h4 class="text-uppercase mb-4">Around the Web</h4>
         <ul class="list-inline mb-0">
           <li class="list-inline-item">
             <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                 <i class="fa fa-fw fa-facebook"></i>
               </a>
           </li>
           <li class="list-inline-item">
             <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                 <i class="fa fa-fw fa-google-plus"></i>
               </a>
           </li>
           <li class="list-inline-item">
             <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                 <i class="fa fa-fw fa-twitter"></i>
               </a>
           </li>
           <li class="list-inline-item">
             <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                 <i class="fa fa-fw fa-linkedin"></i>
               </a>
           </li>
           <li class="list-inline-item">
             <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                 <i class="fa fa-fw fa-dribbble"></i>
               </a>
           </li>
         </ul>
       </div>
       <div class="col-md-4">
         <h4 class="text-uppercase mb-4">About Freelancer</h4>
         <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
           <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
       </div>
     </div>
   </div>
 </footer>

 <div class="copyright py-4 text-center text-white">
   <div class="container">
     <small>Copyright &copy; Carousel 2018</small>
   </div>
 </div>

 <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
 <div class="scroll-to-top d-lg-none position-fixed ">
   <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
       <i class="fa fa-chevron-up"></i>
     </a>
 </div>


 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Plugin JavaScript -->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

 <!-- Contact Form JavaScript -->
 <script src="js/jqBootstrapValidation.js"></script>
 <script src="js/contact_me.js"></script>

 <!-- Custom scripts for this template -->
 <script src="js/freelancer.min.js"></script>

 </body>

 </html>
