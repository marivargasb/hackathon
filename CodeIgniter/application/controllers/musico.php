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
       $datas['ins'] = $this->session->tempdata('carga');     
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

        if($this->session->flashdata('search')){
    
            $data['musico']=$this->Music_model->getByCategory($this->session->tempdata('s_instrumentos'),$this->session->tempdata('s_generos'));       
        }else{
            $data['musico'] =   $this->Music_model->getAll();
        }
        $data['title'] = $this->session->tempdata('data_name');

        $data['generos'] =   $this->Category_model->getMusicalGenres();
        $data['instrumentos'] = $this->Category_model->getInstruments();


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
       redirect('/hackathon/CodeIgniter/Musico/login'); 
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

    public function search(){

            $this->session->set_flashdata('search',  true);        
            if(isset($_GET['generos'])){
                $this->session->set_tempdata('s_generos', $_GET['generos'], 600);    
            }else{
                $this->session->set_tempdata('s_generos',NULL, 600);   
            }

            if(isset($_GET['instrumentos'])){
                $this->session->set_tempdata('s_instrumentos', $_GET['instrumentos'], 600);    
            }else{
                $this->session->set_tempdata('s_instrumentos', NULL, 600);    
            }
        
        
        redirect('/hackathon/CodeIgniter/Musico/profile'); 
    }

    public function users(){
      $user = $this->input->get('user');
        $r = $this->Music_model->getusers($user);
        $rs = $this->Music_model->getusersgenero();
     
        $this->session->set_tempdata('carga',  $rs[0], 600);        
         $this->session->set_tempdata('data',  $r[0], 600);        
    
        redirect('/hackathon/CodeIgniter/Musico/user');
     }

     
     public function saveinstrumento(){
        // get the params
        $id = $this->input->get('id');
         $id_instrumento = $this->input->post('id_instrumento');
        $instrumento = array(
    
            'id_musico ' =>  $id,
            'id_instrumento' => $id_instrumento
        );
           
        // call the model to save
     $r = $this->Music_model->getsaveinstrumento($instrumento);
           // redirect
       if ($r) {
           echo "agregado";
        } else {
          echo "error";
       }
        
      
    }

    public function savegenero(){
        // get the params
        $id = $this->input->get('id');
         $id_genero= $this->input->post('id_genero');
        $genero = array(
    
            'id_musico ' =>  $id,
            'id_genero' => $id_genero
        );
        // call the model to save
     $r = $this->Music_model->getsavegenero( $genero);
           // redirect
       if ($r) {
          echo "agregado";
       } else {
      echo "error";
        }
        
      
    }

    function carga(){

    }
    
   



}