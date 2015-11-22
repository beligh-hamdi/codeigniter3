<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Book_Model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function get_all()
    {
        $this->db->select('*');
        $this->db->from('books');
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }



}
?>