<?php
class modelUser extends CI_model{
    function getUser($idLogin){
        $sql = $this->db->query("select idUser, nomUser, login, mdp, photoUser from user where idUser=$idLogin");
        return $sql->result();
    }

    function getAllUserForThisService($valueInput){
        $sql = $this->db->query("select distinct photoUser, nomUser from user inner join offre on user.idUser=offre.idUser inner join service on offre.idService=service.idService where nomService LIKE '$valueInput%'");
        return $sql->result();
    }

}
?>