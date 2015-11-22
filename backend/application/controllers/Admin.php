<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();

    }

    function index()
    {

        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['role'] = $session_data['role'];

            if($data['role'] == 'admin'){
                $data['title'] = ucfirst('admin');
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('admin/dashboard', $data);
                $this->load->view('templates/footer');
            }else{
                redirect('member', 'refresh');
            }
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }



}

?>