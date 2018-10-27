<?php foreach($lesUsers as $unUser){
    ?><br>
        <?php echo var_dump($unUser) ?>
        <img class="imgResize" src="<?php echo $photoUser ?>" alt="">
        <p><?php echo $nomUser ?></p>
    <?php } ?>