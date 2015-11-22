<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('book_model');

    }

    function index() {

        $data['books'] = $this->book_model->get_all();
        $data['title'] = ucfirst('books');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('books/list', $data);
        $this->load->view('templates/footer');

    }

    function add() {
        // database insert code
    }

    function fetch() {
        // database fetch code
    }

    function update() {
        // database update code
    }

    function delete() {
        // database delete code
    }




}

?>