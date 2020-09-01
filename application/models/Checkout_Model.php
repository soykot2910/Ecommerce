<?php

class Checkout_Model extends CI_Model {
    //put your code here
    
    
    public function save_customer_info($data)
    {
        $this->db->insert('tbl_customer',$data);
        $customer_id=$this->db->insert_id();
        return $customer_id;
    }
    
    
    public function check_customer_info($customer_email,$customer_password)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_email',$customer_email);
        $this->db->where('customer_password',$customer_password);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
    }
    
    
    
    public function save_shipping_info($data)
    {
        $this->db->insert('tbl_shipping',$data);
        $shipping_id=$this->db->insert_id();
        return $shipping_id;
    }
    
    
    public function save_payment_info($pdata)
    {
        $this->db->insert('tbl_payment',$pdata);
        $payment_id=$this->db->insert_id();
        
        $data=array();
        $data['payment_id']=$payment_id;
        $this->session->set_userdata($data);
    }
    
    
    public function save_order_info()
    {
        
          
       if(count($this->cart->contents())==NULL )
       {
           redirect("Welcome");
       }
       
        $data=array();
        $data['customer_id']=$this->session->userdata('customer_id');
        $data['customer_name']=$this->session->userdata('customer_name');
        $data['shipping_id']=$this->session->userdata('shipping_id');
        $data['payment_id']=$this->session->userdata('payment_id');
        $data['order_total']=$this->session->userdata('g_total');
//        
//        print_r($data);
//        exit();
//        
         $this->db->insert('tbl_order',$data);
        $order_id=$this->db->insert_id();
        
        $sdata=array();
        $sdata['order_id']=$order_id;
        $this->session->set_userdata($sdata);
        
        
        
        $cart=$this->cart->contents();
        
        $sdata=array();
        foreach ($cart as $v_cart)
        {
            $sdata['order_id']=$this->session->userdata('order_id');
            $sdata['product_id']=$v_cart['id'];
            $sdata['product_name']=$v_cart['name'];
            $sdata['product_price']=$v_cart['price'];
            $sdata['product_qty']=$v_cart['qty'];
           
            $this->db->insert('tbl_order_details',$sdata);
        }
        
         $sql="update tbl_product as p,  tbl_order_details as od
              set p.product_quantity = p.product_quantity - od.product_qty
              where p.product_id=od.product_id and od.order_id='$order_id' ";
         $this->db->query($sql);
         
      
       $this->cart->destroy();
       
     
        
    }
    
}
