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
            return "ok";
        }
        elseif ($sql->result()[0]->test != $sql2->result()[0]->test && $sql3->result()[0]->test2 == $sql4->result()[0]->test2){
            return "monOffreSaDemande";
        }
        elseif ($sql->result()[0]->test == $sql2->result()[0]->test && $sql3->result()[0]->test2 != $sql4->result()[0]->test2){
            return "sonOffreMaDemande";
        }
        elseif ($sql->result()[0]->test != $sql2->result()[0]->test && $sql3->result()[0]->test2 != $sql4->result()[0]->test2){
            return "all";
        }
    }
        public function GetAllDealsByIdUser($idUser)
        {
        $lesDeals = array();
         
        // Permet de récupérer tous les deals en tant que offreur = idOffreUser1
        $queryDealsOffreur = $this->db->query("select idDeal, dateDeal, noteUser1,noteUser2,idOffreUser2,idEtat,nomService,photoService
        from deal, offre, user,service
        where deal.idOffreUser1 = offre.idOffre
        and offre.idUser = user.idUser
        and offre.idService = service.idService
        and user.idUser = ".$idUser);
         
        // On parcours tous les deals et on va chercher les offres correspondantes de l'autre user idOffreUser2
        foreach($queryDealsOffreur->result() as $unDealOffreur)
        {
        // On va aller chercher les infos des offres correspondantes
        $queryDemande = $this->db->query("select nomUser,photoUser,nomService,photoService
        from offre,user,service
        where offre.idUser = user.idUser
        and offre.idService = service.idService
        and offre.idOffre = ".$unDealOffreur->idOffreUser2);
        $uneDemande = $queryDemande->result();
        // On va créer un tableau associatif
        // Comme clé on va mettre l'id du deal
        $lesDeals[$unDealOffreur->idDeal] = array
        (
        'dateDeal'=>$unDealOffreur->dateDeal,
        'noteUser1'=>$unDealOffreur->noteUser1,
        'noteUser2'=>$unDealOffreur->noteUser2,
        'nomUser'=>$uneDemande[0]->nomUser,
        'photoUser'=>$uneDemande[0]->photoUser,
        'nomServiceUser1'=>$unDealOffreur->nomService,
        'photoServiceUser1'=>$unDealOffreur->photoService,
        'nomServiceUser2'=>$uneDemande[0]->nomService,
        'photoServiceUser2'=>$uneDemande[0]->photoService,
        'etat'=>$unDealOffreur->idEtat
        );
        }
        // Permet de récupérer tous les deals en tant que demandeur = idOffreUser2
        $queryDealsOffreur = $this->db->query("select idDeal, dateDeal, noteUser1,noteUser2,idOffreUser1,idEtat,nomService,photoService
        from deal, offre, user,service
        where deal.idOffreUser2 = offre.idOffre
        and offre.idUser = user.idUser
        and offre.idService = service.idService
        and user.idUser = ".$idUser);
         
        // On parcours tous les deals et on va chercher les offres correspondantes de l'autre user idOffreUser1
        foreach($queryDealsOffreur->result() as $unDealOffreur)
        {
        // On va aller chercher les infos des offres correspondantes
        $queryDemande = $this->db->query("select nomUser,photoUser,nomService,photoService
        from offre,user,service
        where offre.idUser = user.idUser
        and offre.idService = service.idService
        and offre.idOffre = ".$unDealOffreur->idOffreUser1);
        $uneDemande = $queryDemande->result();
        // On va créer un tableau associatif
        // Comme clé on va mettre l'id du deal
        $lesDeals[$unDealOffreur->idDeal] = array
        (
        'dateDeal'=>$unDealOffreur->dateDeal,
        'noteUser1'=>$unDealOffreur->noteUser1,
        'noteUser2'=>$unDealOffreur->noteUser2,
        'nomUser'=>$uneDemande[0]->nomUser,
        'photoUser'=>$uneDemande[0]->photoUser,
        'nomServiceUser1'=>$unDealOffreur->nomService,
        'photoServiceUser1'=>$unDealOffreur->photoService,
        'nomServiceUser2'=>$uneDemande[0]->nomService,
        'photoServiceUser2'=>$uneDemande[0]->photoService,
        'etat'=>$unDealOffreur->idEtat
        );
        }
        return $lesDeals;
        }
    }

?>