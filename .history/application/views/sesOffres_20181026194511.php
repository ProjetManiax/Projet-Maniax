<?php 
    "<h2 align='center'>Les offres de ...</h2>";
    foreach($sesOffres as $uneOffre){
            ?><br>
                <div class="card" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-2 bg-warning'>
                            <img class="imgResize" src="<?php echo $uneOffre->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-10 bg-success'>
                            <h5><?php echo $uneOffre->nomService ?></h5>
                            <?php echo $uneOffre->descriptionOffre ?><br>
                            <h6><?php echo $uneOffre->dateOffre ?></h6>
                        </div>
                    </div>
                </div>
<?php } ?>