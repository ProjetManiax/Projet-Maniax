<div class="container">
    <div class="row align-items-center">
    <?php foreach($lesUsers as $unUser){
         ?><br>
        <div class=' card col-md-2 bg-danger' style="width: 40rem; height: 40rem;">     
            <img name="photoUser" class="imgResize" value="<?php echo $unUser->idUser ?>" src="<?php echo $unUser->photoUser ?>" alt="">
            <p class="card-text" align="center"><?php echo $unUser->nomUser ?></p>
        </div>
        <?php } ?>
    </div>
    </div>
    