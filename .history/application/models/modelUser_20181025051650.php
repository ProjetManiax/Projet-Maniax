<?php
class modelUser extends CI_model{
    function getUser($idLogin){
        $sql = $this->db->query("select idUser, nomUser, login, mdp, photoUser from user where idUser=$idLogin");
        return $sql->result();
    }

    function getAllUserForThisService($valueInput){
        $sql = $this->db->query("select idUser, nomUser, login, mdp, photoUser from user where idUser=$");
        return $sql->result();
    }

}
?>