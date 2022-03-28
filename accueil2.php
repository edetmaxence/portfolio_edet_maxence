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






<!-- section 1-->
<header>
	<div class="container">

		<div class="row offset-1">


			<!--Partie gauche de la section-->
			<div class="col-md-5  ">
				<div class="row">
					<h1> A propos</h1> 

				</div>
				<div class="row" style="padding-top:4rem;">

					<div class="col-md-8 police_akkurat">
						<h2><?= $apropos?></h2>
					</div>

				</div>
			</div>

			<!--Partie droite de la section-->
			<div class="col-md-6 ">
				<div class="row">
					<h1> Mes compétences</h1> 
				</div>

				<!-- SKILLS 1-->
				<div class="row" style="padding-top:4rem;">
					<div class="col-3 ">
						<h4>PHP, Mysql, Wordpress</h4>
					</div>
					<div class="col-6 ">
						<div style="padding-top: 0.5rem;">
							<div class="w3-border">
								<div class="w3-grey" style="height:24px;width:80%"></div>
							</div>

						</div>
					</div>

					<div class="col-1 ">
						<h4>80%</h4>
					</div>
				</div>
				<!-- SKILLS 2-->
				<div class="row" style="padding-top:4rem;">
					<div class="col-3 ">
						<h4>HTML, CSS, JS, BOOTSTRAP</h4>
					</div>
					<div class="col-6 ">
						<div style="padding-top: 0.5rem;">
							<div class="w3-border">
								<div class="w3-grey" style="height:24px;width:70%"></div>
							</div>

						</div>
					</div>

					<div class="col-1 ">
						<h4>70%</h4>
					</div>
				</div>

			</div>
		</div>

		<div class="row offset-1" style="padding-top:2rem;">
			<h1>Formations</h1>
		</div>

		
	</div>

</header>
<main>
	<!-- timeline Formations-->
	<div class="row offset-3" style="padding-top:2rem;">
			<div class="col-md-6">

				<div class="timeline">
					<!--  bac + 4/5 -->
					<div class="timeline__group">
						<span class="timeline__year time" aria-hidden="true">2021-2023</span>
						<div class="timeline__cards">
							<div class="timeline__card card">
								<header class="card__header">

									<h3 class="card__title r-title">bac+ 4 /+5 - Epsi Lyon</h3>
								</header>

								<div class="card__content">
									<p>Expert en informatique et système d’information, titre RNCP de nv 7</p>
								</div>
							</div>
						</div>
					</div>
					<!-- stage bac +3 album -->
					<div class="timeline__group">
						<span class="timeline__year time" aria-hidden="true">2021</span>
						<div class="timeline__cards">
							<div class="timeline__card card">
								<header class="card__header">
									<time class="time" datetime="2021">
										<span class="time__month">Mai-Juil</span>
									</time>
									<h3 class="card__title r-title">Agence Album Mâcon - Stage bac+3</h3>
								</header>

								<div class="card__content">
									<p>Développement du nouveau site web de l’agence avec wordpress. Gestion du back office, utilisation d’ACF et modèle de page custom</p>
								</div>
							</div>
						</div>
					</div>
					<!--  bac + 3 -->
					<div class="timeline__group">
						<span class="timeline__year time" aria-hidden="true">2020-2021</span>
						<div class="timeline__cards">
							<div class="timeline__card card">
								<header class="card__header">
									<h3 class="card__title r-title">bac+ 3 - Epsi Lyon</h3>
								</header>
								<div class="card__content">
									<p>Concepteur et développeur d’applications, titre RNCP de nv 6</p>
								</div>
							</div>
						</div>
					</div>
					<!--  bts sio -->
					<div class="timeline__group">
						<span class="timeline__year time" aria-hidden="true">2018-2020</span>
						<div class="timeline__cards">
							<div class="timeline__card card">
								<header class="card__header">

									<h3 class="card__title r-title">BTS SIO - Lycéé Lamartine Mâcon</h3>
								</header>

								<div class="card__content">
									<p>Option Solutions Logicielles et Applications Métiers</p>
								</div>
							</div>
						</div>
					</div>
					<!-- stage bts 2 eme année-->
					<div class="timeline__group">
						<span class="timeline__year time" aria-hidden="true">2020</span>
						<div class="timeline__cards">
							<div class="timeline__card card">
								<header class="card__header">
									<time class="time" datetime="2021">
										<span class="time__month">Mars-avril</span>
									</time>
									<h3 class="card__title r-title">MJC héritant Mâcon- Stage 2ème année BTS SIO</h3>
								</header>

								<div class="card__content">
									<p>Reprise d’un site web avec wordpress</p>
								</div>
							</div>
						</div>
					</div>
					<!-- stage bts 1 eme année-->
					<div class="timeline__group">

						<span class="timeline__year time" aria-hidden="true">2019</span>
						<div class="timeline__cards">
							<div class="timeline__card card">
								<header class="card__header">
									<time class="time" datetime="2021">
										<span class="time__month">Mai-juillet</span>
									</time>
									<h3 class="card__title r-title">Qualup SAS Lugny -Stage 1ère année BTS SIO</h3>
								</header>

								<div class="card__content">
									<p>Programmation python sur raspberry pi 3. </p>
								</div>
							</div>
						</div>
					</div>
					<!--  bac pro  -->
					<div class="timeline__group">
						<span class="timeline__year time" aria-hidden="true">2015-2018</span>
						<div class="timeline__cards">
							<div class="timeline__card card">
								<header class="card__header">

									<h3 class="card__title r-title">Bac Pro SEN - LPP St Joseph Bourg-en-bresse</h3>
								</header>

								<div class="card__content">
									<p>Option Audio Visuel et Multimédia</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Madagascar-->
					<div class="timeline__group">

						<span class="timeline__year time" aria-hidden="true">2018</span>
						<div class="timeline__cards">
							<div class="timeline__card card">
								<header class="card__header">
									<time class="time" datetime="2021">
										<span class="time__month">12-26 octobre</span>
									</time>
									<h3 class="card__title r-title">Association ECD 01 - Mission humanitaire à Madagascar</h3>
								</header>

								<div class="card__content">
									<p>Installations de plusieurs salles informatiques dans des écoles.. </p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

<!-- section 2-->
<div class="div2" id="realisations">
		<div class="container-fluid">
		
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

</main>

	
