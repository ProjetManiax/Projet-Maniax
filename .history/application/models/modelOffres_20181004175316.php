<?php
class modelOffres extends CI_model{
    function getAllOffresByIdUser(){
        $sql = $this->db->query("select service.nomService,offre.descriptionOffre, offre.dateOffre, offre.idService, idUser from offre inner join service on offre.idService = service.idService where idUser=1");
        return $sql->result();
    }
}

?>