<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user_model extends CI_Model{

  private $table = 'user';

  public function getAll(){
    return $this->db->select('*')
				->from($this->table)
        ->where('isAdmin',false)
				->get()
				->result();
  }
  function login($username, $password)
 {
   $this -> db -> select('id, name, password');
   $this -> db -> from($this->table);
   $this -> db -> where('name', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
  public function addUser($name,$email){
    $data = array(
   'name' => $name ,
   'email' => $email
    );
  $this->db->insert($this->table, $data);
  }
  public function deleteUser($id){
    $this->db->where('id', $id);
    $this->db->delete($this->table);
  }
  public function findUser($id){
    return $this->db->select('*')
				->from($this->table)
        ->where('id',$id)
				->get()
				->result();
  }
  public function updateUser($id,$name,$email){
    $data = array(
               'name' => $name,
               'email' => $email
            );

   $this->db->where('id', $id);
   $this->db->update($this->table, $data);
  }

}

 ?>
