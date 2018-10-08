<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Ajout d'une offre</title><br><br><br>
</head>
<body>
<div class='container'>
    <h1 align=center>Création d'une nouvelle offre</h1><br><br>
    <div class='row'>
        <div class='col-sm-6'><br>
            <img class="" src="https://images.pexels.com/photos/34950/pexels-photo.jpg?auto=compress&cs=tinysrgb&h=350" alt="">           
        </div>
        <div class='col-sm-6'>
            <form role="form" method="post" action="<?php echo base_url('user/register_offre'); ?>">
                    <fieldset>
                        <div class="form-group">
                        <label>NUMERO DE L'OFFRE</label>
                            <input class="form-control" name="idOffre" type="text" value='<?php  ?>' disabled>
                        </div>

                        <?php echo $maxOffre[0]->derniereOffre  ; ?>

                        <div class="form-group">
                        <label>DESCRIPTION DE L'OFFRE</label>
                            <input class="form-control"  name="descriptionOffre" type="text" value="" required minlength="10" autofocus>
                        </div>

                        <div class="form-group">
                        <label>DATE DE L'OFFRE</label>
                            <input class="form-control"  name="date" type="date" value="" required>
                        </div><br><br>

                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Valider" name="register" ><br>
                    </fieldset>
                </form>
                    <a href="home"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >Home</button></a>
                
        </div>
    </div>
</div>
</body>
</html>