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
		    <p class="logo"><img class="imgResize" src="<?php echo $photoUser ?>" alt="" >  <?php echo $nomUser ?></p>
		    <nav class="menu">
			<a href="#"> Accueil </a>
			<a href="#retOffres"> Offres </a>
			<a href="#retDemandes"> Demandes </a>
			<a href="#retDeals"> Deals </a>
			<a href="user_logout"> Deconnexion </a>
		</nav>
        </div>
	</header>
    <section class="container-fluid about">
        <div class="container">
        <div id="retOffres">
        <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            <div id="retOffres">
            <h1>Mes Offres <button type="button" class="btn btn-outline-primary" onclick="window.location.href='adOffre_view', '_blank'">+</button></h1>
            </div>
            <br>
            <p>Voici la liste de ce que je propose</p>
            <div id="divOffres">    
            <?php foreach($lesOffres as $uneOffre){
                ?><br>
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title"><?php echo $uneOffre->nomService?></h5><a href="setOffre_view" ><img class="imgResize" src="../images/Edit.ico"></a>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $uneOffre->dateOffre?></h6>
                <p class="card-text"><?php echo $uneOffre->descriptionOffre?></p>
                </div>
                </div>
            <?php } ?>
            
            </div>
        </article>
    <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
        <br><br>
        <div id="retDemandes">
        <h1>Mes Demandes <button type="button" class="btn btn-outline-primary" onclick="window.location.href='adDemande_view', '_blank'">+</button></h1>
        </div>
        <br>
        <p>Voici ce dont j'ai besoin</p>
        <br>
        <div id="divDemandes">    
            <?php foreach($lesDemandes as $uneDemande){
                ?><br>
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title"><?php echo $uneDemande->nomService?></h5><a href="setDemande_view" ><img style='vertical-align:sub' class="imgResize" src="../images/Edit.ico"></a>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $uneDemande->dateDemande?></h6>
                <p class="card-text"><?php echo $uneDemande->descriptionDemande?></p>
                </div>
                </div>
            <?php } ?>
            
            </div>
    </article>
    <div class="row">
    <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
        <br><br>
        <div id="retDeals">
        <h1>Mes Deals <button type="button" class="btn btn-outline-primary" onclick="window.location.href='test', '_blank'">+</button></h1>
        </div>
        <br>
        <p>Voici la liste de ce que j'ai échangé</p>
        <br>
        <div id="divMesDeals">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://image.noelshack.com/fichiers/2018/22/4/1527779776-avatar2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
        </div>
    </article>        
        </div>
        </div>
    </section>
    

    <br>
</body>
</html>