<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('Ebookmodel');
		$this->load->model('Webmodel');
	}
	
	public function index()
	{		

		$result['details']  = $this->Ebookmodel->get_book_details();
		$this->load->view('web/index',$result);
	
	}
	
	public function insert_register()
	{	
		$response = array();
	 
			if($this->Webmodel->insert_register())
				{		 	
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}
		echo json_encode($response); 
		
	}
		
	public function search_ebook()	
	{	
		$result['details']  = $this->Ebookmodel->get_book_details();
		$this->load->view('web/search_book',$result);
	}
	public function filter()
  	{   
    	$brand_filter = implode("','", $_POST["book_type"]);    	
   		$sql = "SELECT * FROM ebook WHERE type in ('".$brand_filter."') and Active = 1 ";
      	$result['details'] =  $this->db->query($sql)->result();      
   	 	$this->load->view('web/search_book',$result);
            
  	}
	public function filter_ebook($name)
    {   
       	$var =substr($name, 0, 1) ;
     //  $query = "select * FROM ebook WHERE type = '$name'  and Active = 1 ";
    	$query = "select * FROM ebook WHERE type like '$var%' and Active = 1 ";
       $result['details'] =  $this->db->query($query)->result();
	  $this->load->view('web/categories',$result);
      
    }

 

}
