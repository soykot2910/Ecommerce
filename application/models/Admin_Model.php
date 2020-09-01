<?php

class Admin_Model extends CI_Model {
    //put your code here
    
    
    public function check_admin_info($admin_email,$admin_password)
    {
       $this->db->select('*');
       $this->db->from('tbl_admin');
       $this->db->where('admin_email',$admin_email);
       $this->db->where('admin_password',md5($admin_password));
       $query=$this->db->get();
       $result=$query->row();
       return $result;
    }
    
    
}
