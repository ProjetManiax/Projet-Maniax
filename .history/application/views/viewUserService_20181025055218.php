<?php foreach($lesUsers as $unUser){
    ?><br>
        <?php echo var_dump($lesUsers) ?>
        <img class="imgResize" src="<?php echo $unUser->$photoUser ?>" alt="">
        <p><?php echo $unUser->$nomUser ?></p>
    <?php } ?>