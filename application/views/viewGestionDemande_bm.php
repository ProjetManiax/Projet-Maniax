<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des demandes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <img src="<?php $PhotoCateg ?>">
    <p>Numéro de la demande</p> <br>
    <?php echo $IdDemande ?><br>
    <p>Description de la demande</p><br>
    <form method="post" action="" >
    <input type="text" id="DescriptionDemande" value='<?php $DescriptionDemande?>' name="DescriptionDemande"><br>
    <p>Date de la demande</p><br>
    <input type="date" id="start" name="DateDemande"
    value="<?php $DateDemande ?>"
    min="2018-01-01" max="2018-12-31" />
    <p>Nom du service</p><br>
    <?php echo $NomService ?><br>
    <input type="button" class="btn" value="Valider"><br>
    <input type="button" class="btn" value="Home">
    </form>

</body>
</html>