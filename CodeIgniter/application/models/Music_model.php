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



}