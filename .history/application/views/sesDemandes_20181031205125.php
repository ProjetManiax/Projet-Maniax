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
                        $(this).attr("alt", "1") 
                    }else{
                    $(this).attr("class", "card container-fluid text-white bg-primary mb-3 ")
                    $(this).attr("alt", "2")
                    }
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
                <div name="sesDemandes" class="card container-fluid" style="width: auto; height: auto; ">
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
                </div>
<?php } ?>
<br>
</body>