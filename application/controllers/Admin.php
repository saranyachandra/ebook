<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('Ebookmodel');
		if($this->session->userdata('id') == '') { 
			redirect('Login/admin_login');
		}
	}
	
	public function dashboard()
	{
		$id = $this->session->userdata('id');
		$result['activeTab'] = "dashboard";
		$result['details']  = $this->Ebookmodel->get_book_details_home();

		$tot_stu = 'SELECT count(user_id) as total_stu FROM user_registration where 
        admin_id="'.$id.'" ';
        $result['stu_count']= $this->db->query($tot_stu)->row();

        $active_stu = 'SELECT count(user_id) as act_stu FROM user_registration where 
        admin_id="'.$id.'" and status = 1 ';
        $result['act_count']= $this->db->query($active_stu)->row();
		
		$this->db->select('*');
        $this->db->from('admin_login');   
        $this->db->where('id',$id);        
        $qry = $this->db->get()->row();
        $result['user_count_val']= $qry->user_count;
      
		$this->load->view('admin/index',$result);
	}
	
	public function create_user()
	{
		$result['activeTab'] = "Register_user";			  	 
		$this->load->view('admin/create_user',$result);
	}

	public function user_insert()
	{
			$response = array();	  
		$admin_id= $this->session->userdata('id');
		$this->db->select('*');
        $this->db->from('admin_login');   
        $this->db->where('id',$admin_id);        
        $qry = $this->db->get()->row();
        $user_count_val= $qry->user_count;

        $this->db->select('*');
        $this->db->from('user_registration');   
        $this->db->where('admin_id',$admin_id);      
        $count_user = $this->db->get()->result();
        $count = count($count_user);
		
		if($user_count_val >= $count){


		   $data = array('admin_id'    => $admin_id,
		    			'name'    => $this->input->post('name'),
	                    'email'          => $this->input->post('email'),
	                    'phone'          => $this->input->post('phone'),
	                    'password'       => $this->input->post('password'),                        
	                    'type'     => $this->input->post('user_type'),                     
	                    'create_at'      => date('Y-m-d'),
	                    );
		    $insert =  $this->db->insert('user_registration', $data);
		   	if($insert){
		   		$response['status'] = 'success';  
		   		
		   	}
		}
		else{
			$response['status'] = 'failed';
			
			
		}
		echo json_encode($response);
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
	public function isexist_email()
	{   
	  
		$id =$this->input->post('id');
		$email =$this->input->post('email');
				
		
		$this->db->select('*');
        $this->db->from('user_registration');
		$this->db->where('email', $email);                 
	    $query = $this->db->get()->result();     				
		
		
	  	if(count($query) > 0  )
					{		 	
						$response['status'] = 'success';	
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}

		echo json_encode($response);    	

	}
	public function get_adminuser()
	{
		$result['activeTab'] = "Register_user";
		$result['details']  = $this->Ebookmodel->get_adminuser_details();
		$this->load->view('admin/manage_user',$result);
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
	
}
	