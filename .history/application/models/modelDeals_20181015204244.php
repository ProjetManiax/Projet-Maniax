<?php
class modelDeals extends CI_model{
    function getAllDealsByIdUser($idCreateur){
        $sql = $this->db->query("select user.photoUser, user.nomUser, service.nomService, where idUser=".$idCreateur);
        return $sql->result();
    }
}

?>