<?php
class modelGestionOffre_bm extends CI_Model
{
    function getIdDemandeOffre()
    {
        $sql = $this->db->query("select idOffre from offre");
        return $sql->result();
    }

    function getDescriptionOffre()
    {
        $sql=$this->db->query("select descriptionOffre from offre");
        return $sql->result();
    }

    function getDateOffre()
    {
        $sql=$this->db->query("select dateOffre from offre");
        return $sql->result();
    }
    
    function getNomOffre()
    {
        $sql=$this->db->query("select nomService from service");
        return $sql->result();
    }
    function getPhotoCateg()
    {
        $sql=$this->db->query("select photoCateg from categorie");
        return $sql->result();
    }
    function setDateAndDescription($dateDescription){
            $this->db->update('demande', $dateDescription);
                
        }
    

}
?>