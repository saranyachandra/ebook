<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ebookmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insert_ebook()
    {
        
        $now = date('Y-m-d H:i:s');  
        if (isset($_FILES['thumb_img']) && !empty($_FILES['thumb_img']["name"]))
        {
            $config1['upload_path'] = './assets/admin/uploads/ebook_thumb';  
            $config1['allowed_types'] = '*';
            $config1['max_size'] = '30720';   
            $config1['encrypt_name'] = TRUE;   

            $this->load->library('upload', $config1);
            $this->upload->initialize($config1); 
            $this->upload->do_upload('thumb_img'); 
            $thumb_upload=$this->upload->data(); 
        }

        $data = array('book_name'  => $this->input->post('book_name'),
                    'type'         => $this->input->post('book_type'),
                    'author_name'  => $this->input->post('author_name'),
                    'url'          => $this->input->post('url'),                       
                    'img'          => $thumb_upload['file_name'],  
                    'publisher'    => $this->input->post('Publisher'),  
                    'isbn_no'      => $this->input->post('ISBN_No'),
                    'year'         => $this->input->post('Year'), 
                    'edition'      => $this->input->post('Edition'),
                    'create_at'    => $now
                    );

        $insert = $this->db->insert('ebook',$data);        
        return true; 

    } 

    public function update_ebook()
    {
        
        $now = date('Y-m-d H:i:s');  
        $id=$this->input->post('book_id'); 
        if (isset($_FILES['thumb_img']) && !empty($_FILES['thumb_img']["name"]))
        {
            $config1['upload_path'] = './assets/admin/uploads/ebook_thumb';  
            $config1['allowed_types'] = '*';
            $config1['max_size'] = '30720';   
            $config1['encrypt_name'] = TRUE;   

            $this->load->library('upload', $config1);
            $this->upload->initialize($config1); 
            $this->upload->do_upload('thumb_img');             
            $thumb_upload=$this->upload->data(); 
            $thumb = $thumb_upload['file_name'];
        }
         else{
                $thumb = $this->input->post('thumb_img_old');               
            }

        $data = array('book_name'  => $this->input->post('book_name'),
                    'type'         => $this->input->post('book_type'),
                    'author_name'  => $this->input->post('author_name'),
                    'url'          => $this->input->post('url'),                       
                    'img'          => $thumb,  
                    'publisher'    => $this->input->post('Publisher'),  
                    'isbn_no'      => $this->input->post('ISBN_No'),
                    'year'         => $this->input->post('Year'), 
                    'edition'      => $this->input->post('Edition'),
                    'create_at'    => $now
                    );
        $update = $this->db->where('ebook_id', $id)->update('ebook', $data);
              
        return true; 

    } 

    public function get_book_details()
    {       
        $this->db->select('*');
        $this->db->from('ebook');   
        $this->db->where('Active',1);
        $this->db->order_by('ebook_id', 'desc');
        return $this->db->get()->result();
       
    }
    public function get_admin_details()
    {       
        $this->db->select('*');
        $this->db->from('admin_login');   
        //$this->db->where('Active',1);
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
       
    }
    public function get_adminuser_details()
    {   
        $admin_id = $this->session->userdata('id');    
        $this->db->select('*');
        $this->db->from('user_registration');   
        $this->db->where('admin_id',$admin_id);
        $this->db->order_by('user_id', 'desc');
        return $this->db->get()->result();
       
    }
    public function get_book_details_home()
    {       
        $this->db->select('*');
        $this->db->from('ebook');   
        $this->db->where('Active',1);
        $this->db->limit(5);
        $this->db->order_by('ebook_id', 'desc');
        return $this->db->get()->result();
       
    }
    public function get_user_details()
    {       
        $this->db->select('*');
        $this->db->from('user_registration'); 
        $this->db->order_by('user_id', 'desc');
        return $this->db->get()->result();
       
    }
    public function get_user_count()
    {        
        $tot_tech = 'SELECT count(user_id) as total_tech FROM user_registration where 
        type="Teacher" ';
        return $this->db->query($tot_tech)->row();
    }
    public function get_book_count()
    { 
        $tot_book = 'SELECT count(ebook_id) as total FROM ebook';
        return $this->db->query($tot_book)->row();
    }
    public function delete_ebook_id($id)
    {       
        $active_update = array( 'Active' => 0 );    
        $update = $this->db->where('ebook_id', $id)->update('ebook', $active_update);       
        return true;       
    }
    public function edit_ebook($id)
    {     
        $this->db->select('*');
        $this->db->from('ebook');
        $this->db->where('ebook_id',$id);   
        return $this->db->get()->row();
    }
}     