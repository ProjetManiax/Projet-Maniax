<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


  </head>
  <body>

<span style="background-color:red;">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4"><br><br>
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Inscription</h3>
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
                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Nom + Prénom" name="nomUser" type="text" required minlength="4" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Login" name="login" type="text" required minlength="4" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Mot de passe" name="mdp" type="password" value="" required minlength="4">
                              </div><br><br>

                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Inscription" name="register" >

                          </fieldset>
                      </form><br>
                      <center><h4>Déjà inscrit ?</h4><b></b></b><a href="<?php echo base_url('user/login_view'); ?>">Connexion ici</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




  </body>
</html>
