<?php 

class gestionDemandesBm extends CI_Controller{
    public function gestionDemandes(){
        $this->load->model("modelGestionDemandeBm");
        $data["IdDemande"]=$this->modelGestionDemandeBm->getIdDemande();
        $this->load->model("modelGestionDemandeBm");
        $data["DescriptionDemande"]=$this->modelGestionDemandeBm->getDescriptionDemande();
        $this->load->model("modelGestionDemandeBm");
        $data["DateDemande"]=$this->modelGestionDemandeBm->getDateDemande();
        $this->load->model("modelGestionDemandeBm");
        $data["NomService"]=$this->modelGestionDemandeBm->getNomService();
        $this->load->model("modelGestionDemandeBm");
        $data["PhotoCateg"]=$this->modelGestionDemandeBm->getPhotoCateg();
        $this->load->view("viewGestionDemande_bm",$data);
    }

    function setDateAndDescription(){

            $dateDescription=array(
            'descriptionDemande'=>$this->input->post('DescriptionDemande'),
            'dateDemande'=>$this->input->post('DateDemande'),
            );
    }

    
}
?>