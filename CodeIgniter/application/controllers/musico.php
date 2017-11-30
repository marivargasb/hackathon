<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Musico extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->helper('mihelper');
        $this->load->library('session');
        }
     

    function IsLogged()
    {
        if (!$this->session->userdata('logged_in'))
        {
            redirect('hackathon/CodeIgniter/Musico/login');
        }
    }

    function IsAlreadyLogged()
    {
        if ($this->session->userdata('logged_in'))
        {
            redirect('hackathon/CodeIgniter/Musico/profile');
        }
    }
     
    public function register()
    {
        $this->IsAlreadyLogged();
        $this->load->view('Musico/register');
    }

    public function user()   
    {      
        $this->IsLogged();
       $datas['users'] = $this->session->tempdata('data');     
       $this->load->view('Musico/user', $datas);   
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('hackathon/CodeIgniter/Musico/login');
    }

    public function login()
    {
        $this->IsAlreadyLogged();
        $this->load->view('Musico/login');
    }

    public function profile()
    { 
        $this->IsLogged();
        $data['title'] = $this->session->tempdata('data_name');
        $data['musico'] =  $music = $this->Music_model->getAll();
        $this->load->view('Musico/profile', $data);
    }
    
    public function isRegister(){
        $r = $this->Music_model->login($this->input->post('username'),sha1($this->input->post('password')));
        // redirect
        if ($r) {
        $this->session->set_tempdata('data_name',  $r[0], 600);
        $this->session->set_userdata('logged_in', true);
         redirect('/hackathon/CodeIgniter/Musico/profile'); 
     } else {
         // $this->session->set_flashdata('message', 'There was an error saving the user');
         echo 'no existe';
     }
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
        $r = $this->Music_model->getusers($user);

         $this->session->set_tempdata('data',  $r[0], 600);        
    
        redirect('/hackathon/CodeIgniter/Musico/user');
     }
    
   



}