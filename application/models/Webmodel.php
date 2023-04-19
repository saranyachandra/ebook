<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

   	public function search_ebook()
    {   
        $name = $this->input->post('search'); 
        $query = "select * FROM ebook WHERE book_name = '$name' or author_name = '$name' or type = '$name' and Active = 1 ";
       return $this->db->query($query)->result();

      
    }

}