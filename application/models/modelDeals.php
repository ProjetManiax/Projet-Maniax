<?php
class modelDeals extends CI_Model{
    function getAllDealsByIdUser(){
        $sql = $this->db->query("select service.nomService,demande.descriptionDemande, demande.dateDemande, demande.idService, idUser from demande inner join service on demande.idService = service.idService where idUser=1");
        return $sql->result();
    }
}
?>