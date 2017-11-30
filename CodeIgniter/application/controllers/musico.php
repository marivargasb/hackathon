<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Musico extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->helper('mihelper');
        $this->load->library('session');
        }
     

    public function register()
    {
        $this->load->view('Musico/register');
    }

    public function user()
    
    {
   
        
      $datas['users'] = $this->session->tempdata('data');
        
        $this->load->view('Musico/user', $datas);
     
    }

    public function login()
    {
        $this->load->view('Musico/login');
    }

    public function profile()
    { 
         
        $data['title'] = $this->session->flashdata('data_name');
        $data['musico'] =  $music = $this->Music_model->all();
        $this->load->view('Musico/profile', $data);
        
    }
    
    public function save(){
        // get the params
   
        $music = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'direccion' => $this->input->post('direccion')
        );

        $target_path = './pictures/';
        $img1path = $target_path .  $this->input->post('username'). '.png';
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $img1path))
        {
            $img_ch = $_FILES['foto']['name'];
        }

        // call the model to save
        $r = $this->Music_model->save($music);
           // redirect
           if ($r) {
            $this->session->set_flashdata('data_name', $music);
            redirect('/hackathon/CodeIgniter/Musico/profile'); 
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('/hackathon/CodeIgniter/Musico/register');
        }
        
      
    }


    public function users(){
        $user = $this->input->get('user');
   // echo $user;
    $r = $this->Music_model->getusers($user);

  $this->session->set_tempdata('data',  $r[0], 600);        
    
 redirect('/hackathon/CodeIgniter/Musico/user');
 
  
     }
    
   



}