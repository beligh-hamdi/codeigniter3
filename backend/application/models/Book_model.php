<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Book_Model extends CI_Model
{

    private  $table_name = 'books';



    function __construct()
    {
        parent::__construct();
    }


    public function get($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get_where($this->table_name);
            return $query->result_array();
        }
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row();
    }

    public function set($id = 0)
    {
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'image' => $this->input->post('image'),
        );
        if ($id === 0) {
            return $this->db->insert($this->table_name, $data);
        }
        else {
            $this->db->where('id', $id);
            return $this->db->update($this->table_name, $data);
        }
    }

    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->table_name);
    }





}
?>