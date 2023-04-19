<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();	
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");	
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		
	}
	public function index()
	{
		$this->load->view("super_admin/login");
	}
	public function admin_login()
	{
		$this->load->view("admin/login");
	}

	public function login_auth()
	{
		$response = array();

		$user_name = $_POST["email"];
	    $password = $_POST["password"];
	    
	    $credential = array('email' => $user_name, 'password' => $password);
	    $query = $this->db->get_where('admin_login', $credential)->result();
	 	
	        if($query == true)
						{		 	
							foreach ($query as $queries) 
							{
								$response['status'] = 'success'; 
								$this->session->set_userdata('id', $queries->id);
								$this->session->set_userdata('name', $queries->name);
							}			
						}
						else 
						{	
						 	$response['status'] = 'failed';						 	
						}
		echo json_encode($response);

	}
	public function admin_login_auth()
	{
		$response = array();

		$user_name = $_POST["email"];
	    $password = $_POST["password"];
	    
	    $credential = array('email' => $user_name, 'password' => $password);
	    $query = $this->db->get_where('admin_login', $credential)->result();
	 	
	        if($query == true)
						{		 	
							foreach ($query as $queries) 
							{
								$response['status'] = 'success'; 
								$this->session->set_userdata('id', $queries->id);
								$this->session->set_userdata('name', $queries->name);
							}			
						}
						else 
						{	
						 	$response['status'] = 'failed';						 	
						}
		echo json_encode($response);

	}
	public function user_register()
	{
		$this->load->view("web/register");
	}
	public function register_insert()
	{
		
	    $data = array('name'    => $this->input->post('name'),
                    'email'          => $this->input->post('email'),
                    'phone'          => $this->input->post('phone'),
                    'password'       => $this->input->post('password'),                        
                    'type'           => $this->input->post('type'),                     
                    'create_at'      => date('Y-m-d'),
                    );
	    $insert =  $this->db->insert('user_registration', $data);
	   
	 	
	        if($insert == true)
						{		 	
							$response['status'] = 'success';		
						}
						else 
						{	
						 	$response['status'] = 'failed';						 	
						}
		echo json_encode($response);

	}
	public function user_loin()
	{
		$this->load->view("web/login");
	}
	public function user_auth()
	{
		$response = array();

		$email = $_POST["email"];
	    $password = $_POST["password"];

	    $credential = array('email' => $email, 'password' => $password,'status' => 1);
	    $query = $this->db->get_where('user_registration', $credential)->result();
	 	
	        if($query == true)
						{		 	
							foreach ($query as $queries) 
							{
								$response['status'] = 'success'; 
								$this->session->set_userdata('user_id', $queries->user_id);
								$this->session->set_userdata('user_name', $queries->name);
							}			
						}
						else 
						{	
						 	$response['status'] = 'failed';						 	
						}
		echo json_encode($response);

	}
	public function check_email()
	{
		
		if(isset($_POST['email']))
		{
			$email=$_POST['email'];			
			
			$credential = array('email' => $email);			
			$query = $this->db->get_where('user_registration', $credential)->result();
			
			 if($query==true)
			 {
			   echo "<b style='color:red'>Already Exist plz try new</b>";
			 }
			
			 exit();
		}
	}
	public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Login/index');
    }
    public function admin_Logout()
    {
        $this->session->sess_destroy();
        redirect('Login/admin_login');
    }
    public function user_logout()
    {
        $this->session->sess_destroy();
        redirect('Web/index');
    }






}



