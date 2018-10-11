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
    <p>Numéro de l'offre</p> <br>
    <?php echo $IdOffre ?><br>
    <p>Description de l'offre</p><br>
    <form method="post" action="" >
    <input type="text" id="Description" value='<?php $DescriptionOffre?>' name="DescriptionOffre"><br>
    <p>Date de l'offre</p><br>
    <input type="date" id="start" name="DateOffre"
    value="<?php $DateOffre ?>"
    min="2018-01-01" max="2018-12-31" />
    <p>Nom de l'offre</p><br>
    <?php echo $NomOffre ?><br>
    <input type="button" class="btn" value="Valider"><br>
    <input type="button" class="btn" value="Home">
    </form>

</body>
</html>