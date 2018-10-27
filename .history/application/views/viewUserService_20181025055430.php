<?php foreach($lesUsers as $unUser){
    ?><br>
        <?php echo var_dump($unUser) ?>
        <img class="imgResize" src="<?php echo $unUser[0]->$photoUser ?>" alt="">
        <p><?php echo $unUser->$nomUser ?></p>
    <?php } ?>