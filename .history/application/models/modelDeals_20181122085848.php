<?php
class modelDeals extends CI_model{
    function getMesDeal($idUser){
        $sql = $this->db->query("select nomUser, photoUser, nomService, dateDeal, idEtat, noteUser1, noteUser2, idEtat from deal inner join offre on idOffreUser2 = idOffre inner join service on service.idService = offre.idService inner join user on user.idUser = offre.idUser where idCreateur =".$idUser);
        return $sql->result();
    }

    function getNomService($idUser){
        $sql = $this->db->query("select nomService as 'nomService2' from deal inner join offre on idOffreUser1 = idOffre inner join service on service.idService = offre.idService inner join user on user.idUser = offre.idUser where idCreateur =".$idUser);
        return $sql->result();
    }

    function verifMonOffreSaDemande($monOffreCliquee, $saDemandeCliquee){
        $sql = $this->db->query("select idService as test from offre WHERE idOffre =".$monOffreCliquee);
        $sql2 = $this->db->query("select idService as test from demande WHERE idDemande =".$saDemandeCliquee);      

        if($sql->result()[0]->test == $sql2->result()[0]->test){
            return true;
        }
        return false;
    }

    function verifSonOffreMaDemande($sonOffreCliquee, $maDemandeCliquee){
        $sql = $this->db->query("select idService as test2 from offre WHERE idOffre =".$sonOffreCliquee);
        $sql2 = $this->db->query("select idService as test2 from demande WHERE idDemande =".$maDemandeCliquee);      

        if($sql->result()[0]->test2 == $sql2->result()[0]->test2){
            return true;
        }
        return false;
    }
}

?>