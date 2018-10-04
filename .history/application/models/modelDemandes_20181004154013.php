<?php
class modelDemandes extends CI_model{
    function getAllDemandesByIdUser(){
        $sql = $this->db->query("select service.nomService,demande.descriptionDemande, demande.dateDemande, demande.idService, idUser from demande inner join service on demande.idService = service.idService where idUser=1");
        return $sql->result();
    }
}

?>