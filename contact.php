<?php 
	require_once 'core/init.php';

  $results = "";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $contact = new Contacts();

    $results = $contact->send_message($name, $email, $message);

    // die(var_dump($contact));
  }


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Get in touch with us, lets talk..">
    <meta name="keywords" content="Technology">
    
    <title>Naldycodes</title>

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/naldycodes.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <meta name="theme-color" content="#ffbe00" />

    <!-- Favicons -->
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body>
   <?php 
        $this_page = "index";
        require_once 'inc/nav.php';
     ?>


         <!-- Header -->
    <header class="header header-inverse bg-fixed" style="background-image: url(assets/img/bg.jpg)" data-overlay="8">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Contact Us</h1>
            <p class="fs-18 opacity-70">
              Have a project ? , A site you want ?, an app you want? , a great idea ?,  a suggestion ? or even an opportunity,  contact us, we solve problems with technology, together we eradicate poverty in African countries
            </p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->




    <!-- Main container -->
    <main class="main-content">
      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Contact form
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section">
        <div class="container">

          <div class="row gap-y">
            <div class="col-12 col-md-6">

                <p class="text-success text-center"><?php echo $results; ?></p>

              <form action="" method="POST" class="contactform">

                <div class="form-group">
                  <input class="form-control form-control-lg" type="text" name="name" placeholder="Your Name">
                </div>

                <div class="form-group">
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="Your Email Address">
                </div>

                <div class="form-group">
                  <textarea class="form-control form-control-lg" name="message" rows="4" placeholder="Your Message"></textarea>
                </div>


                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Send</button>
              </form>

            </div>


            <div class="col-12 col-md-5 offset-md-1">
              <div class="bg-grey h-full p-20">
                <p>Leave us a message, an idea, an opportunity,  We will get back to you as soon as possible</p>

                <hr class="w-80">

                <p class="lead">Dar Es Salaam ,Tanzania</p>

                <div>
                  <span class="d-inline-block w-20 text-lighter" title="Email">E:</span>
                  <span class="fs-14">naldycodes@gmail.com</span>
                </div>

                <div>
                  <span class="d-inline-block w-20 text-lighter" title="Phone">P:</span>
                  <span class="fs-14">+255 652 441 424</span>
                </div>

              </div>
            </div>
          </div>


        </div>
      </div>




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Map
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="h-400" data-provide="map" data-lat="-6.8127926" data-lng="39.2946752" data-marker-lat="-6.8140888" data-marker-lng="39.294675" data-zoom="8" data-style="normal"></div>





    </main>
    <!-- END Main container -->

 <?php 
    require_once 'inc/footer-part.php';
    require_once 'inc/footer.php'; 
  ?>

  </body>
  </html>