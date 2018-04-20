<?php
$thisBanner = 'banner1.png';

?>
<!-- https://www.youtube.com/embed/w6inwhj21vc?rel=0&amp;controls=0&amp;showinfo=0 -->

<div id="template" class="template template-home-page">
	<div class="home-video text-center">
		<iframe width="960" height="540" src="https://www.youtube.com/embed/G7J6DVDFWJI?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
	<div class="body-home" id="body-home">
		<div class="container">
			<h2>Nos compétences</h2>
			<div class="row">
				<div class="col-md-4">

					<a href="<?php echo $siteUrl ?>?p=affichage-ecran">
						<div class="competences screen">
							<div class="title-bkg">
        						<div class="bkg">
          							<img src="img/picto_totem.png" alt="picto-ecran">
        						</div>
      						</div>
        					<h5>écran vidéo</h5>
						</div>
					</a>
				</div>
				<div class="col-md-4">

					<a href="<?php echo $siteUrl ?>?p=realisations-video">
						<div class="competences video">
							<svg  viewBox="0 0 290 30">
								<circle cx="145" cy="-10" r="30" fill="white" />
								<img src="img/Artboard-2.png">
							</svg>
							<h5>Réalisation vidéo</h5>
						</div>
					</a>
				</div>
				<div class="col-md-4">

					<a href="<?php echo $siteUrl ?>?p=animation">
						<div class="competences animation">
							<svg  viewBox="0 0 290 30">
								<circle cx="145" cy="-10" r="30" fill="white" />
								<img src="img/Artboard-3.png">
							</svg>
							<h5>Animation 3D</h5>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="subline">
					<p>Ensemble sublimons vos vidéos</p>
				</div>
			</div>
		</div>
	</div>

</div>
