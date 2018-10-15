<?php
class modelDeals extends CI_model{
    function getMonDeal($idUser){
        $sql = $this->db->query("select deal.dateDeal, user.nomUser, service.nomService, where idUser=".$idUser);
        return $sql->result();
    }
}

?>