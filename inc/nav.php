   <?php 

    $links         = array(
      'index'      => 'Home',
      'developer' => 'Developers',
      'project'   => 'Projects',
      'service'   => 'Services',
      'abou'      => 'About Us',
      'blo'       => 'Blog');



    ?>


    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">
        
        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a class="topbar-brand" href="index.php">
            <img class="logo-default" src="assets/img/logo.png" alt="logo">
            <img class="logo-inverse" src="assets/img/naldywhite.png" alt="logo">
          </a>
        </div>


        <div class="topbar-right">
          <ul class="topbar-nav nav">
            <?php 
                foreach ($links as $link => $title) {
                  ?>
                   <li class="nav-item">
                      <a class="nav-link <?php if ($this_page == $link) {
                        echo "active";
                      } ?>" href="<?php echo $link;?>.php">
                        <?php echo $title; ?>
                      </a>
                  </li>
                  <?php
                }

             ?>
          </ul>
        </div>

      </div>
    </nav>
    <!-- END Topbar -->