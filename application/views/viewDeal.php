<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Création d'un deal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='../JQuery/jquery-3.1.1.js'></script>
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
                
                $("div[name='mesDemandes']").click
                (function changeColor() {
                    if ($(this).attr("class") == "card container-fluid text-white bg-primary mb-3 " ){
                        $(this).attr("class", "card container-fluid")
                        $(this).attr("alt", "maDemande") 
                    }else{
                    $(this).attr("class", "card container-fluid text-white bg-primary mb-3 ")
                    $(this).attr("alt", "maDemandeCliquee")
                    }
                });

                $("div[name='mesOffres']").click
                (function changeColor() {
                    if ($(this).attr("class") == "card container-fluid text-white bg-primary mb-3 " ){
                        $(this).attr("class", "card container-fluid")
                        $(this).attr("alt", "monOffre")
                    }else{
                    $(this).attr("class", "card container-fluid text-white bg-primary mb-3 ")
                    $(this).attr("alt", "monOffreCliquee")
                    }
                });
                
                $("#valider").click
                (function creerDeal() {
                    var lesClicks = new Array();
                    $("div[name='mesOffres']").each(function( i ) {
                    var alt = $(this).attr("alt");
                        if(alt == "monOffreCliquee"){
                        lesClicks.push($(this).attr("value"));
                        }
                    });
                    $("div[name='mesDemandes']").each(function( i ) {
                    var alt = $(this).attr("alt");
                        if(alt == "maDemandeCliquee"){
                        lesClicks.push($(this).attr("value"));
                        }
                    });
                    $("div[name='sesOffres']").each(function( i ) {
                    var alt = $(this).attr("alt");
                        if(alt == "sonOffreCliquee"){
                        lesClicks.push($(this).attr("value"));
                        }
                    });
                    $("div[name='sesDemandes']").each(function( i ) {
                    var alt = $(this).attr("alt");
                        if(alt == "saDemandeCliquee"){
                        lesClicks.push($(this).attr("value"))
                        }
                    })
                    verificationDeal(lesClicks);
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
<?php
        $success_msg= $this->session->flashdata('success_msg');
        $error_msg= $this->session->flashdata('error_msg');
        if($success_msg){
        ?>
        <div class="alert alert-success">
            <?php echo $success_msg; ?>
        </div>
        <?php
        }
        if($error_msg){
        ?>
        <div class="alert alert-danger">
            <?php echo $error_msg; ?>
        </div>
        <?php
        }
?>
    <div class="row">
        <div class="col-md-5">
            <div>
                <h2 align="center">Mes demandes</h2>
                <?php foreach($lesDemandes as $uneDemande){
                ?><br>

                <div name="mesDemandes" class="card container-fluid" style="width: auto; height: auto; " alt="" value="<?php echo $uneDemande->idDemande ?>">
                    <div class="row">
                        <div class='col-md-2'>
                            <img class="imgResize w-125" src="<?php echo $uneDemande->photoService ?>" >
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

                <?php } ?>
            </div>
        
            <br>
            <div>
                <h2 class="" align="center">Mes offres</h2>
                <?php foreach($lesOffres as $uneOffre){
                ?><br>
                
                <div name="mesOffres" class="card container-fluid" style="width: auto; height: auto; " alt="" value="<?php echo $uneOffre->idOffre ?>">
                    <div class="row">
                        <div class='col-md-2'>
                            <img class="imgResize w-125" src="<?php echo $uneOffre->photoService ?>" >
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
                    <button id="valider" value="valider" class="btn btn-lg btn-primary btn-block text-center bg-success">VALIDER</button>
                </div>

                <hr class="clearfix w-100 d-md-none pb-3">

                <div class="col-md-7">
                <button class="btn btn-lg btn-primary btn-block" onclick="window.location.href='home';">HOME</button>
                </div>
            </div>
        </div>

    </footer>
    <br>&nbsp;
</section>
</body>
</html>