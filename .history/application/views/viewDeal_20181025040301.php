<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Création d'un deal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='../jQuery/jquery-3.1.1.js'></script>
    <script src='../js/myFunctions.js'></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/creationDeal.css">
</head>
<body>
    <div>
        <input type="text" class="col-md-12 bg-light" placeholder="Saisie le texte recherché dans une offre">
    </div>
    <div class="row">
        <div class="col-md-6">
            <div>
                <h2>MES DEMANDES</h2>
                <?php foreach($lesDemandes as $uneDemande){
                ?><br>
                    <div class='col-md-12 bg-light'>
                        <img class="imgResize" src="<?php echo $uneDemande->photoService ?>" alt="" ><?php echo $uneDemande->nomService ?><?php echo $uneDemande->descriptionDemande ?><?php echo $uneDemande->nomService ?>
                    
                    </div>
                <?php } ?>
                
            </div>
            <div>
                <h2 class="">MES OFFRES</h2>
                <?php foreach($lesOffres as $uneOffre){
                ?><br>
                    <div class='col-md-6'>
                        <img class="imgResize" src="<?php echo $uneOffre->photoService ?>" alt="" >
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="col-md-6">
            <div>
            <p>toto</p>
            </div>
            <div>
        
            </div>
        </div>
    </div>
        <div class="row col-md-12 bg-light">
            <a href="home"><button class="btn btn-lg btn-primary btn-block">VALIDER</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="valider"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >Home</button></a>
        </div>  
</body>
</html>