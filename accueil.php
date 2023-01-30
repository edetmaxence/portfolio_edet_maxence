<?php
/*
 Template Name: Page Accueil
*/





$prestation_all = prestationAll();
$titre = get_field("titre");
$Soustitre = get_field("Soustitre");
$apropos = get_field("apropos");
$contacts = get_field("contacts");

get_header();

?>

<main>


	<div class="container-fluid">
		<section id="section_bandeau">
			<div class="row">
				<div class="col-lg-12 pt-5 d-none d-lg-block d-md-block">
					<div id="carouselExampleIndicators" class="carousel slide">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						</div>
						<div class="carousel-inner">
							<!--Item 1 logo + prenom/nom + metier-->
							<div class="carousel-item active">
								<div class="text-center">
									<h2 class="display-1 color_gold"><?= $titre; ?></h2>
									<span class="display-5 color_gold"> <?= $Soustitre; ?></span>

								</div>
								<div class="container pt-5">
									<div class="row text-center display-5 ">
										<div class="col-lg-6">
											<a href="tel: <?= $contacts["telephone"]; ?>">
												<i class="bi bi-telephone-outbound"></i>
												<?= $contacts["telephone"]; ?>
											</a>
										</div>
										<div class="col-lg-6">
											<a href="mailto: <?= $contacts["email"]; ?>">
												<i class="bi bi-envelope-at"></i>
												<?= $contacts["email"]; ?>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!--Item 2 description + photo de beau gosse-->
							<div class="carousel-item">
								<div class="justify-content-center d-flex ">

									<div class="frame">
										<p><?= $apropos; ?></p>
									</div>

									<div>
										<img class="circle_img" src="https://picsum.photos/300">
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php // get_the_post_thumbnail();?>
				</div>
			</div>
			<div class="d-flex d-lg-none">
				<div class="row text-center">
					<div class="col-6">


						<!--Item 1 logo + prenom/nom + metier-->

						<div class="p-3">
							<h2 class="display-1">Maxence EDET</h2>
							<p class="display-5 color_gold">Création de site web et de e-commerce</p>

						</div>
						<div>
							<img class="circle_img" src="https://picsum.photos/300" alt="photo_beau_gosse">
						</div>
						<div class="frame col mt-4">
							<p>Jeune pationné d’informatique et de déveleppement web.
								jeune entrepreneur n’hesité d-lg-flex justify-content-centerpas a ma contacter pour vos site internet.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="prestations">
			<div class="container">
				<div class="text-center">
					<span class="color_gold display-4">Préstations</span>
				</div>
				<div class="d-lg-flex justify-content-center">
					<?php
					$count_post = 0;
					if ($prestation_all->have_posts()) :	while ($prestation_all->have_posts()) : $prestation_all->the_post();
							$titrePresta = get_the_title();
							$contentPresta = get_the_content();
					?>
							<div class="card text-center mb-2 bg_frame_prestation">

								<div class="card-body ">
									<h2 class="card-title color_gold  "><?= $titrePresta; ?></h2>
									<p class="card-text pt-4 text-start">
										<?= $contentPresta; ?>
									</p>

								</div>

							</div>
					<?php endwhile;
					endif;
					$count_post++;
					?>
				</div>
			</div>
		</section>
		

	</div>


</main>
<?php get_footer() ?>
