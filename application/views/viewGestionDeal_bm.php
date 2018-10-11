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
    <p>Numéro du Deal</p> <br>
    <?php echo $IdDeal ?><br>
    <p>Votre service</p><br>
    <?php echo $NomService1 ?><br>
    <p>Service de <?php echo $nomUser ?></p><br>
    <?php $NomService2 ?><br>
    <p> Votre note</p>
    <form method="post" action="" >
    <input type="text" id="Description" value='<?php $NoteUser1?>' name="NoteDeal"><br>
    <p>la note de <?php echo $nomUser ?></p><br>
    <?php $noteUser2?>
    <input type="button" class="btn" value="Valider"><br>
    <input type="button" class="btn" value="Home">
    </form>

</body>
</html>