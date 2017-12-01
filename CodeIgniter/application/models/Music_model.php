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

    
    public function getByCategory($instruments, $genres){

      $query1="";
      $query2="";
      $queryfull ="";

     
      if(!is_null($instruments)){
        $queryfull .="SELECT id_music, username, d.nombre, apellido, direccion, listados, d.instrumento FROM musicoinstrumento a,instrumento b, musico d WHERE a.id_instrumento= b.id_instrumento AND d.id_music=a.id_musico AND b.nombre IN(".implode(",", $instruments).")";
      }

      if(!is_null($genres)){
        if(!is_null($instruments)){
          $queryfull .=" UNION ";
        }
        $queryfull .="SELECT id_music, username, d.nombre, apellido, direccion, listados, d.instrumento FROM musicogenero a,genero b, musico d WHERE a.id_genero= b.id_genero AND d.id_music=a.id_musico AND b.nombre IN(".implode(",", $genres).")";      
      }



      $queryfull = $this->db->query($queryfull);
       return $queryfull->result_object();
    
     }


    public function login($username, $password){
      $query = $this->db->get_where('musico',
      array( 'username' => $username,'password' => $password));
    
      return $query->result('array');
    
     }


}