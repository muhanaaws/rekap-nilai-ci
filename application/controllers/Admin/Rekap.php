<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Input Nilai';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/rekap');
        $this->load->view('templates/footer');
    }
}