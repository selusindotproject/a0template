<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            '_view' => 'dashboard_list'
        );
        $this->load->view('dashboard', $data);
    }

}
