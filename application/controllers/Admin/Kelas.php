<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/kelas');
        $this->load->view('templates/footer');
    }
}