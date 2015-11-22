<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

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

            $data['title'] = ucfirst('member');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('member/home', $data);
            $this->load->view('templates/footer');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }



}

?>