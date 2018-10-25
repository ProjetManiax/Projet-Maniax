<?php foreach($lesUsers as $unUser){
    ?><br>
    <div class="container">
    <div class='col-md-6 bg-danger'>
        <img class="imgResize" src="<?php echo $unUser->photoUser ?>" alt="">
        <p><?php echo $unUser->nomUser ?></p>
    </div>
    </div>
    <?php } ?>