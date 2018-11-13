<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ses demandes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='../jQuery/jquery-3.1.1.js'></script>
    <script src='../js/myFunctions.js'></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/creationDeal.css">
    <script>
    $(document).ready(function() 
            {   

                $("div[name='sesDemandes']").click
                (function changeColor() {
                    if ($(this).attr("class") == "card container-fluid text-white bg-primary mb-3 " ){
                        $(this).attr("class", "card container-fluid")
                        $(this).attr("alt", "saDemande") 
                    }else{
                    $(this).attr("class", "card container-fluid text-white bg-primary mb-3 ")
                    $(this).attr("alt", "saDemandeCliquee")
                    }
                });

                $("#valider").click
                (function creerDeal() {
                    $("div[name='sesDemandes']").each(function( i ) {
                    var alt = $(this).attr("alt");
                        if(alt == "saDemandeCliquee"){
                        alert($(this).attr("value"));
                        }
                    })
                });

            }
        );
    </script>
</head>
<body>
<?php 
    echo "<div align=center><h2 class='enligne' align='center'>Les demandes de <p class='enligne' name='nomUser'></p></h2></div><br>";
    foreach($sesDemandes as $uneDemande){
            ?><br>
                <div name="sesDemandes" class="card container-fluid" style="width: auto; height: auto;" alt="" value="<?php echo $uneDemande->idDemande ?>">
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
                </div>
<?php } ?>
<br>
</body>