<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>

    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-6"><br><br>
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title">Connexion</h2>
                </div>
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
                  <br><br>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Login" name="login" type="text" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mot de passe" name="mdp" type="password" value="" >
                            </div><br><br>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Connexion" name="connexion" >

                        </fieldset>
                    </form><br><br>
                <center><b><h4>Pas encore inscrit ?</h4></b><a href="<?php echo base_url('user/register_view'); ?>">Inscription ici</a></center>

                </div>
            </div>
        </div>
    </div>
</div>


  </body>
</html>
