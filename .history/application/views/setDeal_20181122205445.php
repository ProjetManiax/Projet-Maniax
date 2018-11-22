<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Gestion du deal</title><br><br><br>
</head>
<body>

<div class='container'>
        <h1 align=center>Gestion du deal</h1><br><br>
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
                <form role="form" method="post" action="<?php echo base_url('user/set_deal'); ?>">
                    <fieldset>
                        <div class="form-group">
                        <label>NUMERO DU DEAL</label>
                            <input class="form-control" name="idDeal" type="text" value='<?php echo $_SESSION['deal'][0]->idDeal ;?>' readonly="readonly">
                        </div>

                        <div class="form-group">
                        <label>VOTRE SERVICE</label>
                            <input class="form-control"  name="descriptionService1" type="text" value="" readonly="readonly">
                        </div>

                        <div class="form-group">
                        <label>SERVICE DE : <?php echo $_SESSION['deal'][0]->nomUser ?></label>
                            <input class="form-control" name="descriptionService2" type="text" value="<?php echo $_SESSION['deal'][0]->nomService ?>" readonly="readonly">
                        </div>

                        <div class="form-group">
                        <label>VOTRE NOTE</label><br>
                        <input class="form-control" name="maNote" type="number" min="1" max="20" value="<?php echo $_SESSION['deal'][0]->noteUser1 ?>" autofocus> 
                        </div>
                        
                        <div class="form-group">
                        <label>LA NOTE DE : <?php echo $_SESSION['deal'][0]->nomUser ?></label><br>
                        <input class="form-control" name="saNote" type="number" value="<?php echo $_SESSION['deal'][0]->noteUser2 ?>" readonly="readonly"> 
                        </div><br>
                 

                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Modifier" name="register" ><br>

                    </fieldset>
                </form>
                        <a href="home"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >Home</button></a>
            </div>
            <div class='col-sm-6'><br>
                <img src="<?php echo $_SESSION['deal'][0]->photoUser ;?>" alt="">
            </div>
    </div>
    &nbsp;<br>
</div>
</body>
</html>