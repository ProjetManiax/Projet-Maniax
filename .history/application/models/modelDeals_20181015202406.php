<?php
class modelDeals extends CI_model{
    function getAllDealsByIdUser($idCreateur){
        $sql = $this->db->query(" where idUser=".$idCreateur);
        return $sql->result();
    }
}

?>