<div class="container">
    <div class="row align-items-center">
        <div class='col-md-3 bg-danger'>
        <?php foreach($lesUsers as $unUser){
         ?><br>
            <img class="imgResize" src="<?php echo $unUser->photoUser ?>" alt="">
            <p><?php echo $unUser->nomUser ?></p>
        </div>
    </div>
    </div>
    <?php } ?>