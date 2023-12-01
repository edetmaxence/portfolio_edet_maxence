<?php

$footerMenu = array(
    'theme_location' => 'footer_menu',
    'menu_class' => 'nav-item',
    'echo' => true,
);

?>
<footer>

    <div class="container-fluid bg-footer">
        <div class="row p-3">
            <div class="col">
                <div class="fs-5"><?= get_theme_mod('copyright') ?></div>
            </div>
            <div class="col">

                <?= wp_nav_menu($footerMenu); ?>
            </div>
            <div class="col fs-5">

                <a href="tel: <?= get_theme_mod('telephone'); ?>"> <?= get_theme_mod('telephone'); ?> </a>
                <a href="mailto<?= get_theme_mod('email') ?>"><?= get_theme_mod('email'); ?></a>
            </div>

        </div>
    </div>


</footer>