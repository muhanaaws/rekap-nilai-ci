<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_nilai extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Input Nilai';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/input_nilai');
        $this->load->view('templates/footer');
    }
}