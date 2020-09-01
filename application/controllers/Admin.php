<?php

class Admin extends CI_Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id!=NULL)
        {
            redirect("Super_Admin","refresh");
        }
    }




    public function index()
    {
        $this->load->view('admin/admin_login');
    }
    
    public function admin_login_check()
    {
       $admin_email=$this->input->post('admin_email',TRUE);
       $admin_password=$this->input->post('admin_password',TRUE);
       $result=$this->Admin_Model->check_admin_info($admin_email,$admin_password);
       if($result)
       {
        $data=array();
        $data['admin_id']=$result->admin_id;
        $data['admin_name']=$result->admin_name;
        $this->session->set_userdata($data);
        
     
           redirect('Super_Admin');
       }
       else{
           $data=array();
           $data['admin_id']='';
           $data['message']="Your Email Id Or Password invalid!";
           $this->session->set_userdata($data);
           redirect('Admin');
       }
    }
    
}
