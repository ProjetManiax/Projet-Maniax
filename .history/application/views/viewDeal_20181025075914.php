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
                 
                $(".photoUser").click
                (function(){
                    alert('toto');
                        //getOffres($(this).attr('value'));
                        //getDemandes($(this).attr('value'));
                    });
                
            }
        );
    </script>
</head>
<body>
    <div>
        <input type="text" id="recherche" onkeypress="rechercheUserForService($(this).val());" class="col-md-12 bg-light" value="" placeholder="Saisie le texte recherché dans une offre"><br>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div>
                <h2 align="center">MES DEMANDES</h2>
                <?php foreach($lesDemandes as $uneDemande){
                ?><br>
                <div class="card" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-2 bg-warning'>
                            <img class="imgResize" src="<?php echo $uneDemande->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-10 bg-success'>
                            <h5><?php echo $uneDemande->nomService ?></h5>
                            <?php echo $uneDemande->descriptionDemande ?><br>
                            <h6><?php echo $uneDemande->dateDemande ?></h6>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <br>
            <div>
                <h2 class="" align="center">MES OFFRES</h2>
                <?php foreach($lesOffres as $uneOffre){
                ?><br>
                <div class="card" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-2 bg-warning'>
                            <img class="imgResize" src="<?php echo $uneOffre->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-10 bg-success'>
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
            <div>
                <h2 class="" align="center">Les demandes de ...</h2>
            </div>
            <div>
                <h2 class="" align="center">Les offres de ...</h2>    
            </div>
        </div>
        <div class="row col-md-5">
            <div><a href="home"><button class="btn btn-lg btn-primary btn-block">VALIDER</button></a></div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div><a href="home"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >Home</button></a></div>
        </div>
</body>
</html>