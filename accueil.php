<?php
/*
 Template Name: Page Accueil
*/

get_header();

$realisation_args = array(
	'post_type' => 'realisation',
	'post_status' => 'publish',
	'orderby' => 'date',
	'order' => 'ASC',
);
$realisation_all = new WP_Query($realisation_args);



$titre = get_field("titre");
$apropos = get_field("apropos");


?>




<main>


<div class="container">


	<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner ">
			<div class="carousel-item active">
				<div class="text-center  position_center">
					<h2 class="display-1">Maxence EDET</h2>
					<p class="display-5">Création de site web et de e-commerce</p>
				</div>

			</div>
			<div class="carousel-item ">
				<!-- présentation -->
				<div class="text-center  position_center">

					<div class="row ">
						<div class="col-6 frame ">
							<p>Jeune pationné d’informatique et de déveleppement web.
								jeune entrepreneur n’hesité pas a ma contacter pour vos site internet.</p>
						</div>
						<div class="col-2 ">
							<img class="circle_img" src="https://picsum.photos/300" alt="">
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>












</div>

</main>






















<?php

/*
<!-- section réalisation--> 

	<div class="div2" id="realisations">
		<div class="container">

			<h1>Mes Réalisations - Projets</h1>



			<!-- groupe bouton --->
			<div class="row">
				<div class="col-md-9 col-sm-10 offset-1">

					<div class="button-group filter-button-group" data-filter-group="categoriesrealisation">

						<ul class="cat_filter" style="padding-top: 4rem;">

							<!--btn tous-->
							<a class="filter-button redlink" id="filter-all">
								<svg width="80px" height="80px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code" viewBox="0 0 16 16">
									<path d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8l3.147-3.146zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8l-3.147-3.146z" />
								</svg>

								<span class="btnpurple">TOUS</span>
							</a>
							<!-- btn mobile--->
							<a class="filter-button redlink" id="filter-mobile">
								<svg width="80px" height="80px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
									<path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
									<path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
								</svg>
								<span class="btnpurple">MOBILE</span>
							</a>

							<!-- btn web--->
							<a class="filter-button redlink" id="filter-web">
								<svg width="80px" height="80px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window" viewBox="0 0 16 16">
									<path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
									<path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z" />
								</svg>
								<span class="btnpurple">WEB</span>
							</a>
							<!-- btn autre--->
							<a class="filter-button redlink" id="filter-autre">
								<svg width="80px" height="80px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
									<path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
								</svg>
								<span class="btnpurple">AUTRE</span>
							</a>

						</ul>

					</div>
				</div>
			</div>



			<div class="offset-1">
				<div class="grid row">
					<?php
					$counter_post = 0;
					if ($realisation_all->have_posts()) : while ($realisation_all->have_posts()) : $realisation_all->the_post(); //var_dump(get_the_terms(get_post(),'categoriesrealisation'));
							$url = get_field('url');
							$title = get_the_title();
							$mission = get_field('mission');
							$img = get_the_post_thumbnail_url(get_the_ID(), 'medium');

					?>

							<div class="grid-item  col-md-4 m-3
                          <?php
							istop_classes(get_the_id());
							?>" href="<?php the_permalink(); ?>">




								<?php if (!empty($img)) : ?>
									<img src=" <?= $img ?>">
								<?php endif; ?>


								<?php if (empty($img)) : ?>
									<img class="disabled">
								<?php endif; ?>



								<div class="front_projet">
									<div class="pos_titre"> <?= $title; ?></div>
									<div class="pos_mission"> <?= $mission; ?></div>

								</div>


								<div class="footer-bar">




									<?php if (!empty($url)) : ?>
										<a href="<?= $url ?>" target="_blank"><i class="fas fa-arrow-right"></i> Voir le site</a>
									<?php endif; ?>


									<?php if (empty($url)) : ?>
										<a class="disabled">&nbsp;</a>
									<?php endif; ?>

								</div>


							</div>
					<?php
							$counter_post++;
						endwhile;
					endif;
					?>

				</div>
			</div>
		</div>
	</div>
<!-- section 1-->

	<div class="container">

		<div class="row pt-5  ">


			<!--Partie gauche de la section-->
			<div class="col-12 col-lg-6  ">
				<p class="text-decoration-underline"> A propos</p>
				<p class="pt-5  h2"><?= $apropos ?></p>
			</div>
*/
?>