<?php

class Login extends CI_Controller{


  public function __construct(){
    parent::__construct();
    $this->load->model('user_model','usersManager');

  }
  public function index(){
    $this->login();
  }
  public function login(){
    $this->load->view('header.php');
    $this->load->view('login.php');
    $this->load->view('footer.php');
    redirect('/user');
  }
  public function verifyLogin(){
    $name = $this->input->get_post('name');
    $password = $this->input->get_post('password');
    $log = $this->usersManager->login($name,$password);
    if($log){
      redirect('/user');
    }else{

    }
  }
}

?>
