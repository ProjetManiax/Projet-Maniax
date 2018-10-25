<?php foreach($lesUsers as $unUser){
    ?><br>
    <div class="container"></div>
    <div class='col-md-3 bg-danger'>
        <img class="imgResize" src="<?php echo $unUser->photoUser ?>" alt="">
        <p><?php echo $unUser->nomUser ?></p>
    </div>
    <?php } ?>