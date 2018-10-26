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
    <div>
        <input type="text" id="recherche" class="col-md-12 bg-light" value="" placeholder="Saisie le texte recherché dans une offre"><br>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div>
                <h2 align="center">MES DEMANDES</h2>
                <?php foreach($lesDemandes as $uneDemande){
                ?><br>

                <div id="carbonads"><span><span class="carbon-wrap"><a href="//srv.carbonads.net/ads/click/x/GTND42QWCTBIK2JWCKA4YKQMCEYDV5QUC6BDLZ3JCWBDT23YC6BDK5QKC6BIVK3MCASDEK3EHJNCLSIZ?segment=placement:getbootstrapcom;" class="carbon-img" target="_blank" rel="noopener"><img src="https://cdn4.buysellads.net/uu/1/21673/1539380068-Slack-green_logo.png" alt="" border="0" height="100" width="130" style="max-width: 130px;"></a><a href="//srv.carbonads.net/ads/click/x/GTND42QWCTBIK2JWCKA4YKQMCEYDV5QUC6BDLZ3JCWBDT23YC6BDK5QKC6BIVK3MCASDEK3EHJNCLSIZ?segment=placement:getbootstrapcom;" class="carbon-text" target="_blank" rel="noopener">All the tools your team needs in one place. Slack: Where work happens.</a></span><a href="http://carbonads.net/?utm_source=getbootstrapcom&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=carbon" class="carbon-poweredby" target="_blank" rel="noopener">ads via Carbon</a><img src="https://ad.doubleclick.net/ddm/trackimp/N32602.3091281BUYSELLADS/B21259774.231406603;dc_trk_aid=429109586;dc_trk_cid=107228577;ord=154057718;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?" border="0" height="1" width="1" style="display: none;"></span></div>


                <div class="card" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-3 bg-warning'>
                            <img class="imgResize" src="<?php echo $uneDemande->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-9 bg-success'>
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
                        <div class='col-md-3 bg-warning'>
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
            <h2 class="" align="center">Les demandes de <p name="nomUser"></p></h2>
            <div id="sesDemandes">
            </div>
            <h2 class="" align="center">Les offres de <p name="nomUser">toto</p></h2>
            <div id="sesOffres">    
            </div>
        </div>
        <div class="row col-md-5 bg-secondary">
            <div><a href="home"><button class="btn btn-lg btn-primary btn-block">VALIDER</button></a></div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div><a href="home"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >Home</button></a></div>
        </div>
</body>
</html>