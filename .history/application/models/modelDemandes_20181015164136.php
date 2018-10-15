<?php
class modelDemandes extends CI_model{
    function getAllDemandesByIdUser($idUser){
        $sql = $this->db->query("select service.nomService, service.photoService, demande.idDemande, demande.descriptionDemande, demande.dateDemande, demande.idService, idUser from demande inner join service on demande.idService = service.idService where idUser=".$idUser);
        return $sql->result();
    }

    function  getMaxDemande(){
        $sql = $this->db->query("select max(idDemande) as 'derniereDemande' from demande");
        return $sql->result();
    }

    public function register_demande($demande){
        $this->db->insert('demande', $demande);
    }

    public function getInfosDemande($idDemande){
        $sql = $this->db->query("select idDemande, descriptionDemande, dateDemande, nomService, service.photoService from demande inner join service on demande.idService=service.idService where idDemande =".$idDemande);
        return $sql->result();
    }

    function set_demande($idDemande,$demande){
        $this->db->where('idDemande', $idDemande);
        $this->db->update('demande', $demande);
    }
}

?>
