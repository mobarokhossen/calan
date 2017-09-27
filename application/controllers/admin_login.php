<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Admin_login extends CI_Controller {

    public function __construct() {
        parent::__construct();

     
    }

    public function index() {
        $data = array();
        $data['title'] = 'Log In Form';
        $this->load->view('admin/index');
    }

    public function check_login() {
       
            $email_address=$this->input->post('admin_email_address',true);
        $password=$this->input->post('admin_password',true);
        
        //echo '----'.$email_address.'-----'.$password;
        //exit();
        
        
        $this->load->model('admin_login_model','al_model',true);
        $result=$this->al_model->select_admin($email_address,$password);
       // echo '<pre>';
       // print_r($result);
        if($result)
        {
            $data=array();
            $data['admin_id']=$result->admin_id;
            $data['admin_name']=$result->admin_name;
            $this->session->set_userdata($data);
            redirect("welcome");
        }
        else{
            $sdata=array();
            $sdata['exception']="User Email / Password Invalide ! ";
            $this->session->set_userdata($sdata);
            redirect("admin_login");
        }
      
         
    }
       public function login() {
        $data = array();
        $data['title'] = 'Header Details';
    
         $this->load->view('admin/admin_login', $data);}
    

}

?>