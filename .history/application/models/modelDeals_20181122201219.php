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

    function verificationFinale($monOffreCliquee, $saDemandeCliquee, $sonOffreCliquee, $maDemandeCliquee){
        $sql = $this->db->query("select idService as test from offre WHERE idOffre =".$monOffreCliquee);
        $sql2 = $this->db->query("select idService as test from demande WHERE idDemande =".$saDemandeCliquee);     
        $sql3 = $this->db->query("select idService as test2 from offre WHERE idOffre =".$sonOffreCliquee);
        $sql4 = $this->db->query("select idService as test2 from demande WHERE idDemande =".$maDemandeCliquee);  
        echo var_dump($sql->result()[0]->test);

        if($sql->result()[0]->test == $sql2->result()[0]->test && $sql3->result()[0]->test2 == $sql4->result()[0]->test2){
            return true;
        }
        return false;
    }


 //   INSERT INTO `deal` (`idDeal`, `dateDeal`, `noteUser1`, `noteUser2`, `idOffreUser1`, `idOffreUser2`, `idEtat`, `idCreateur`) VALUES (NULL, '2018-11-05', '0', '0', '19', '19', '1', '3');

}

?>