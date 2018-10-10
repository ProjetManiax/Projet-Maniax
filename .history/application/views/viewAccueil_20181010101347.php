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
            <div id="divOffres" class='row'>    
        <?php foreach($lesOffres as $uneOffre){
                ?>
            <form role="form" id="formOffre" method="post" action="<?php echo base_url('user/setOffre_view'); ?>">
                <div class="card" style="width: 18rem;">
                <div class="card-header">
                <h5><?php echo $uneOffre->nomService?>
                <a href="setOffre_view" >
                <img align=right class="imgResize" src="../images/Edit.ico" onclick="document.getElementById('formOffre').submit(); return false;"></a></h5></div>
                <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $uneOffre->dateOffre?></h6>
                <p class="card-text"><?php echo $uneOffre->descriptionOffre?></p>
                </div>
                </div>

                <input type="hidden" name="idOffre" value="<?php echo $uneOffre->idOffre ?>">
                <input type="hidden" name="descriptionOffre" value="<?php echo $uneOffre->descriptionOffre ?>">
                <input type="hidden" name="dateOffre" value="<?php echo $uneOffre->dateOffre ?>">
                <input type="hidden" name="nomService" value="<?php echo $uneOffre->nomService ?>">
                <input type="hidden" name="photoService" value="<?php echo $uneOffre->photoService ?>">
            </form>
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
            <form role="form" id="formDemande" method="post" action="<?php echo base_url('user/setDemande_view'); ?>">
                <div class="card" style="width: 18rem;">
                <div class="card-header"><h5><?php echo $uneDemande->nomService?>
                <a href="setDemande_view" >
                <img align=right class="imgResize" src="../images/Edit.ico" onclick="document.getElementById('formDemande').submit(); return false;"></a></h5></div>
                <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $uneDemande->dateDemande?></h6>
                <p class="card-text"><?php echo $uneDemande->descriptionDemande?></p>
                </div>
                </div>

                <input type="hidden" name="idDemande" value="<?php echo $uneDemande->idDemande ?>">
                <input type="hidden" name="descriptionDemande" value="<?php echo $uneDemande->descriptionDemande ?>">
                <input type="hidden" name="dateDemande" value="<?php echo $uneDemande->dateDemande ?>">
                <input type="hidden" name="nomService" value="<?php echo $uneDemande->nomService ?>">
                <input type="hidden" name="photoService" value="<?php echo $uneDemande->photoService ?>">
            </form>
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
                    <div class="card-body" align='center'>
                        <h5 class="card-title">Nom :</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" align='center' >Service1 : </li>
                        <li class="list-group-item" align='center' >vs </li>
                        <li class="list-group-item" align='center' >Service2</li>
                        <li class="list-group-item" align='center' >Date : </li>
                        <li class="list-group-item" align='center' >Note :</li>
                    </ul>
                    <div class="card-body" align='center'>
                        <button href="#" class="btn btn-primary lg">Afficher</button>
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