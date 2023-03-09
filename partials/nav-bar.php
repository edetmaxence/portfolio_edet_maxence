<?php
/*
 Template Name: Page Navbar
*/

$headerMenu = array(
  'theme_location' => 'main_menu',
  'menu_class' => 'nav-item',
  'container' => '',
  'echo' => true,
  'items_wrap'=> '<li id="%1$s" class="%2$s">%3$s</li>',

)

?>


  <nav class="nav navbar navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://edetmaxence.fr">
        <div class="row transform">
          <div class="col-lg-3 w-auto h-auto">
            <?php if (!empty(get_theme_mod('logo'))) : ?>
              <img src="<?= get_theme_mod('logo') ?>" alt="logo"/>
            <?php endif; ?>
          </div>
          <div class="d-none d-md-block d-lg-block col color_gold">
            <div class="row"><span class="fs-2"><?= get_theme_mod('landing_name') ?> </span></div>
            <div class="row"><span class="fs-4"><?= get_theme_mod('landing_activity') ?></span></div>

          </div>
        </div>

      </a>
      <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title fs-2" id="offcanvasDarkNavbarLabel">Menu</h5>
          <button type="button" class="btn-close btn-close-white fs-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav fs-3">
           
              <?= wp_nav_menu($headerMenu); ?>
          






            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Réseaux sociaux
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item fs-4" href="https://www.linkedin.com/in/maxence-edet/">Linkedin <i class="bi bi-linkedin"></i></a>

            </li>
                <li>
                  <hr class="dropdown-divider">
                </li> 
                <li><a class="dropdown-item fs-4" href="https://www.malt.fr/profile/maxenceedet">Malt</a>

                </li>

              </ul>
              <a href="tel:  <?= get_theme_mod('telephone'); ?>"> <?= get_theme_mod('telephone'); ?></a>
              <a href="mailto:<?= get_theme_mod('email'); ?> "><?= get_theme_mod('email'); ?></a>

          </ul>

        </div>
      </div>
    </div>
  </nav>

