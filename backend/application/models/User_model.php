<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class User_Model extends CI_Model
{
    function login($username, $password)
    {
        $this -> db -> select('id, username, password,email, role');
        $this -> db -> from('users');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}
?>