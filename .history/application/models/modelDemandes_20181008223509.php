<?php
class modelDemandes extends CI_model{
    function getAllDemandesByIdUser($idUser){
        $sql = $this->db->query("select service.nomService,demande.descriptionDemande, demande.dateDemande, demande.idService, idUser from demande inner join service on demande.idService = service.idService where idUser=".$idUser);
        return $sql->result();
    }

    function  getMaxDemande(){
        $sql = $this->db->query("select max(idDemande) from demande");
        return $sql->result();
    }
}

?>