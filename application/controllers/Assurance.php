<?php

class Assurance extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('assurance_model','assurManager');

  }
  public function index(){
    $this->home();
  }
  public function home(){
    $this->load->view('header');
    $this->load->view('assurance/home');
    $this->load->view('footer');
  }
  public function getAssurance(){
    $id = $_GET['id'];
    $this->load->view('header');
    $data['detail'] = $this->assurManager->getDetails($id);
    $this->load->view('assurance/assurance',$data);
  }
  public function addAssurance(){
    $libelle = $this->input->get_post('libelle');
    $prix = $this->input->get_post('prix');
    $this->assurManager->addAssurance($libelle,$prix);
    $this->index();
  }

}

 ?>
