<?php /*Template page d'accueil*/
if (isset($_GET['p'])) {
  $pageUrl = $_GET['p'];
}else{
  $pageUrl = 'accueil';
}


require('includes.php');
include ('header.php');
if ($pageUrl == 'accueil' OR $pageUrl==null) {
  include 'templates/home.php';
}
if ($pageUrl == 'agence') {
  include('templates/agence.php');
}
if ($pageUrl == 'competence') {
  include('templates/competence.php');
}
if ($pageUrl == 'nos-realisations') {
  include('templates/testimonial.php');
}
if ($pageUrl == 'contact') {
  include('templates/contact.php');
}
if ($pageUrl == 'realisations-video') {
  include('templates/videos.php');
}
if ($pageUrl == 'affichage-ecran') {
  include('templates/affichage.php');
}
if ($pageUrl == 'animation') {
  include('templates/animation.php');
}
if ($pageUrl == 'equipe') {
  include('templates/equipe.php');
}
if ($pageUrl == 'boutique') {
  include('templates/shop.php');
}



include 'footer.php';
 ?>

