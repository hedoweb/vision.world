<?php /*template for Header*/ ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Accueil | Vision World</title>
		<link rel="stylesheet" href="<?php echo $siteUrl ?>/css/main.css">
		<link rel="stylesheet" href="<?php echo $siteUrl ?>/css/normalize.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

		<link rel="stylesheet" href="<?php echo $siteUrl ?>/css/app.css">
	</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div id="navigation-head">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="<?php echo $siteUrl ?>?p=accueil" class="navbar-brand"><img src="img/logo.png" alt="logo vision world"></a>
				</div> <!-- .navbar-header -->
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo $siteUrl ?>?p=agence">Agence</a></li>
						<li><a href="<?php echo $siteUrl ?>?p=competence">Compétences</a></li>
						<li><a href="<?php echo $siteUrl ?>?p=nos-realisations">Réalisations</a></li>
						<li><a href="<?php echo $siteUrl ?>?p=equipe">équipe</a></li>
						<li><a href="<?php echo $siteUrl ?>?p=boutique">Shop</a></li>
						<li><a href="<?php echo $siteUrl ?>?p=contact">Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div ><!-- #navigation-head -->
		</nav> <!-- .navbar-fixed-top -->
