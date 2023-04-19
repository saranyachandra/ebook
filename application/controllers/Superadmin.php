<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('Ebookmodel');
	}
	
	public function dashboard()
	{
		$result['activeTab'] = "dashboard";
		$result['details']  = $this->Ebookmodel->get_book_details_home();

		$tot_stu = 'SELECT count(user_id) as total_stu FROM user_registration where 
        type="Student" ';
        $result['stu_count']= $this->db->query($tot_stu)->row();
		
		$result['tech_count']  = $this->Ebookmodel->get_user_count();
		$result['book_count']  = $this->Ebookmodel->get_book_count();

		$this->load->view('admin/index',$result);
	}
	public function create_admin()
	{
		$result['activeTab'] = "admin_user";			  	 
		$this->load->view('super_admin/create_admin',$result);
	}
	public function admin_insert()
	{
		
	    $data = array('user_type'    => 'admin',
                    'email'          => $this->input->post('admin_email'),
                    'name'          => $this->input->post('admin_name'),
                    'password'       => $this->input->post('admin_password'),                        
                    'user_count'     => $this->input->post('user_count'),                     
                    'create_at'      => date('Y-m-d'),
                    );
	    $insert =  $this->db->insert('admin_login', $data);
	   	if($insert){
	   		$this->load->view('super_admin/view_admin');
	   	} 


	}
	public function view_admin()
	{
		$result['activeTab'] = "admin_user";		
	  	$result['details']  = $this->Ebookmodel->get_admin_details();	  	  	
		$this->load->view('super_admin/admin_view',$result);
	}
	public function create_ebook()
	{
		$result['activeTab'] = "dashboard";			  	 
		$this->load->view('admin/create_ebook',$result);
	}
	public function insert_ebook()
	{	
		$response = array();
	 
			if($this->Ebookmodel->insert_ebook())
				{		 	
					
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}
		echo json_encode($response); 
		
	}

	public function book_details()
	{
		$result['activeTab'] = "dashboard";		
	  	$result['details']  = $this->Ebookmodel->get_book_details();	  	  	
		$this->load->view('admin/ebook_details',$result);
	}
	public function manage_user()
	{
		$result['activeTab'] = "Register_user";		
	  	$result['details']  = $this->Ebookmodel->get_user_details();	  	  	
		$this->load->view('admin/manage_user',$result);
	}

	public function delete_user($id)
	{				
	  	$response = array();	    
	    $sql= $this->db->query("delete from user_registration where user_id='".$id."'");
	    if($sql == true)
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
		echo json_encode($response);
	}
	public function status_id()
	{   
	  
		$id =$this->input->post('id');
		$sta =$this->input->post('status');
				
		$update = array( 'status' => $sta );                  
	           				
		$update = $this->db->where('user_id', $id)->update('user_registration', $update);
		
	  	if($update == true)
					{		 	
						$response['status'] = 'success';	
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}

		echo json_encode($response);    	

	}
	public function delete_ebook($id)
	{
	    $response = array();
	    if($this->Ebookmodel->delete_ebook_id($id))
				{		 	
					$response['status'] = 'success'; 			
				}
			else 
				{	
					$response['status'] = 'failed';
				}		
		echo json_encode($response);
	}
	public function edit_ebook($book_id)
	{		
		$result['activeTab'] = "dashboard";		
	  	$result['details']  = $this->Ebookmodel->edit_ebook($book_id);	  	  	
		$this->load->view('admin/edit_book_details',$result);
	}
	public function update_ebook()
	{		
		$response = array();
           if($this->Ebookmodel->update_ebook())
            {
            	$response['status'] = 'success';            	
            }
            else
            {
            	$response['status'] = 'failed';
            }
        	
        echo json_encode($response);
	}
}
