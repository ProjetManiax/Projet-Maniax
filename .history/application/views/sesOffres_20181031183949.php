<style>
.enligne
{
display: inline;
}
</style>
<?php 
    echo "<h2 class='enligne' align='center'>Les offres de <p class='enligne' name='nomUser'></p></h2>";
    foreach($sesOffres as $uneOffre){
            ?><br>
                <div class="card container-fluid" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-2'>
                            <img class="imgResize w-125" src="<?php echo $uneOffre->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-10 px-3'>
                        <div class="card-block px-3">
                        <h6 class="card-title"><?php echo $uneOffre->nomService ?></h6>
                        <p class="card-text"><?php echo $uneOffre->descriptionOffre ?><br>
                        <?php echo $uneOffre->dateOffre ?></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 
<?php } ?>
<br>