<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <title>Naldycodes The home of Tanzanian Technology</title>

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

    <?php 
        $this_page = "blog";
        require_once 'inc/nav.php';
     ?>
         <!-- Header -->
    <header class="header header-inverse bg-fixed" style="background-image: url(assets/img/bg-laptop.jpg)" data-overlay="8">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Our blog</h1>
            <p class="fs-18 opacity-70">
              Technology to us means gathering and sharing information, here is the place for that, get simple to complex facts about Technology, Trends, Good and Bad Practices, Programming and Networking, welcome, lets share. 
            </p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->

      <main class="main-content">
        <section class="section bg-gray">
          <div class="container">

           <!-- blog list -->
            <div class="card mb-30">
              <div class="row">
                <div class="col-12 col-md-4 align-self-center">
                  <a href="blog-single.html"><img src="assets/img/blog-1.jpg" alt="..."></a>
                </div>

                <div class="col-12 col-md-8">
                  <div class="card-block">
                    <h4 class="card-title">New features will add to dashboard soon</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                    <a class="fw-600 fs-12" href="blog-single.html">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                  </div>
                </div>
              </div>
            </div>

          <!-- end of blog list -->
          </div>
        </section>


    </main>

    <?php require_once 'inc/footer.php'; ?>
    </body>
