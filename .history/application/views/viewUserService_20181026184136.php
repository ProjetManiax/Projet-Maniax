<div class="container">
    <div class="row align-items-center">
    <?php foreach($lesUsers as $unUser){
         ?><br>
        <div class='card col-md-2 bg-danger' style="width: auto; height: 8rem;" align="center">     
            <a href=""><img id="photoUser" class="imgResize" value="<?php echo $unUser->idUser ?>" src="<?php echo $unUser->photoUser ?>" alt="">
            <p class="card-text"><?php echo $unUser->nomUser ?></p></a>
        </div>
        <?php } ?>
    </div>
    </div>
    