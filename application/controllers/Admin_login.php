<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_login extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('admin_login_model');
        }
        
        public function index()
	{
		if (isset($this->session->admin_id)) {
                     redirect('dashboard');
                }  
                else {
                    $this->load->view('admin/admin_login');
                }      
	}                       
        public function login()
	{
            $admin_email = $this->input->post('admin_email', TRUE);
            $password = $this->input->post('admin_password', TRUE);
            $admin_info = $this->admin_login_model->check_admin_info ($admin_email);
            
        if ( $admin_info != NULL) {
               if (password_verify($password, $admin_info->admin_password)) 
                   {   $sdata['admin_name'] = $admin_info->admin_name;
                       $sdata['admin_email'] = $admin_info->admin_email;
                       $sdata['admin_id'] = $admin_info->admin_id;
                       $sdata['admin_role'] = $admin_info->admin_role;
                       $sdata['admin_image'] = $admin_info->admin_image;
                       $this->session->set_userdata($sdata);
                       redirect('dashboard');    
                       
                   }   else   {
                   $data['message']= 'Wrong Email or Password';
                   $this->load->view('admin/admin_login', $data); }   
  
            } else { 
                    $data['message']= 'You are not registered!';
                    $this->load->view('admin/admin_login', $data);  
            }
            
            }
       
 
        public function logout ()
        {
            $this->session->sess_destroy();
            redirect('admin');
        }
        
        
        
        
        
        
//        ===================================================================
        function upload_admin_image()
        {
        if ($image != NULL){
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2500;
            $config['max_width']            = 3000;
            $config['max_height']           = 3000;
            //$config IS SENT TO UPLOAD LIBRARY
            $this->load->library('upload', $config);
        
        //IF  UPLOAD IS TRUE 
            if ( $this->upload->do_upload('admin_image'))
                {
                //AFTER UPLOADING IMAGE. ALL IMAGE INFO IS RECEIVED VIA $data 
                $data = $this->upload->data();
                //ONLY IMAGE PATH IS TAKEN FORM $data ARRAY WITH FOLDER NAME  TO SAVE IN DATABASE AND RETURNED
                $image_path = "uploads/$data[file_name]";
                return  $image_path;
                } else {
                //IF UPLOAD  IS NOT OK FOR  VALIDATION  PROBLEM  IT WILL SHOW ERROR MSG.
                    $error = $this->upload->display_errors();
                    print_r($error);
                } 
        } else {
            $image_path = '';
            return $image_path;
        }
        
        
        }
        
        function upload_patient_image()
        {
        // TO LOAD IMAGE LIBRARY AN ARRAY IS DECLARED NAMED $config WITH SOME VALIDATION
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1500;
        $config['max_width']            = 1500;
        $config['max_height']           = 1500;
        //$config IS SENT TO UPLOAD LIBRARY
        $this->load->library('upload', $config);
        
        //IF  UPLOAD IS TRUE 
            if ( $this->upload->do_upload('image'))
                {
                //AFTER UPLOADING IMAGE. ALL IMAGE INFO IS RECEIVED VIA $data 
                $data = $this->upload->data();
                //ONLY IMAGE PATH IS TAKEN FORM $data ARRAY WITH FOLDER NAME  TO SAVE IN DATABASE AND RETURNED
                $image_path = "uploads/$data[file_name]";
                return  $image_path;
                } else {
                //IF UPLOAD  IS NOT OK FOR  VALIDATION  PROBLEM  IT WILL SHOW ERROR MSG.
                    $error = $this->upload->display_errors();
                    print_r($error);
                }
        
        }
//        ==================================================================
 
        
        public function add_doctor(){
        
        $this->form_validation->set_rules('admin_name', 'Name', 'required|Min_length[3]');
        $this->form_validation->set_rules('admin_password', 'Password', 'required|min_length[3]');

        $this->form_validation->set_rules('admin_email', 'Email Address', 'required|max_length[100]|is_unique[tbl_admin.admin_email]');
       
        $admin_image = $this->upload_admin_image();
        
        if($this->form_validation->run()){
        
            $this->admin_login_model->register_new_doctor($admin_image);
            
            $this->session->set_flashdata('success', 'Doctor Added  Successfully!');
            redirect('add-doctor-form'); 
             
        } else {
            $this->session->set_flashdata('error', 'Unsuccessfull');
            redirect('add-doctor-form');      
        }
        
        }
        
        public function add_pharmacist(){
        
        $this->form_validation->set_rules('admin_name', 'Name', 'required|Min_length[3]');
        $this->form_validation->set_rules('admin_password', 'Password', 'required|min_length[3]');
        $this->form_validation->set_rules('admin_email', 'Email Address', 'required|max_length[100]|is_unique[tbl_admin.admin_email]');
        
        $admin_image = $this->upload_admin_image();
        
        if($this->form_validation->run()  == FALSE){
            
            $this->session->set_flashdata('error', 'Pharmacist Add Unsuccessfull');
            redirect('add-pharmacist-form');

             
        } else {
           
            $this->admin_login_model->register_new_admin($admin_image);
            
            $this->session->set_flashdata('success', ' Added  Successfully!');
            redirect('add-pharmacist-form');
            
        }
        }
        public function add_receptionist(){
        
        $this->form_validation->set_rules('admin_name', 'Name', 'required|Min_length[3]');
        $this->form_validation->set_rules('admin_password', 'Password', 'required|min_length[3]');
        $this->form_validation->set_rules('admin_email', 'Email Address', 'required|max_length[100]|is_unique[tbl_admin.admin_email]');
        
        $image = $this->input->post('admin_image', TRUE);
        $admin_image = $this->upload_admin_image($image);
        
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error', 'Receptionist Add Unsuccessfull');
            redirect('add-receptionist-form');
        } else {
            $this->admin_login_model->register_new_admin($admin_image);
            $this->session->set_flashdata('success', 'Receptionist Added  Successfully!');
            redirect('add-receptionist-form');
            
        }
        }
        public function add_laboratorist(){
        
        $this->form_validation->set_rules('admin_name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('admin_password', 'Password', 'required|min_length[3]');
        $this->form_validation->set_rules('admin_email', 'Email Address', 'required|max_length[100]|is_unique[tbl_admin.admin_email]');
        
        $image = $this->input->post('admin_image', TRUE);
        $admin_image = $this->upload_admin_image($image);
        
        if($this->form_validation->run()  == FALSE){
            
            $this->session->set_flashdata('error', 'Laboratorist Add Unsuccessfull');
            redirect('add-laboratorist-form');

             
        } else {
           
            $this->admin_login_model->register_new_admin($admin_image);
            
            $this->session->set_flashdata('success', 'Laboratorist Added  Successfully!');
            redirect('add-laboratorist-form');
            
        }
        }
        public function add_nurse(){
        
        $this->form_validation->set_rules('admin_name', 'Name', 'required|Min_length[3]');
        $this->form_validation->set_rules('admin_password', 'Password', 'required|min_length[3]');
        $this->form_validation->set_rules('admin_email', 'Email Address', 'required|max_length[100]|is_unique[tbl_admin.admin_email]');
        
        $admin_image = $this->upload_admin_image();
        
        if($this->form_validation->run()  == FALSE){
            
            $this->session->set_flashdata('error', 'Nurse Add Unsuccessfull');
            redirect('add-nurse-form');

             
        } else {
            //if validation  true inser run via  model
            $this->admin_login_model->register_new_admin($admin_image);
            
            $this->session->set_flashdata('success', 'Nurse Added  Successfully!');
            redirect('add-nurse-form');
            
        }
        }
        public function add_patient(){
        
        $this->form_validation->set_rules('admin_name', 'Name', 'required|Min_length[3]');
        $this->form_validation->set_rules('admin_password', 'Password', 'required|min_length[3]');
        $this->form_validation->set_rules('admin_email', 'Email Address', 'required|max_length[100]|is_unique[tbl_admin.admin_email]');
       
        $admin_image = $this->upload_admin_image();
        
        if($this->form_validation->run()){
        
            //if validation  true inser run via  model
            $this->admin_login_model->register_new_patient($admin_image);
            
            $this->session->set_flashdata('success', 'Patient Added  Successfully!');
            redirect('add-patient-form'); 
             
        } else {
            $this->session->set_flashdata('error', 'Unsuccessfull');
            redirect('add-patient-form');      
        }
        
        }
        
        
        
        
        
       
}