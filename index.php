<?php 

  require_once 'core/init.php';
  $today = date('Y-m-d');

  if ($_SERVER['HTTP_USER_AGENT']) {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
  } else {
    $user_agent = "not set";
  }
  
  $ip = $_SERVER['REMOTE_ADDR'];

  $visitors = new Visitors();
  $visitors->savevisitor($ip, $user_agent);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A Technology company that delivers current technology from web to console applications, design, consultant services, computer repair, networking and many more, we are a backbone of young programmers with the passion to solve problems through technology.">
    <meta name="keywords" content="Tanzani, Tanzania technology, Naldycodes, Naldy, Tz">
    <meta name="theme-color" content="#ffbe00" />
    
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
        $this_page = "index";
        require_once 'inc/nav.php';
     ?>

         <!-- Header -->
    <header class="header header-inverse h-fullscreen pb-80" style="background-image: url(assets/img/bg.jpg);" data-overlay="6">
        <canvas class="constellation"></canvas>
      <div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <h1 class="display-2 hidden-sm-down">Naldycodes</h1>
            <h1 class="display-4 hidden-md-up">Naldycodes</h1>
            <!-- <br> -->

            <p class="fs-20 w-400 mx-auto hidden-sm-down">Tanzanian Technology Enthusiasts, an asset for
            <span class="text-warning" data-type=" African Technology, African Development, Efficient Softwares"></span></p>
            <p class="fs-16 w-250 mx-auto hidden-md-up">Tanzanian Technology Enthusiasts, an asset for <span class="text-warning" data-type=" African Technology, African Development, Efficient Softwares"></span></p>

            <hr class="w-80">
            <!-- <br> -->

            <a class="btn btn-xl btn-round btn-white w-200 hidden-sm-down" href="#" data-scrollto="section-services">Welcome</a>
            <a class="btn btn-lg btn-round btn-white w-200 hidden-md-up" href="#" data-scrollto="section-services">Welcome</a>

          </div>


          </div>

          <div class="col-12 align-self-end text-center">
              <a class="scroll-down-5 scroll-down-inverse" href="#" data-scrollto="section-services"><span></span></a>
          </div>

        </div>

      </div>
    </header>
    <!-- END Header -->


    <main class="main-content">
          <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Services
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section bg-gray">
        <div class="container">
          <header class="section-header" id="section-services">
            <h2>Services</h2>
            <hr>
            <p class="lead">
              We are compelled to provide the technology you need, with the help from different 
              Information and Communication technology patners we offer the cutting edge technology 
              solutions to help you transform your technology idea into a reality.
            </p>
          </header>


          <div class="row gap-y">
            
            <div class="col-12 col-md-6 col-xl-4 text-center">
              <p class="fs-50 text-info"><i class="icon-mobile"></i></p>
              <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Web Design</h6>
              <p>
                  We design and curate amaizing UI elements for all screens, we are obsessed with good looks that reflect your ideas
              </p>
            </div>


            <div class="col-12 col-md-6 col-xl-4 text-center">
              <p class="fs-50 text-success"><i class="ti-vector"></i></p>
              <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Logo Design</h6>
              <p>
                We create logos that maintain traditional values and stand out from the crowd with beauty and differentiation.
              </p>
            </div>


            <div class="col-12 col-md-6 col-xl-4 text-center">
              <p class="fs-50 text-lighter"><i class="ti-palette"></i></p>
              <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Branding</h6>
              <p>
                We provide ways to business and technology self identity, be different in the company of common entities in the market 
              </p>
            </div>


            <div class="col-12 col-md-6 col-xl-4 text-center">
              <p class="fs-50 text-warning"><i class="ti-medall"></i></p>
              <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Marketing</h6>
              <p>
                We help you get profit from your product or idea, we polish ideas into business centered ideas that solve problems
              </p>
            </div>


            <div class="col-12 col-md-6 col-xl-4 text-center">
              <p class="fs-50 text-danger"><i class="fa fa-cubes pt-4 text-light-danger"></i></p>
              <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Advertising</h6>
              <p>
                Business needs customers, and customers need information, we are the information part you need, get customers at your front door
              </p>
            </div>


            <div class="col-12 col-md-6 col-xl-4 text-center">
              <p class="fs-50 text-primary"><i class="ti-headphone-alt"></i></p>
              <h6 class="fw-600 text-uppercase letter-spacing-2 mb-2">Support</h6>
              <p>
                Technical support and mantainance of technology entities is our speciality, we offer support to problems of all forms in the ICT field
              </p>
            </div>

          </div>

        </div>
      </section>




      <section class="section section-inverse py-150" data-parallax="assets/img/bg2.jpg" data-overlay="9">
        <div class="container">
          <header class="section-header">
            <small><?php echo $today; ?></small>
            <h2>Today's Quote</h2>
            <hr>
            <p class="lead">
              "The public is more familiar with bad design than good design. It is, in effect, conditioned to prefer bad design, because that is what it lives with. The new becomes threatening, the old reassuring.” <br>– Paul Rand
            </p>
          </header>
        </div>
      </section>


          <section class="section py-150">
        <div class="container">

          <div class="row">
            
            <div class="col-12 col-lg-6 pl-50 pr-80">
              <h2>Our Mission</h2>
              <p class="lead">
                To be the Tanzanian's leading service provider of communication to the government and 
                enterprises by helping them create, 
                build and maintain the most innovative, reliable and cost-effective software systems.
              </p>

              <br>

              <p>
                <i class="ti-check text-success mr-8"></i>
                <span class="fs-14">Deliver high quality web designs</span>
              </p>

              <p>
                <i class="ti-check text-success mr-8"></i>
                <span class="fs-14">Support our customers in ICT solutions</span>
              </p>

              <p>
                <i class="ti-check text-success mr-8"></i>
                <span class="fs-14">Solve problems with the light of Information Technology</span>
              </p>
            </div>


            <div class="col-lg-6 hidden-md-down align-self-center">
              <img class="shadow-3" src="assets/img/about_us.jpg" alt="..." data-aos="fade-left" data-aos-duration="1500">
            </div>

          </div>


        </div>
      </section>




          <section class="section section-inverse" data-parallax="assets/img/bg3.jpg" data-overlay="8" id="section-countto">
        <div class="container">
          <header class="section-header">
            <h2>Our Projects</h2>
            <hr>
            <p class="lead">We keep counting all projects both done and ongoing, Numbers don't lie</p>
          </header>


          <div class="row text-center">
            <div class="col">
              <p>Completed projects</p>
              <h2><span data-provide="counter" data-from="0" data-to="3"></span></h2>
            </div>

            <div class="col">
              <p>Ongoing Projects</p>
              <h2><span data-provide="counter" data-from="0" data-to="3" data-speed="3000"></span></h2>
            </div>

            <div class="col">
              <p>Upcoming projects</p>
              <h2><span data-provide="counter" data-from="0" data-to="3" data-refresh-interval="250"></span></h2>
            </div>
          </div>


        </div>
      </section>



      <section class="section">
        <div class="container">
          <header class="section-header">
            <h2>Testimonials</h2>
            <hr>
            <p class="lead">
              Collection of our testimonials from our social networks
            </p>
          </header>



          <div class="swiper-container swiper-button-circular" data-slides-per-view="2" data-space-between="50" data-centered-slides="true">
            <div class="swiper-wrapper pb-0">

              <div class="swiper-slide">
                <div class="card card-shadowed">
                  <div class="card-block px-30">
                    <div class="rating mb-12">
                    <label class="fa fa-facebook text-primary"></label>
                    </div>

                    <p class="text-quoted mb-0">It is hard to get a perfect team/partner to work with, with NALDYCODES, 
                      I find myself confident of reaching my potentials in what I really want regarding 
                      my expectations, Thanks.
                    </p>
                    <div class="media align-items-center pb-0">
                      <img class="avatar avatar-xs" src="assets/img/avatar/olbongo.png" alt="...">
                      <div class="media-body lh-1">
                        <h6 class="mb-0">Daniel Kindimba</h6>
                        <small>@olbongo</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="swiper-slide">
                <div class="card card-shadowed">
                  <div class="card-block px-30">
                    <div class="rating mb-12">
                    <label class="fa fa-twitter text-primary"></label>
                    </div>

                    <p class="text-quoted mb-0">It's quite incredible getting a platform that can not only expand your project's logic and potential, 
                      but also keep it intact and consistent throughout it's excecution. 
                      That's how brilliant NALDYCODES is.</p>
                    <div class="media align-items-center pb-0">
                      <img class="avatar avatar-xs" src="assets/img/avatar/lon.jpg" alt="...">
                      <div class="media-body lh-1">
                        <h6 class="mb-0">Longino Bigage</h6>
                        <small>@longibigage</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="swiper-slide">
                <div class="card card-shadowed">
                  <div class="card-block px-30">
                    <div class="rating mb-12">
                    <label class="fa fa-instagram text-lighter"></label>
                    </div>

                    <p class="text-quoted mb-0">Affecting Tanzanian's life with good and efficient software might be enough to describe this team, keep up the good work, grateful for your thoughtful ideas</p>

                    <div class="media align-items-center pb-0">
                      <img class="avatar avatar-xs" src="assets/img/avatar/fred.jpg" alt="...">
                      <div class="media-body lh-1">
                        <h6 class="mb-0">Fredrick Felician</h6>
                        <small>@Fremafe</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>


        </div>
      </section>


    </main>

    



  
  <?php 
    require_once 'inc/footer-part.php';
    require_once 'inc/footer.php'; 
  ?>

  </body>

</html>