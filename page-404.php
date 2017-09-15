<?php 

  require_once 'core/init.php';
  $today = date('Y-m-d');
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <title> Naldycodes Error</title>

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/naldycodes.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicon.png">
    <link rel="icon" href="assets/img/favicon.png">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="Naldycodes">
    <meta property="og:description" content="A Technology company that delivers current technology from web to console applications, design, consultant services, computer repair, networking and many more, we are a backbone of young programmers with the passion to solve problems through technology.">
    <meta property="og:image" content="assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
  </head>

  <body>

  

         <!-- Header -->
    <header class="header header-inverse h-fullscreen pb-80" data-overlay="3">
        <canvas class="constellation"></canvas>
      <div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <h1 class="display-1 hidden-sm-down">404</h1>
            <h1 class="display-4 hidden-md-up">404</h1>
            <br>

            <p class="fs-20 w-400 mx-auto hidden-sm-down">Looks like you are lost</p>
            <p class="fs-16 w-250 mx-auto hidden-md-up">Looks like you are lost</p>

            <hr class="w-80">
            <br>

            <a class="btn btn-xl btn-round btn-white w-200 hidden-sm-down" href="index.php">Back to Home</a>
            <a class="btn btn-lg btn-round btn-white w-200 hidden-md-up" href="index.php">Back to Home</a>

          </div>


          </div>

        </div>

      </div>
    </header>
    <!-- END Header -->
  
  <?php 
    require_once 'inc/footer.php'; 
  ?>

  </body>

</html>