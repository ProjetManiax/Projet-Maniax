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
    <h1 align=center>Gestion d'une offre</h1><br><br>
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
    <div class='row'>
        <div class='col-sm-6'><br>
            <img class="" src="<?php echo $photoService ;?>" alt="">           
        </div>
        <div class='col-sm-6'>
            <form role="form" method="post" action="<?php echo base_url('user/set_offre'); ?>">
                    <fieldset>
                        <div class="form-group">
                        <label>NUMERO DE L'OFFRE</label>
                            <input class="form-control" name="idOffre" type="text" value='<?php echo $idOffre ;?>' readonly="readonly">
                        </div>

                        <div class="form-group">
                        <label>DESCRIPTION DE L'OFFRE</label>
                            <input class="form-control"  name="descriptionOffre" type="text" value="<?php echo $descriptionOffre ;?>" required minlength="10" autofocus>
                        </div>

                        <div class="form-group">
                        <label>DATE DE L'OFFRE</label>
                            <input class="form-control"  name="dateOffre" type="date" value="<?php echo $dateOffre ;?>" required>
                        </div>
                        
                        <div class="form-group">
                        <label>NOM DU SERVICE</label><br>
                        <input class="form-control" name="nomService" type="text" value='<?php echo $nomService ;?>' readonly="readonly">
                        </div><br>

                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Modifier" name="register" ><br>
                    </fieldset>
                </form>
                    <a href="home"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >Home</button></a>
                
        </div>
    </div>
</div>
</body>
</html>