<?php
class User_model extends CI_model{



  public function register_user($user){


  $this->db->insert('user', $user);

  }

  public function login_user($login,$mdp){

    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('login',$login);
    $this->db->where('mdp',$mdp);

    if($query=$this->db->get())
    {
        return $query->row_array();
    }
    else{
      return false;
    }


  }

  public function login_check($login){

    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('login',$login);
    $query=$this->db->get();
  
    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }
  
  }

}


?>
