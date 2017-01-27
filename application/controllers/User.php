<?php

class User extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('user_model','usersManager');
  }
  public function index(){
    $this->userList();
  }
  public function userList(){
    $this->load->view('header.php');
    $data = array();
    $allUsers = $this->usersManager->getAll();
    $data['users'] = $allUsers;

    $this->load->view('user/users.php',$data);
    $this->load->view('footer.php');
  }
  public function addUser(){
    $name = $this->input->get_post('name');
    $email = $this->input->get_post('email');
    $this->usersManager->addUser($name,$email);
    $this->index();
  }
  public function deleteUser(){
    $id = $_GET['id'];
    $this->usersManager->deleteUser($id);
    $this->index();
  }
  public function updateUser(){
    $this->load->view('header.php');
    
    $id = $_GET['id'];
    $user = $this->usersManager->findUser($id);
    $data['user'] = $user;
    $this->load->view('user/updateUser.php',$data);
    $this->load->view('footer.php');
  }
  public function update(){
    $id = $this->input->get_post('id');
    $name = $this->input->get_post('name');
    $email = $this->input->get_post('email');
    $this->usersManager->updateUser($id,$name,$email);
    $this->index();
  }
}

 ?>
