<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller

{
    function __construct(){
    parent:: __construct();
    $this->load->helper('mihelper');
    }
 
   

    public function pasos()
    {
     $this->load->view('/user/paso');
    }

    public function registro()
    {
     $this->load->view('user/register');
    }

    public function login()
    {
        $this->load->view('user/login');
    }

    public function edi()
    {
        $this->load->view('user/editar');
    }

    public function paso() {
		$usser = $this->User_model->all();
		
		$data['usser'] = $usser;
		$data['title'] = 'Lista de usuarios';
		
        $this->load->view('/user/paso', $data);
        

    }

    public function cargar() {
        $id = $this->input->get('id');
		$usser = $this->User_model->donde($id);
		
		$data['usser'] = $usser;
		$data['title'] = 'EDITAR USUARIO';
		
        $this->load->view('/user/editar', $data);
        

    }

    public function delates(){
       $id = $this->input->get('id');
       
       $r = $this->User_model->eliminar($id);

   
 redirect('/Mypetscr/CodeIgniter-3.1.6/user/paso');

 
    }

    public function logins()

    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //$pass= md5($password);

       $r = $this->User_model->authenticate($username, $password);

        if ($r == true) {
            // $this->session->set_flashdata('message', 'User saved');
   redirect('/Mypetscr/CodeIgniter-3.1.6/user/paso');

       
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('/Mypetscr/CodeIgniter-3.1.6/user/login');
        }
    }

    public function register()
    {
        $this->load->view('user/register');
    }

    public function save()
    {
		// get the params
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');

        $usser = array(
            'username' => $username,
            'password' => $password,
            'first_name' => $first_name,
            'last_name' => $last_name
        );
		// call the model to save
		$r = $this->User_model->save($usser);
		
		// redirect
        if ($r) {
            // $this->session->set_flashdata('message', 'User saved');
            redirect('/Mypetscr/CodeIgniter-3.1.6/user/login');
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('/Mypetscr/CodeIgniter-3.1.6/user/register');
        }
    }
    


    public function editar()
    {
		// get the params
        $username = $this->input->post('username');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
         $id = $this->input->get('id');

         echo $username, $first_name, $last_name, $id;
     
		// call the model to save
		$r = $this->User_model->update($username, $first_name, $last_name, $id);
		
	
       redirect('/Mypetscr/CodeIgniter-3.1.6/user/paso');
       
    }


    

   
}
