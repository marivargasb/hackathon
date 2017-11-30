<?php
class Music_model extends CI_Model {


    function save($music)
    {
      $r = $this->db->insert('musico', $music);
      return $r;
    }    

    function getAll()
    {
      $query = $this->db->get('musico');
      
          return $query->result_object();
    }    

    function getusers($user){
    
      $this -> db -> select('id_music, username, nombre, apellido, direccion, listados, instrumento');
      $this -> db -> from('musico');
      $this -> db -> where('username', $user);
      $this -> db -> limit(1);
      $query = $this -> db -> get();

        
            return $query->result('array');
   
    }

    public function login($username, $password){
      $query = $this->db->get_where('musico',
      array( 'username' => $username,'password' => $password));
    
      return $query->result('array');
    
     }


}