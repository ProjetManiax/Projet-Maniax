<?php
    <html><h2 align="center">Les demandes de ...</h2></html>;
    foreach($sesDemandes as $uneDemande){
            ?><br>
            
                <div class="card" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-2 bg-warning'>
                            <img class="imgResize" src="<?php echo $uneDemande->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-10 bg-success'>
                            <h5><?php echo $uneDemande->nomService ?></h5>
                            <?php echo $uneDemande->descriptionDemande ?><br>
                            <h6><?php echo $uneDemande->dateDemande ?></h6>
                        </div>
                    </div>
                </div>
<?php } ?>