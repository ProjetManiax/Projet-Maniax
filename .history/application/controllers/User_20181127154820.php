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

// fonctions propres à l'utilisateur
public function home(){

  if(!empty($_SESSION['idUser'])) {

    $data["idUser"]=$_SESSION['idUser'];
    $data["nomUser"]=$_SESSION['nomUser'];
    $data["photoUser"]=$_SESSION['photoUser'];
    $this->load->model("modelOffres");
    $data["lesOffres"]=$this->modelOffres->getAllOffresByIdUser($_SESSION['idUser']);
    $this->load->model("modelUser");
    $data["lesUsers"]=$this->modelUser->getUser($_SESSION['idUser']);
    $this->load->model("modelDemandes");
    $data["lesDemandes"]=$this->modelDemandes->getAllDemandesByIdUser($_SESSION['idUser']);
    $this->load->model("modelDeals");
    $data["lesDeals"]=$this->modelDeals->getMesDeal($_SESSION['idUser']);
    $data["nomService"]=$this->modelDeals->getNomService($_SESSION['idUser']);
    $this->load->view("viewAccueil.php",$data);
  }
  else{
    $this->load->view("redirection.php");
  }
  
}

public function register_user(){

      $user=array(
      'nomUser'=>$this->input->post('nomUser'),
      'login'=>$this->input->post('login'),
      'mdp'=>$this->input->post('mdp'),
      'photoUser'=>'https://image.noelshack.com/fichiers/2018/34/1/1534754007-newuser.png',

        );
        print_r($user);

      $login_check=$this->user_model->login_check($user['login']);

      if($login_check){
        $this->user_model->register_user($user);
        $this->session->set_flashdata('success_msg', 'Inscription réussie ! Vous pouvez vous connectez à votre compte.');
        redirect('user/login_view');
      }
      else{
        $this->session->set_flashdata('error_msg', "Ce login est déjà utilisé, essayez à nouveau.");
        redirect('user/register_view');
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

public function login_view(){

  $this->load->view("login.php");

}

public function register_view(){

  $this->load->view("register.php");

}

public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

// fonctions propres aux offres
public function register_offre(){

  $offre=array(
  'idOffre'=>$this->input->post('idOffre'),
  'descriptionOffre'=>$this->input->post('descriptionOffre'),
  'dateOffre'=>$this->input->post('dateOffre'),
  'idService'=>$this->input->post('idService'),
  'idUser'=>$_SESSION['idUser'],

    );
    print_r($offre);

  if(!empty($offre)){
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

public function set_offre(){
  $idOffre= $this->input->post('idOffre');
  $offre=array(

    'descriptionOffre'=>$this->input->post('descriptionOffre'),
    'dateOffre'=>$this->input->post('dateOffre'),

    );
    print_r($offre);

    if(!empty($offre)){
    $this->load->model("modelOffres");
    $this->modelOffres->set_offre($idOffre,$offre);
    $this->session->set_flashdata('success_msg', "Modification de l'offre réussie ! Vous pouvez retourner la visualiser sur la page d'accueil");
    redirect('user/setOffre_view');
  }
  else{
    $this->session->set_flashdata('error_msg', "Une erreur s'est produite, essayez à nouveau.");
    redirect('user/setOffre_view');
  }
}

public function getOffreByIdOffre(){
  $idOffre = $_POST['idOffre'];
  $this->load->model("modelOffres");
  $_SESSION['offre']=$this->modelOffres->getInfosOffre($idOffre);
  $this->load->view('setOffre.php',$data);
}

public function setOffre_view(){
  $this->load->view('setOffre.php',$_SESSION['offre']);
}

function adOffre_view(){

  $this->load->model("modelOffres");
  $data['maxOffre']=$this->modelOffres->getMaxOffre();
  $this->load->model("modelServices");
  $data['allServices']=$this->modelServices->getAllServices();
  $this->load->view('viewOffre.php',$data);

}

// fonctions propres aux demandes
public function register_demande(){

  $demande=array(
  'idDemande'=>$this->input->post('idDemande'),
  'descriptionDemande'=>$this->input->post('descriptionDemande'),
  'dateDemande'=>$this->input->post('dateDemande'),
  'idService'=>$this->input->post('idService'),
  'idUser'=>$_SESSION['idUser'],

    );
    print_r($demande);

    if(!empty($demande)){
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

public function set_demande(){
  $idDemande= $this->input->post('idDemande');
  $demande=array(

    'descriptionDemande'=>$this->input->post('descriptionDemande'),
    'dateDemande'=>$this->input->post('dateDemande'),

    );
    print_r($demande);

  if(!empty($demande)){
    $this->load->model("modelDemandes");
    $this->modelDemandes->set_demande($idDemande,$demande);
    $this->session->set_flashdata('success_msg', "Modification de la demande réussie ! Vous pouvez retourner la visualiser sur la page d'accueil");
    redirect('user/setDemande_view');
  }
  else{
    $this->session->set_flashdata('error_msg', "Une erreur s'est produite, essayez à nouveau.");
    redirect('user/setDemande_view');
  }
}

public function getDemandeByIdDemande(){
  $idDemande = $_POST['idDemande'];
  $this->load->model("modelDemandes");
  $_SESSION['demande']=$this->modelDemandes->getInfosDemande($idDemande);
  $this->load->view('setDemande.php',$data);
}

public function setDemande_view(){
  $this->load->view('setDemande.php',$_SESSION['demande']);
}

function adDemande_view(){

  $this->load->model("modelDemandes");
  $data['maxDemande']=$this->modelDemandes->getMaxDemande();
  $this->load->model("modelServices");
  $data['allServices']=$this->modelServices->getAllServices();
  $this->load->view('viewDemande.php',$data);
  
}

// fonctions propres aux deals

 function newdeal_view(){
  $this->load->model("modelDemandes");
  $data["lesDemandes"]=$this->modelDemandes->getAllDemandesByIdUser($_SESSION['idUser']);
  $this->load->model("modelOffres");
  $data["lesOffres"]=$this->modelOffres->getAllOffresByIdUser($_SESSION['idUser']);
  $this->load->view('viewDeal.php',$data);
 }

 function getUserForThisService(){
  $valueInput = $_POST['valueInput'];
  $this->load->model("modelUser");
  $data["lesUsers"]=$this->modelUser->getAllUserForThisService($valueInput);
  $this->load->view('viewUserService.php',$data);

 }

 function allOffresByIdUser(){
   $id = $_POST['id'];
   $this->load->model("modelOffres");
   $data["sesOffres"]=$this->modelOffres->getAllOffresByIdUser($id);
   $this->load->view('sesOffres.php',$data);
 }

 function allDemandesByIdUser(){
  $id = $_POST['id'];
  $this->load->model("modelDemandes");
  $data["sesDemandes"]=$this->modelDemandes->getAllDemandesByIdUser($id);
  $this->load->view('sesDemandes.php',$data);

}
 
  function getNomUserClicked(){
  $id = $_POST['id'];
  $this->load->model("modelUser");
  $data["nomUser"]=$this->modelUser->getUser($id);
  $this->load->view('nomUserClicked.php',$data);
  }

  public function getDealByIdDeal(){
    $idDeal = $_POST['idDeal'];
    $this->load->model("modelDeals");
    $_SESSION['deal']=$this->modelDeals->getInfosDeal($idDeal);
    $_SESSION["nomService"]=$this->modelDeals->getNomService2($idDeal);
    $this->load->view('setDeal.php',$data);
  }

  public function set_deal(){
    $idDeal= $this->input->post('idDeal');
    $deal=array(
  
      'noteUser1'=>$this->input->post('maNote'),
  
      );
      print_r($deal);
  
    if(!empty($deal)){
      $this->load->model("modelDeals");
      $this->modelDeals->set_deal($idDeal,$deal);
      $this->session->set_flashdata('success_msg', "Notation du deal réussie ! Vous pouvez retourner la visualiser sur la page d'accueil");
      redirect('user/setDeal_view');
    }
    else{
      $this->session->set_flashdata('error_msg', "Une erreur s'est produite, essayez à nouveau.");
      redirect('user/setDeal_view');
    }
  }
  
  public function setDeal_view(){
    $this->load->view('setDeal.php',$_SESSION['deal']);
  }


  function getIdOffresDemandesClicked(){
    // $monOffreCliquee = $_POST['monOffreCliquee'];
    // $maDemandeCliquee = $_POST['maDemandeCliquee'];
    // $sonOffreCliquee = $_POST['sonOffreCliquee'];
    // $saDemandeCliquee = $_POST['saDemandeCliquee'];

    $lesIds=array(
    'monOffreCliquee' => $_POST['monOffreCliquee'],
    'maDemandeCliquee' => $_POST['maDemandeCliquee'],
    'sonOffreCliquee' => $_POST['sonOffreCliquee'],
    'saDemandeCliquee' => $_POST['saDemandeCliquee']
    );

    echo var_dump($lesIds);

    // $deal=array(
    //   'idDeal'=>null,
    //   'dateDeal'=>date("Y-m-d"),
    //   'noteUser1'=>0,
    //   'noteUser2'=>0,
    //   'idOffreUser1'=>$monOffreCliquee,
    //   'idOffreUser2'=>$saDemandeCliquee,
    //   'idEtat'=>1,
    //   'idCreateur'=>$_SESSION['idUser'],
  
    //   ); 
    // var_dump($deal);

    // $deal2=array(
    //   'idDeal'=>null,
    //   'dateDeal'=>date("Y-m-d"),
    //   'noteUser1'=>0,
    //   'noteUser2'=>0,
    //   'idOffreUser1'=>$sonOffreCliquee,
    //   'idOffreUser2'=>$maDemandeCliquee,
    //   'idEtat'=>1,
    //   'idCreateur'=>$_SESSION['idUser'],
    //   );   

    // $this->load->model("modelDeals");
    // $_SESSION["verificationFinale"] = $this->modelDeals->verificationFinale($monOffreCliquee, $saDemandeCliquee, $sonOffreCliquee, $maDemandeCliquee);
    // if ($_SESSION["verificationFinale"] == true){
    //   $this->modelDeals->insererDeal($deal);
    // //  $this->modelDeals->insererDeal($deal2);
    //   $this->session->set_flashdata('success_msg', "Création du deal réussie ! Vous pouvez retourner le visualiser sur la page d'accueil");
    // } else {
    //   $this->session->set_flashdata('error_msg', "Erreur lors de la création du deal, essayez à nouveau.");
    // }
  }
}

?>
