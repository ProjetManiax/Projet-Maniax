<?php
class modelOffres extends CI_model{
    function getAllOffresByIdUser($idUser){
        $sql = $this->db->query("select service.nomService, service.photoService, offre.idOffre, offre.descriptionOffre, offre.dateOffre, offre.idService, idUser from offre inner join service on offre.idService = service.idService where idUser=".$idUser);
        return $sql->result();
    }

    function  getMaxOffre(){
        $sql = $this->db->query("select max(idOffre) as 'derniereOffre' from offre");
        return $sql->result();
    }

    public function register_offre($offre){
        $this->db->insert('offre', $offre);
    }

    public function getInfosOffre($idOffre){
        $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre, nomService from offre inner join service on offre.idService=service.idService where idOffre =".$idOffre);
        return $sql->result();
    }
}

?>