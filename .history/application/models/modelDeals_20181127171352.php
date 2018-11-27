<?php
class modelDeals extends CI_model{
    function getMesDeal($idUser){
        $sql = $this->db->query("select nomUser, photoUser, nomService, idDeal, dateDeal, idEtat, noteUser1, noteUser2, idEtat from deal inner join offre on idOffreUser2 = idOffre inner join service on service.idService = offre.idService inner join user on user.idUser = offre.idUser where idCreateur =".$idUser);
        return $sql->result();
    }

    function getNomService($idUser){
        $sql = $this->db->query("select nomService as 'nomService2' from deal inner join offre on idOffreUser1 = idOffre inner join service on service.idService = offre.idService inner join user on user.idUser = offre.idUser where idCreateur =".$idUser);
        return $sql->result();
    }

    function getInfosDeal($idDeal){
        $sql = $this->db->query("select nomUser, photoUser, nomService, idDeal, dateDeal, idEtat, noteUser1, noteUser2, idEtat from deal inner join offre on idOffreUser2 = idOffre inner join service on service.idService = offre.idService inner join user on user.idUser = offre.idUser where idDeal =".$idDeal);
        return $sql->result();
    }

    function getNomService2($idDeal){
        $sql = $this->db->query("select nomService from deal inner join offre on idOffreUser1 = idOffre inner join service on service.idService = offre.idService inner join user on user.idUser = offre.idUser where idDeal =".$idDeal);
        return $sql->result();
    }

    function set_deal($idDeal,$deal){
        $this->db->where('idDeal', $idDeal);
        $this->db->update('deal', $deal);
    }

    public function insererDeal($deal){
        $this->db->insert('deal', $deal);
    }

    function verificationFinale($monOffreCliquee, $maDemandeCliquee, $sonOffreCliquee, $saDemandeCliquee){
        $sql = $this->db->query("select idService as test from offre WHERE idOffre =".$monOffreCliquee);
        $sql2 = $this->db->query("select idService as test from demande WHERE idDemande =".$saDemandeCliquee);     
        $sql3 = $this->db->query("select idService as test2 from offre WHERE idOffre =".$sonOffreCliquee);
        $sql4 = $this->db->query("select idService as test2 from demande WHERE idDemande =".$maDemandeCliquee);  
        if($sql->result()[0]->test == $sql2->result()[0]->test && $sql3->result()[0]->test2 == $sql4->result()[0]->test2){
            return 4;
        }
        return false;
    }

}

?>