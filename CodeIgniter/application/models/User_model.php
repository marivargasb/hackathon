<?php
class User_model extends CI_Model {

  function authenticate($user, $pass) {


   

    $this -> db -> select('id, username, password');
    $this -> db -> from('usser');
    $this -> db -> where('username', $user);
    $this -> db -> where('password', $pass);
    $this -> db -> limit(1);
  
     $query = $this -> db -> get();
  
    if($query -> num_rows() == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
    
  }

  function save($user)
  {
    $r = $this->db->insert('usser', $user);
    return $r;
  }

  function all()
  {
    $query = $this->db->get('usser');

    return $query->result_object();
  }

  function update($username, $first_name, $last_name, $id) {
    $data = array(
        'username' => $username,
        'first_name' => $first_name,
        'last_name' => $last_name
        
    );
  
  // $this->db->update('usser', $data);
 $this->db->where('id', $id);
$this->db->update('usser', $data);
 
}

public function eliminar($id){
    $this->db->where('id', $id);
    $this->db->delete('usser');


 }

 public function donde($id){
  $query = $this->db->get_where('usser',
  array( 'id' => $id));

return $query->result_object();

 }


}
