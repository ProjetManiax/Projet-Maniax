<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='jQuery/jquery-3.1.1.js'></script>
    <script src='JS/fonctions.js'></script>
    <link rel="stylesheet" href="BS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/styleAccueil.css">
</head>
<body>
    <header class="container-fluid header">
		<div class="container">
		<a href="#" class="logo">NOM PRENOM PHOTO</a>
		<nav class="menu">
			<a href="#"> Accueil </a>
			<a href="#about"> Offres </a>
			<a href="#join"> Demandes </a>
			<a href="#staff"> Deals </a>
			<a href="#"> Deconnexion </a>
		</nav>
	</header>
    <h1>Mes Offres</h1>
    <p>Voici la liste de ce que je propose</p>
    <div id="divOffres">    <?php
        foreach($lesOffres as $uneOffre){
        ?> <p><?php echo $uneOffre->nomService." ".$uneOffre->dateOffre." ".$uneOffre->descriptionOffre ?></p>
        <?php    
        }

    ?>
</div>
    <br>

    <h1>Mes Demandes</h1>
    <p>Voici ce dont j'ai besoin</p>
    <div id="divDemandes">    <?php
        foreach($lesDemandes as $uneDemande){
        ?> <p><?php echo $uneDemande->nomService." ".$uneDemande->dateDemande." ".$uneDemande->descriptionDemande ?></p>
        <?php    
        }

    ?></div>

    <br>

    <h1>Mes Deals</h1>
    <p>Voici la liste de ce que j'ai échangé</p>
    <div id="divMesDeals"></div>
    <p></p>

    <br>
</body>
</html>