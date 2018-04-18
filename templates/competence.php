<?php
$thisBanner = 'banner-competence.png';
$pageTitle = "compétences";
 ?>
<div class="template template-competence-page" id="template">
  <?php require_once 'banner.php'; ?>
<div class="container">
  <div class="page-excerpt">
    <p><strong>V</strong>otre satisfaction est notre priorité, alors nous mettons à votre disposition notre savoir-faire afin de répondre au mieux à votre demande</p>
  </div>

<div id="body1">
  <div class="row">
    <div class="col-md-4">
      <div class="square-background background-1">
        <div class="text-content"><p>Besoin d'une</p><p>vidéo</p> <p>marketing ?</p></div>
        <div class="draw">
          <svg  viewBox="0 0 170 60">
            <circle cx="85" cy="30" r="30" fill="#0c4690" />
          </svg>
        </div>
          <a href="<?php echo $siteUrl ?>?p=realisations-video"><div class="see">Voir</div></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="square-background background-2">
        <div class="text-content"><p>Diffuser</p><p>vos</p><p>contenus ?</p></div>
        <svg  viewBox="0 0 170 60">
          <circle cx="85" cy="30" r="30" fill="#0c4690" />
        </svg>
          <a href="<?php echo $siteUrl ?>?p=affichage-ecran"><div class="see">Voir</div></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="square-background background-3">
        <div class="text-content"><p>Animer</p><p> votre</p><p>projet ?</p></div>
        <svg  viewBox="0 0 170 60">
          <circle cx="85" cy="30" r="30" fill="#0c4690" />
        </svg>
          <a href="<?php echo $siteUrl ?>?p=animation"><div class="see">Voir</div></a>
      </div>
    </div>
  </div>
</div>
