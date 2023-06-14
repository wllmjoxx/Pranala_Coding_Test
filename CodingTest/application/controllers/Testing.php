<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

defined('BASEPATH') or exit('No direct script access allowed');

class Testing extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('Segitiga_model');
    }

    function index() {
        $this->load->view("testajax");
    }

    function generate_segitiga() {
        $data = $this->Segitiga_model->segitiga();
        echo json_decode($data);
    }

    function generate_ganjil() {
        $data = $this->Segitiga_model->ganjil();
        echo json_decode($data);
    }

    function generate_prima() {
        $data = $this->Segitiga_model->prima();
        // $data = 1;
        echo json_decode($data);
    }
}