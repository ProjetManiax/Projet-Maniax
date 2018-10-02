<?php
class Main extends CI_Controller{

    public function index(){
        $this->load->view("login");
    }

    public function home(){
        $this->load->model("modelOffres");
        $data["lesOffres"]=$this->modelOffres->getAllOffresByIdUser();
        $this->load->model("modelUser");
        $data["lesUsers"]=$this->modelUser->getUser(1);
        $this->load->model("modelDemandes");
        $data["lesDemandes"]=$this->modelDemandes->getAllDemandesByIdUser();
        $this->load->view("viewAccueil.php",$data);
    }

}

?>