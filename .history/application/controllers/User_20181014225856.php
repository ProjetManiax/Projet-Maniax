<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view("login.php");
}

public function home(){
  $this->load->model("modelOffres");
  $data["lesOffres"]=$this->modelOffres->getAllOffresByIdUser($_SESSION['idUser']);
  $this->load->model("modelUser");
  $data["lesUsers"]=$this->modelUser->getUser($_SESSION['idUser']);
  $this->load->model("modelDemandes");
  $data["lesDemandes"]=$this->modelDemandes->getAllDemandesByIdUser($_SESSION['idUser']);
  $this->load->model("modelDeals");
  $data["lesDeals"]=$this->modelDeals->getAllDealsByIdUser($_SESSION['idUser']);
  $data["nomUser"]=$_SESSION['nomUser'];
  $data["photoUser"]=$_SESSION['photoUser'];
  $this->load->view("viewAccueil.php",$data);
}

public function register_user(){

      $user=array(
      'nomUser'=>$this->input->post('nomUser'),
      'login'=>$this->input->post('login'),
      'mdp'=>$this->input->post('mdp'),

        );
        print_r($user);

      $login_check=$this->user_model->login_check($user['login']);

      if($login_check){
        $this->user_model->register_user($user);
        $this->session->set_flashdata('success_msg', 'Inscription réussie ! Vous pouvez vous connectez à votre compte.');
        redirect('user/login_view');
      }
      else{
        $this->session->set_flashdata('error_msg', "Une erreur s'est produite, essayez à nouveau.");
        redirect('user');
      }

}

function login_user(){
  $user_login=array(

  'login'=>$this->input->post('login'),
  'mdp'=>$this->input->post('mdp')

    );

    $data=$this->user_model->login_user($user_login['login'],$user_login['mdp']);
      if($data)
      {
        $_SESSION['idUser']=$data['idUser'];
        $_SESSION['nomUser']=$data['nomUser'];
        $_SESSION['login']=$data['login'];
        $_SESSION['photoUser']=$data['photoUser'];

        redirect('user/home');
   

      }
      else{
        $this->session->set_flashdata('error_msg',  "Login ou mot de passe incorrect !");
        $this->load->view("login.php");

      }

}

public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

public function register_offre(){

  $offre=array(
  'idOffre'=>$this->input->post('idOffre'),
  'descriptionOffre'=>$this->input->post('descriptionOffre'),
  'dateOffre'=>$this->input->post('dateOffre'),
  'idService'=>$this->input->post('idService'),
  'idUser'=>$_SESSION['idUser'],

    );
    print_r($offre);

  $register_offre=true;

  if($register_offre){
    $this->load->model("modelOffres");
    $this->modelOffres->register_offre($offre);
    $this->session->set_flashdata('success_msg', "Création de l'offre réussie ! Vous pouvez retourner la visualiser sur la page d'accueil");
    redirect('user/adOffre_view');
  }
  else{
    $this->session->set_flashdata('error_msg', "Une erreur s'est produite, essayez à nouveau.");
    redirect('user/adOffre_view');
  }
}
  public function register_demande(){

    $demande=array(
    'idDemande'=>$this->input->post('idDemande'),
    'descriptionDemande'=>$this->input->post('descriptionDemande'),
    'dateDemande'=>$this->input->post('dateDemande'),
    'idService'=>$this->input->post('idService'),
    'idUser'=>$_SESSION['idUser'],
  
      );
      print_r($demande);
  
    $register_demande=true/*$this->modelDemandes->register_demande($demande)*/;
  
    if($register_demande){
      $this->load->model("modelDemandes");
      $this->modelDemandes->register_demande($demande);
      $this->session->set_flashdata('success_msg', "Création de la demande réussie ! Vous pouvez retourner la visualiser sur la page d'accueil");
      redirect('user/adDemande_view');
    }
    else{
      $this->session->set_flashdata('error_msg', "Une erreur s'est produite, essayez à nouveau.");
      redirect('user/adDemande_view');
    }

}

public function login_view(){

  $this->load->view("login.php");

}

public function register_view(){

  $this->load->view("register.php");

}

public function getOffreByIdOffre(){
  $idOffre = $_POST['idOffre'];
  $this->load->model("modelOffres");
  $data['offre']=$this->modelOffres->getInfosOffre($idOffre);
  $this->load->view('setOffre.php',$data);
}

/*public function setOffre_view(){
  $this->load->view('setOffre.php',$data);
}*/

public function setDemande_view(){
  $demande=array(
    'idDemande'=>$this->input->post('idDemande'),
    'descriptionDemande'=>$this->input->post('descriptionDemande'),
    'dateDemande'=>$this->input->post('dateDemande'),
    'nomService'=>$this->input->post('nomService'),
    'photoService'=>$this->input->post('photoService'),
  );
  print_r($demande);

  $this->load->view('setDemande.php',$demande);
}

function adOffre_view(){

  $this->load->model("modelOffres");
  $data['maxOffre']=$this->modelOffres->getMaxOffre();
  $this->load->model("modelServices");
  $data['allServices']=$this->modelServices->getAllServices();
  $this->load->view('viewOffre.php',$data);

}

function adDemande_view(){

  $this->load->model("modelDemandes");
  $data['maxDemande']=$this->modelDemandes->getMaxDemande();
  $this->load->model("modelServices");
  $data['allServices']=$this->modelServices->getAllServices();
  $this->load->view('viewDemande.php',$data);
  
}

}

?>
