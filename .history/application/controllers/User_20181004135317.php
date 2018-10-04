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
  $data["lesOffres"]=$this->modelOffres->getAllOffresByIdUser();
  $this->load->model("modelUser");
  $data["lesUsers"]=$this->modelUser->getUser(1);
  $this->load->model("modelDemandes");
  $data["lesDemandes"]=$this->modelDemandes->getAllDemandesByIdUser();
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
  $this->session->set_flashdata('success_msg', 'Inscription réussie ! .Vous pouvez vous connectez à votre compte.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', "Une erreur s'est produite, essayez à nouveau.");
  redirect('user');


}

}

public function login_view(){

  $this->load->view("login.php");

}

public function register_view(){

  $this->load->view("register.php");

}

function login_user(){
  $user_login=array(

  'login'=>$this->input->post('login'),
  'mdp'=>$this->input->post('mdp')

    );

    $data=$this->user_model->login_user($user_login['login'],$user_login['mdp']);
      if($data)
      {
        $this->session->set_userdata('idUser',$data['idUser']);
        $this->session->set_userdata('nomUser',$data['nomUser']);
        $this->session->set_userdata('login',$data['login']);
        $this->session->set_userdata('photoUser',$data['photoUser']);

        redirect('main/home');

      }
      else{
        $this->session->set_flashdata('error_msg',  "Une erreur s'est produite, essayez à nouveau.");
        $this->load->view("login.php");

      }


}

function user_profile(){

$this->load->view('user_profile.php');

}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}

?>
