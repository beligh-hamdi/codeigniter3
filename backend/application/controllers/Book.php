<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('book_model');

    }

    function index() {
        $data['title'] = ucfirst('books');

        $data['books'] = $this->book_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('books/list', $data);
        $this->load->view('templates/footer');

    }

    function create() {
        $data['title'] = 'Create Book';
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('books/create', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->book_model->set();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('books/success', $data);
            $this->load->view('templates/footer');
        }

    }

    function view() {
        $data['title'] = 'View';
        $id = $this->uri->segment(3);
        if (empty($id))
        {
            show_404();
        }

        $data['book'] = $this->book_model->get($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('books/view', $data);
        $this->load->view('templates/footer');


    }

    function edit() {
        $data['title'] = 'Edit';
        $id = $this->uri->segment(3);
        if (empty($id))
        {
            show_404();
        }

        $data['book'] = $this->book_model->get($id);
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('books/edit', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->book_model->set($id);
            redirect( base_url() . 'books');
        }

    }

    function remove() {
        $id = $this->uri->segment(3);
        $data['book'] = $this->book_model->delete($id);
        redirect( base_url() . 'books');
    }



}

?>