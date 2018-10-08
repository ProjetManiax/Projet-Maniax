<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Ajout d'une demande</title><br><br><br>
</head>
<body>

<div class='container'>
        <h1 align=center>Création d'une nouvelle demande</h1><br><br>
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
            <div class='col-sm-6'>
                <form role="form" method="post" action="<?php echo base_url('user/register_demande'); ?>">
                    <fieldset>
                        <div class="form-group">
                        <label>NUMERO DE LA DEMANDE</label>
                            <input class="form-control" name="idDemande" type="text" value='<?php echo ($maxDemande[0]->derniereDemande)+1 ;?>' readonly="readonly">
                        </div>

                        <div class="form-group">
                        <label>DESCRIPTION DE LA DEMANDE</label>
                            <input class="form-control"  name="descriptionDemande" type="text" value="" required minlength="10" autofocus>
                        </div>

                        <div class="form-group">
                        <label>DATE DE LA DEMANDE</label>
                            <input class="form-control" name="date" type="dateDemande" value="" required>
                        </div>

                        <div class="form-group">
                        <label>NOM DU SERVICE</label><br>
                        <select name="service" class='col-sm-12'>
                            <?php  
                                foreach($allServices as $unService){
                                ?>      
                                <option value="<?php echo $unService->idService?>"><?php echo $unService->nomService?></option>       
                                <?php } ?>
                                </select>   
                        </div><br>

                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Valider" name="register" ><br>

                    </fieldset>
                </form>
                        <a href="home"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >Home</button></a>
            </div>
            <div class='col-sm-6'><br>
                <img class="" src="https://images.pexels.com/photos/34950/pexels-photo.jpg?auto=compress&cs=tinysrgb&h=350" alt="">
            </div>
    </div>
</div>
</body>
</html>