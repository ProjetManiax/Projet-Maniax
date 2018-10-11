<?php
class modelGestionDemande_bm extends CI_Model
{
    function getIdDemande()
    {
        $sql = $this->db->query("select idDemande from demande where numCateg = ".$id);
        return $sql->result();
    }

    function getDescription()
    {
        $sql=$this->db->query("select descriptionDemande from demande");
        return $sql->result();
    }

    function getDateDemande()
    {
        $sql=$this->db->query("select dateDemande from demande");
        return $sql->result();
    }
    
    function getNomService()
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