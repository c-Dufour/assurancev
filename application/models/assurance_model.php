<?php

class assurance_model extends CI_Model{

  private $table = 'car';

  public function getAll(){

  }
  public function getDetails($iduser){
    return $this->db->select('*')
        ->from($this->table)
        ->where('id_user',$iduser)
        ->get()
        ->result();
  }
  public function addAssurance($libelle,$prix){
    $data = array(
   'libelle' => $libelle ,
   'prix' => $prix
    );
  $this->db->insert('assurance', $data);
  }
}

 ?>
