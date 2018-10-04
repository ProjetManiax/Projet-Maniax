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
		<a href="#" class="logo">NOM PRENOM PHOTO</a>
		<nav class="menu">
			<a href="#"> Accueil </a>
			<a href="#divOffres"> Offres </a>
			<a href="#divDemandes"> Demandes </a>
			<a href="#divMesDeals"> Deals </a>
			<a href="user_logout"> Deconnexion </a>
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
    <div id="divMesDeals">
    <?php echo $this->session->set_userdata($sessionData[idUser];?>
    </div>
    <p></p>

    <br>
</body>
</html>