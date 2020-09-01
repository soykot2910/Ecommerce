<?php

class Super_Admin extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect("Admin", "refresh");
        }
    }

    public function index() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/pages/dashboard_page', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    //---------------------------start category
    public function add_category() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/pages/add_category_page', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->Super_Admin_Model->save_category_info($data);
        $sdata = array();
        $sdata['msg'] = "Category Information Save Successfully";
        $this->session->set_userdata($sdata);
        redirect('Super_Admin/add_category');
    }

    public function manage_category() {
        $data = array();
        $data['all_category'] = $this->Super_Admin_Model->select_all_category_info();
        $data['admin_maincontent'] = $this->load->view('admin/pages/manage_category_page', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_category($category_id) {
        $data = array();
        $data['select_category'] = $this->Super_Admin_Model->select_category_info_by_category_id($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/pages/edit_category_page', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $data = array();
        $category_id = $this->input->post('category_id', TRUE);
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

        $this->Super_Admin_Model->update_category_info($data, $category_id);
        redirect("Super_Admin/manage_category");
    }

    public function unpublished_category($category_id) {
        $this->Super_Admin_Model->unpublished_category_info_by_category_id($category_id);
        redirect("Super_Admin/manage_category");
    }

    public function published_category($category_id) {
        $this->Super_Admin_Model->published_category_info_by_category_id($category_id);
        redirect("Super_Admin/manage_category");
    }

    public function delete_category($category_id) {

        $this->Super_Admin_Model->delete_category_info_by_id($category_id);
        redirect("Super_Admin/manage_category");
    }

    //---------------------------end category
//---------------------------start manufacturer

    public function add_manufacturer() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/pages/add_manufacturer_page', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_manufacturer() {
        $data = array();
        $data['manufacturer_name'] = $this->input->post('manufacturer_name', TRUE);
        $data['manufacturer_description'] = $this->input->post('manufacturer_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

        /*
         * Start File Upload
         */
        $config['upload_path'] = 'asset/back_end/manufacturer_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();

        if (!$this->upload->do_upload('manufacturer_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_manufacturer');
        } else {
            $fdata = $this->upload->data();
            $data['manufacturer_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * End File Upload
         */


        $this->Super_Admin_Model->save_manufacturer_info($data);
        $sdata = array();
        $sdata['msg'] = "Manufacturer Information Save Successfully";
        $this->session->set_userdata($sdata);
        redirect('Super_Admin/add_manufacturer');
    }

//---------------------------end manufacturer
//----------------------------start product

    public function add_product() {
        $data = array();
        $data['all_category'] = $this->Super_Admin_Model->select_all_category();
        $data['all_manufacturer'] = $this->Super_Admin_Model->select_all_manufacturer();
        $data['admin_maincontent'] = $this->load->view('admin/pages/add_product_page', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_product() {
        $data = array();
        $data['product_name'] = $this->input->post('product_name', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['manufacturer_id'] = $this->input->post('manufacturer_id', TRUE);
        $data['product_old_price'] = $this->input->post('product_old_price', TRUE);
        $data['product_new_price'] = $this->input->post('product_new_price', TRUE);
        $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
        $data['product_sku'] = $this->input->post('product_sku', TRUE);
        $data['product_review'] = $this->input->post('product_review', TRUE);
        $data['product_description'] = $this->input->post('product_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

        /*
         * Start File Upload
         */
        $config['upload_path'] = 'asset/back_end/product_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();

        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_product');
        } else {
            $fdata = $this->upload->data();
            $data['product_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * End File Upload
         */

        $this->Super_Admin_Model->save_product_info($data);
        $sdata = array();
        $sdata['msg'] = "Product Information Save Successfully";
        $this->session->set_userdata($sdata);
        redirect('Super_Admin/add_product');
    }

//--------------------------------end product
//--------------------------------Start Order
    public function order_manager() {
        $data = array();
        $data['all_order'] = $this->Super_Admin_Model->select_all_order_info();
        $data['admin_maincontent'] = $this->load->view('admin/pages/order_manager_page', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function view_invoice($order_id) {
        $data = array();
        $data['select_order'] = $this->Super_Admin_Model->select_order_info_by_order_id($order_id);

        $customer_id = $data['select_order']->customer_id;
        $data['customer_info'] = $this->Super_Admin_Model->select_customer_info_by_customer_id($customer_id);

        $shipping_id = $data['select_order']->shipping_id;
        $data['shipping_info'] = $this->Super_Admin_Model->select_shipping_info_by_shipping_id($shipping_id);


        $data['order_details_info'] = $this->Super_Admin_Model->select_order_details_info_by_order_id($order_id);


        $data['admin_maincontent'] = $this->load->view('admin/pages/invoice', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function invoice_print($order_id) {
        $data = array();
        $data['select_order'] = $this->Super_Admin_Model->select_order_info_by_order_id($order_id);

        $customer_id = $data['select_order']->customer_id;
        $data['customer_info'] = $this->Super_Admin_Model->select_customer_info_by_customer_id($customer_id);

        $shipping_id = $data['select_order']->shipping_id;
        $data['shipping_info'] = $this->Super_Admin_Model->select_shipping_info_by_shipping_id($shipping_id);


        $data['order_details_info'] = $this->Super_Admin_Model->select_order_details_info_by_order_id($order_id);


        $data['admin_maincontent'] = $this->load->view('admin/pages/invoice_print', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function create_pdf($order_id) {
        $data = array();
        $data['select_order'] = $this->Super_Admin_Model->select_order_info_by_order_id($order_id);

        $customer_id = $data['select_order']->customer_id;
        $data['customer_info'] = $this->Super_Admin_Model->select_customer_info_by_customer_id($customer_id);

        $shipping_id = $data['select_order']->shipping_id;
        $data['shipping_info'] = $this->Super_Admin_Model->select_shipping_info_by_shipping_id($shipping_id);


        $data['order_details_info'] = $this->Super_Admin_Model->select_order_details_info_by_order_id($order_id);



        // Load pdf library
        $this->load->library('pdf');

        // Load HTML content
        $this->dompdf->loadHtml($this->load->view('admin/pages/invoice', $data, TRUE));

        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'Portrait');

        // Render the HTML as PDF
        $this->dompdf->render();

        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("Welcome.pdf", array("Attachment" => 0));
    }

//--------------------------------End Order
    //start slider    

    public function add_slider() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/pages/add_slider_page', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_slider() {
        $data = array();
        $data['slider_name'] = $this->input->post('slider_name', TRUE);
        $data['slider_description'] = $this->input->post('slider_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

        /*
         * Start File Upload
         */
        $config['upload_path'] = 'asset/back_end/slider_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();

        if (!$this->upload->do_upload('slider_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_slider');
        } else {
            $fdata = $this->upload->data();
            $data['slider_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * End File Upload
         */


        $this->Super_Admin_Model->save_slider_info($data);
        $sdata = array();
        $sdata['msg'] = "Slider Information Save Successfully";
        $this->session->set_userdata($sdata);
        redirect('Super_Admin/add_slider');
    }

    public function manage_slider() {
        $data = array();
        $data['all_slider'] = $this->Super_Admin_Model->select_all_slider_info();
        $data['admin_maincontent'] = $this->load->view('admin/pages/manage_slider_page', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

//end slider    

//admin logout
    public function admin_logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $data = array();
        $data['logout'] = "You Are Successfully Logout!";
        $this->session->set_userdata($data);
        redirect("Admin");
    }

}
