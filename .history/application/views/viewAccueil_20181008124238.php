<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='../jQuery/jquery-3.1.1.js'></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleAccueil.css">
</head>
<body>
    <header class="container-fluid header">
		<div class="container">
		<a href="#" class="logo"><img class="imgUser" src="<?php echo $photoUser ?>" alt="" >  <?php echo $nomUser ?></a>
		<nav class="menu">
			<a href="#"> Accueil </a>
			<a href="#divOffres"> Offres </a>
			<a href="#divDemandes"> Demandes </a>
			<a href="#divMesDeals"> Deals </a>
			<a href="#retOffres"> Offres </a>
			<a href="#retDemandes"> Demandes </a>
			<a href="#retDeals"> Deals </a>
			<a href="user_logout"> Deconnexion </a>
		</nav>
        </div>
	</header>
    <section class="container-fluid about">
        <div class="container">
        <div class="row">
        <div id="retOffres">
        <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            <h1>Mes Offres</h1>
            <div id="retOffres">
            <h1>Mes Offres <button type="button" class="btn btn-outline-primary" onclick="window.location.href='adOffre_view', '_blank'">+</button></h1>
            </div>
            <br>
    <p>Voici la liste de ce que je propose</p>
        <?php
        foreach($lesOffres as $uneOffre){
        ?> <p><?php echo $uneOffre->nomService." ".$uneOffre->descriptionOffre." ".$uneOffre->dateOffre ?></p>
        <?php    
        }

    ?>
</div>
    <br>
    <div id="divDemandes">
    <u><h1>Mes Demandes  <a href="adDemande_view"><button class="addButton" value="">+</button></a></h1></u>
    <p>Voici ce dont j'ai besoin</p>
        <?php
        foreach($lesDemandes as $uneDemande){
        ?> <p><?php echo $uneDemande->nomService." ".$uneDemande->descriptionDemande." ".$uneDemande->dateDemande ?></p>
        <?php    
        }

    ?></div>

    <br>

    <u><h1>Mes Deals</h1></u>
    <p>Voici la liste de ce que j'ai échangé</p>
    <div id="divMesDeals"> <?php
        foreach($lesDemandes as $uneDemande){
        ?> <p><?php echo $uneDemande->nomService." ".$uneDemande->dateDemande." ".$uneDemande->descriptionDemande ?></p>
        <?php    
        }

    ?>
    
    
    </div>
    <p></p>

    <br>
</body>
</html>