<?php
class modelDeals extends CI_model{
    function getAllDealsByIdUser($idCreateur){
        $sql = $this->db->query("select service.nomService,offre.descriptionOffre, offre.dateOffre, offre.idService, idUser from offre inner join service on offre.idService = service.idService where idUser=".$idCreateur);
        return $sql->result();
    }
}

?>