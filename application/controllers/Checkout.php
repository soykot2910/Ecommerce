<?php

class Checkout extends CI_Controller {

    //put your code here


    public function index() {
        $data = array();
        $data['title'] = "Checout Page";
        $data['slider'] = FALSE;
        $data['banner'] = FALSE;
        $data['all_product'] = $this->Welcome_Model->select_all_published_product();
        $data['all_new_product'] = $this->Welcome_Model->select_all_published_new_product();
        $data['all_manufacturer'] = $this->Welcome_Model->select_all_published_manufacturer();
        $data['maincontent'] = $this->load->view('pages/checkout_page', '', TRUE);

        $data['all_category'] = $this->Welcome_Model->select_all_published_category();
        $this->load->view('master', $data);
    }

    public function customer_registration() {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name', TRUE);
        $data['customer_email'] = $this->input->post('customer_email', TRUE);
        $data['customer_phone'] = $this->input->post('customer_phone', TRUE);
        $data['customer_password'] = md5($this->input->post('customer_password', TRUE));
        $data['customer_city'] = $this->input->post('customer_city', TRUE);
        $data['customer_zip_code'] = $this->input->post('customer_zip_code', TRUE);
        $data['customer_country'] = $this->input->post('customer_country', TRUE);
        $data['customer_address'] = $this->input->post('customer_address', TRUE);

        $customer_id = $this->Checkout_Model->save_customer_info($data);
        if ($customer_id) {
            $sdata = array();
            $sdata['customer_id']=$customer_id;
            $sdata['customer_name']=$data['customer_name'];
            $sdata['msg'] = "Customer Information Save Successfully";
            $this->session->set_userdata($sdata);
            redirect("Checkout");
        }else{
            $sdata = array();
            $sdata['msg'] = "Email ID Or Pssword Invalid!";
            $this->session->set_userdata($sdata);
            redirect("Checkout");
        }
    }
    
    
    public function check_customer()
    {
        $customer_email=$this->input->post("customer_email",TRUE);
        $customer_password=md5($this->input->post("customer_password",TRUE));
        
        $result=$this->Checkout_Model->check_customer_info($customer_email,$customer_password);
         if ($result) {
            $sdata = array();
            $sdata['customer_id']=$result->customer_id;
            $sdata['customer_name']=$result->customer_name;
            $this->session->set_userdata($sdata);
            redirect("Checkout/customer_shipping");
        }else{
            $sdata = array();
            $sdata['loginmsg'] = "Email ID Or Pssword Invalid!";
            $this->session->set_userdata($sdata);
            redirect("Checkout");
        }
    }
    
    
    
    public function customer_shipping()
    {
        $data = array();
        $data['title'] = "Shipping Page";
        $data['slider'] = FALSE;
        $data['banner'] = FALSE;
        $data['all_product'] = $this->Welcome_Model->select_all_published_product();
        $data['all_new_product'] = $this->Welcome_Model->select_all_published_new_product();
        $data['all_manufacturer'] = $this->Welcome_Model->select_all_published_manufacturer();
        $data['maincontent'] = $this->load->view('pages/shipping_page', '', TRUE);

        $data['all_category'] = $this->Welcome_Model->select_all_published_category();
        $this->load->view('master', $data);
    }

    
    public function save_shipping(){
        $data = array();
        $data['shipping_name'] = $this->input->post('shipping_name', TRUE);
        $data['shipping_email'] = $this->input->post('shipping_email', TRUE);
        $data['shipping_phone'] = $this->input->post('shipping_phone', TRUE);
        $data['shipping_city'] = $this->input->post('shipping_city', TRUE);
        $data['shipping_zip_code'] = $this->input->post('shipping_zip_code', TRUE);
        $data['shipping_country'] = $this->input->post('shipping_country', TRUE);
        $data['shipping_address'] = $this->input->post('shipping_address', TRUE);

        $shipping_id = $this->Checkout_Model->save_shipping_info($data);
        if ($shipping_id) {
            $sdata = array();
            $sdata['shipping_id']=$shipping_id;
            $this->session->set_userdata($sdata);
            redirect("Checkout/customer_payment");
        }else{
            redirect("Checkout");
        }
    }
    
    
    
    public function customer_payment()
    {
        $data = array();
        $data['title'] = "Payment Page";
        $data['slider'] = FALSE;
        $data['banner'] = FALSE;
        $data['all_product'] = $this->Welcome_Model->select_all_published_product();
        $data['all_new_product'] = $this->Welcome_Model->select_all_published_new_product();
        $data['all_manufacturer'] = $this->Welcome_Model->select_all_published_manufacturer();
        $data['maincontent'] = $this->load->view('pages/payment_page', '', TRUE);

        $data['all_category'] = $this->Welcome_Model->select_all_published_category();
        $this->load->view('master', $data);   
    }
    
    
    
    public function confirm_order()
    {
        $pdata=array();
        $pdata['payment_type']=$this->input->post("payment_type",TRUE);
        
        
        if($pdata['payment_type']=='cash on delivery')
        {
          $this->Checkout_Model->save_payment_info($pdata);
          $this->Checkout_Model->save_order_info();
          
         $data = array();
        $data['title'] = "Confirm Order Page";
        $data['slider'] = FALSE;
        $data['banner'] = FALSE;
        $data['all_product'] = $this->Welcome_Model->select_all_published_product();
        $data['all_new_product'] = $this->Welcome_Model->select_all_published_new_product();
        $data['all_manufacturer'] = $this->Welcome_Model->select_all_published_manufacturer();
        $data['maincontent'] = $this->load->view('pages/confirm_order_page', '', TRUE);

        $data['all_category'] = $this->Welcome_Model->select_all_published_category();
        $this->load->view('master', $data);   
          
          
          
        }
        else {
          $this->Checkout_Model->save_payment_info($pdata);
          $this->Checkout_Model->save_order_info();
          
         $data = array();
        $data['title'] = "Confirm Order Page";
        $data['slider'] = FALSE;
        $data['banner'] = FALSE;
        $data['all_product'] = $this->Welcome_Model->select_all_published_product();
        $data['all_new_product'] = $this->Welcome_Model->select_all_published_new_product();
        $data['all_manufacturer'] = $this->Welcome_Model->select_all_published_manufacturer();
        $data['maincontent'] = $this->load->view('pages/confirm_order_page', '', TRUE);

        $data['all_category'] = $this->Welcome_Model->select_all_published_category();
        $this->load->view('master', $data);  
        }
        
        
        
        
        
    }

    









    public function customer_logout()
    {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_name');
        redirect("Welcome");
    }
            
}
