<?php
class modelDeals extends CI_model{
    function getMonDeal($idUser){
        $sql = $this->db->query("select user.photoUser, user.nomUser, service.nomService, where idUser=".$idUser);
        return $sql->result();
    }
}

?>