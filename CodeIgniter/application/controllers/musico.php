<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Musico extends CI_Controller{

public function __construct(){
    parent::  __construct();
    $this->load->helper('url');
}

    public function register()
    {
        $this->load->view('Musico/register');
    }

    public function login()
    {
        $this->load->view('Musico/login');
    }

    public function profile()
    {
        $this->load->view('Musico/profile');
    }

    public function save()
    {
		// get the params
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $direccion = $this->input->post('direccion');
        $instrumento = $this->input->post('instrumento');
        $foto = $this->input->post('foto');

        $music = array(
            'username' => $username,
            'password' => $password,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'direccion' => $direccion,
            'instrumento' => $instrumento,
            'foto' => $foto
           
        );
		// call the model to save
		$r = $this->Music_model->save($music);
		
		// redirect
        if ($r) {
            // $this->session->set_flashdata('message', 'User saved');
            redirect('/CodeIgniter/musico/login');
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('/CodeIgniter/musico/register');
        }
    }



}