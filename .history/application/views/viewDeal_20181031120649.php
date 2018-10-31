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
    <script>
    $(document).ready(function() 
            {   

                $("#recherche").keypress
                (function(){
                    rechercheUserForService($(this).val());
                    });
                
            }
        );
    </script>
</head>
<body>
<div class="container-fluid">

    <div class="input-group mb-3 input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text">Rechercher</span>
        </div>
        <input type="text" id="recherche" class="form-control" value="" placeholder="Saisie le texte recherché dans une offre"><br>     
    </div>
    <div class="row">
        <div class="col-md-5">
            <div>
                <h2 align="center">MES DEMANDES</h2>
                <?php foreach($lesDemandes as $uneDemande){
                ?><br>
            <section>
                <div class="card" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-3 bg-warning'>
                            <img class="imgResize w-100" src="<?php echo $uneDemande->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-9 px-3'>
                        <div class="card-block px-3">
                        <h6 class="card-title"><?php echo $uneDemande->nomService ?></h6>
                        <p class="card-text"><?php echo $uneDemande->descriptionDemande ?><br>
                        <?php echo $uneDemande->dateDemande ?></p>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
                <?php } ?>
            </div>
        
            <br>
            <div>
                <h2 class="" align="center">MES OFFRES</h2>
                <?php foreach($lesOffres as $uneOffre){
                ?><br>
                <div class="card" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-3 bg-warning' >
                            <img class="imgResize" src="<?php echo $uneOffre->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-9 bg-success'>
                            <h5><?php echo $uneOffre->nomService ?></h5>
                            <?php echo $uneOffre->descriptionOffre ?><br>
                            <h6><?php echo $uneOffre->dateOffre ?></h6>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-7 bg-secondary">
            <div id="lesUsers">
            </div>
            <div id="sesDemandes">
            </div>
            <div id="sesOffres">    
            </div>
        </div>
        <div class="row col-md-5 bg-secondary">
            <div><a href="home"><button class="btn btn-lg btn-primary btn-block">VALIDER</button></a></div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div><a href="home"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >Home</button></a></div>
        </div>

</body>
</div>
</html>