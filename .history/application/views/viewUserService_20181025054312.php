<?php foreach($lesUsers as $unUser){
    ?><br>
        <img class="imgResize" src="<?php echo $unUser->$photoUser ?>" alt="">
        <p><?php echo $unUser->$nomUser ?></p>
    <?php } ?>