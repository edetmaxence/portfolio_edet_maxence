<?php

/*
Template Name: Page portfolio
*/

get_header();

$realisation_all = realisationAll();

?>


<div class="container-fluid">


    <div class="row text-center">
        <h1 class="color_gold display-3 pt-5"><?= get_the_title() ?></h1>
    </div>

    <!-- groupe bouton --->
    <div class="row text-center ">
        <div class="col-md-9 col-lg-10 offset-1">

            <div class="button-group filter-button-group" data-filter-group="categoriesrealisation">

                <ul class="cat_filter" style="padding-top: 4rem;">

                    <!--btn tous-->
                    <a class="filter-button  redlink" id="filter-all">
                        <svg width="80px" height="80px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code" viewBox="0 0 16 16">
                            <path d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8l3.147-3.146zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8l-3.147-3.146z" />
                        </svg>

                        <span class="fw-bolder">TOUS</span>
                    </a>
                    <!-- btn mobile--->
                    <a class="filter-button  redlink" id="filter-mobile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        <span class="fw-bolder">MOBILE</span>
                    </a>

                    <!-- btn web--->
                    <a class=" filter-button redlink" id="filter-web">
                        <svg width="80px" height="80px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window" viewBox="0 0 16 16">
                            <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                            <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z" />
                        </svg>
                        <span class="fw-bolder">WEB</span>
                    </a>
                    <!-- btn e-commerce--->
                    <a class=" filter-button redlink" id="filter-ecommerce">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <span class="fw-bolder">E-COMMERCE</span>
                    </a>
                    <!-- btn autre--->
                    <a class="filter-button  redlink" id="filter-autre">
                        <svg width="80px" height="80px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                        </svg>
                        <span class="fw-bolder">AUTRE</span>
                    </a>

                </ul>

            </div>
        </div>
    </div>




    <div class="grid">

        <?php
        $counter_post = 0;
        if ($realisation_all->have_posts()) : while ($realisation_all->have_posts()) : $realisation_all->the_post(); //var_dump(get_the_terms(get_post(),'categoriesrealisation'));
                $url = get_field('url');
                $title = get_the_title();
                $mission = get_field('mission');
                $img = get_the_post_thumbnail_url(get_the_ID(), 'medium');

        ?>

                <div class=" grid-item flip-card col col-lg-4 col-md-4 m-3 text-center <?php
                                                                                        istop_classes(get_the_id());
                                                                                        ?>" href="<?php the_permalink(); ?>
								">


                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <?php if (!empty($img)) : ?>
                                <img class="img_card" src=" <?= $img ?>">
                            <?php endif; ?>
                            <?php if (empty($img)) : ?>
                                <img class="disabled">
                            <?php endif; ?>

                        </div>
                        <div class="flip-card-back ">
                            <h2><?= $title; ?></h2>
                            <div class="justify-content-center">
                                <p><?= $mission; ?></p>
                            </div>
                            <div>
                                <?php if (!empty($url)) : ?>
                                    <a href="<?= $url ?>" target="_blank"><i class="fas fa-arrow-right"></i> Voir le site</a>
                                <?php endif; ?>


                                <?php if (empty($url)) : ?>
                                    <a class="disabled">&nbsp;</a>
                                <?php endif; ?>
                            </div>
                            <?php /*
                            <div>
                                <a href="<?= get_permalink() ?>"> Voir plus</a>
                            </div>
    */ ?>
                        </div>
                    </div>
                </div>

        <?php
                $counter_post++;

            endwhile;
        endif;
        ?>

    </div>



</div>



<?php get_footer() ?>