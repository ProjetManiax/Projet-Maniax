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
    <div class=" container-fluid input-group mb-3 input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text">Rechercher</span>
        </div>
        <input type="text" id="recherche" class="form-control" value="" placeholder="Saisie le texte recherché dans une offre"><br>     
    </div>
<section class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div>
                <h2 align="center">Mes demandes</h2>
                <?php foreach($lesDemandes as $uneDemande){
                ?><br>
            <a href="" class="custom-card">
                <div class="card container-fluid bg-primary" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-2'>
                            <img class="imgResize w-125" src="<?php echo $uneDemande->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-10 px-3'>
                        <div class="card-block px-3">
                        <h6 class="card-title"><?php echo $uneDemande->nomService ?></h6>
                        <p class="card-text"><?php echo $uneDemande->descriptionDemande ?><br>
                        <?php echo $uneDemande->dateDemande ?></p>
                        </div>
                        </div>
                    </div>
                </div>
            </a>
                <?php } ?>
            </div>
        
            <br>
            <div>
                <h2 class="" align="center">Mes offres</h2>
                <?php foreach($lesOffres as $uneOffre){
                ?><br>
                
                <div class="card container-fluid" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-2'>
                            <img class="imgResize w-125" src="<?php echo $uneOffre->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-10 px-3'>
                        <div class="card-block px-3">
                        <h6 class="card-title"><?php echo $uneOffre->nomService ?></h6>
                        <p class="card-text"><?php echo $uneOffre->descriptionOffre ?><br>
                        <?php echo $uneOffre->dateOffre ?></p>
                        </div>
                        </div>
                    </div>
                </div>      
                <?php } ?>
            </div>
        </div>
        <div class="col-md-7 "> 
        <h2 class="" align="center">Les utilisateurs proposant le service </h2><br>
            <div id="lesUsers">
            </div><br>
            <div id="sesDemandes">
            </div><br>
            <div id="sesOffres">    
            </div>
        </div>

    <footer class="page-footer font-small col-md-12 teal pt-4">

        <div class="container-fluid text-center align-item-center">
            <div class="row">
                <div class="col-md-5 ">
                    <a href="home"><button class="btn btn-lg btn-primary btn-block text-center">VALIDER</button></a>
                </div>

                <hr class="clearfix w-100 d-md-none pb-3">

                <div class="col-md-7">
                <a href="home"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >HOME</button></a>
                </div>
            </div>
        </div>

    </footer><br>

</section>
</body>
</html>