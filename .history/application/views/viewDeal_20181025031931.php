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
</head>
<body>
    <div>
        <input type="text" class="col-md-12 bg-light" placeholder="Saisie le texte recherché dans une offre">
    </div>
    <div>
        <div>
            <h2>MES DEMANDES</h2>
            <?php foreach($lesDemandes as $uneDemande){
                ?><br>
                <div class='col-md-6'>
                <div class="card" style="width: auto; height: auto;">
                    <div class="card-header">
                    <h5><?php echo $uneDemande->nomService?>
                    <img title="Modifier la demande" name='demande' value='<?php echo $uneDemande->idDemande ?>' align=right class="imgResize" src="../images/Edit.ico" ></h5>
                    </div>
                <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $uneDemande->dateDemande?></h6>
                <p class="card-text"><?php echo $uneDemande->descriptionDemande?></p>
                </div>
                </div><br>
                </div>
            <?php } ?>
        </div>
        <div>
            <h2 class="">MES OFFRES</h2>
            <?php foreach($lesOffres as $uneOffre){ ?> <br>
            <div class='col-md-4'>
            <div class="card" style="width: auto; height: auto; ">
                <div class="card-header">
                    <h5><?php echo $uneOffre->nomService?>
                    <img title="Modifier l'offre" name='offre' value='<?php echo $uneOffre->idOffre ?>' align=right class="imgResize" src="../images/Edit.ico"></h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $uneOffre->dateOffre?></h6>
                    <p class="card-text"><?php echo $uneOffre->descriptionOffre?></p>
                </div>
            </div><br>  
            </div>
        <?php } ?>
        </div>
    </div>
    <div>
        <div>
        
        </div>
        <div>
    
        </div>
    </div>
    
</body>
</html>