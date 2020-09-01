<?php

class Super_Admin_Model extends CI_Model {
    
    //-----------Start Category
    
    public function save_category_info($data){
        $this->db->insert('tbl_category', $data);
    }
    
    public function select_all_category_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    
    public function select_category_info_by_category_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
    }
    
    public function update_category_info($data,$category_id)
    {
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category',$data);
    }

    public function unpublished_category_info_by_category_id($category_id)
    {
        $this->db->set("publication_status",0);
        $this->db->where("category_id",$category_id);
        $this->db->update("tbl_category");
    }
    public function published_category_info_by_category_id($category_id)
    {
        $this->db->set("publication_status",1);
        $this->db->where("category_id",$category_id);
        $this->db->update("tbl_category");
    }

    

    public function delete_category_info_by_id($category_id)
    {
        $this->db->where("category_id",$category_id);
        $this->db->delete("tbl_category");
    }
    
    
    
//    end category
    
    
//    start manufacturer
     public function save_manufacturer_info($data){
        $this->db->insert('tbl_manufacturer', $data);
    }
//    end manufacturer
  
    
//start product    
    public function select_all_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    public function select_all_manufacturer()
    {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status',1);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
   
    
    public function save_product_info($data)
    {
        $this->db->insert("tbl_product",$data);
    }


    //end product

    //start order
    
    public function select_all_order_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    
    
    public function select_order_info_by_order_id($order_id)
    {
       $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('order_id',$order_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result; 
    }
    
    
    public function select_customer_info_by_customer_id($customer_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id',$customer_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result; 
    }
    public function select_shipping_info_by_shipping_id($shipping_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_shipping');
        $this->db->where('shipping_id',$shipping_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result; 
    }
    public function select_order_details_info_by_order_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order_details');
        $this->db->where('order_id',$order_id);
        $query=$this->db->get();
        $result=$query->result();
        return $result; 
    }
    
    //end order
    
    
//start slider
    public function save_slider_info($data)
    {
      $this->db->insert('tbl_slider',$data);  
    }

    
    public function select_all_slider_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $query=$this->db->get();
        $result=$query->result();
        return $result; 
    }

//end slider
    
    
    }
