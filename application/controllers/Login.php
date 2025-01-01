<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Login_model');
    // }

    public function index()
    {   
      $data['title'] = 'Login';
      $this->load->view('templates/header', $data);
      $this->load->view('login/index');
      $this->load->view('templates/footer');
    }

    // public function login()
    // {
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');

    //     $user = $this->Login_model->get_user($username);

    //     if ($user) {
    //         if (password_verify($password, $user['password'])) {
    //             $data = [
    //                 'username' => $user['username'],
    //                 'role' => $user['role']
    //             ];
    //             $this->session->set_userdata($data);
    //             redirect('dashboard');
    //         } else {
    //             $this->session->set_flashdata('message', 'Password salah');
    //             redirect('login');
    //         }
    //     } else {
    //         $this->session->set_flashdata('message', 'Username tidak ditemukan');
    //         redirect('login');
    //     }
    // }

    // public function logout()
    // {
    //     $this->session->unset_userdata('username');
    //     $this->session->unset_userdata('role');
    //     redirect('login');
    // }
}