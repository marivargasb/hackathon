<?php
class Category_model extends CI_Model {


   function getInstruments()
    {
      $query = $this->db->get('instrumento');
      
          return $query->result_object();
    }    

   function getMusicalGenres()
    {
      $query = $this->db->get('genero');
      
          return $query->result_object();
    }   



}