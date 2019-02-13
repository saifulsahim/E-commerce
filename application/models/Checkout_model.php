<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model
{

    public function get_customer_details($customer_email, $customer_password)
    {

        $customer_details = $this->db->select('*')
            ->from('customer')
            ->where(array('email_address' => $customer_email, 'password' => $customer_password))
            ->get()
            ->row();


        return $customer_details;


    }

    public function ajax_email_address_check($email_address)
    {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('email_address', $email_address);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function save_customer_info()
    {
        $data = array();
        $result = $this->input->post();

//        if($result['customerName'] == '' || $result['emailAddress'] == '' || $result['password']){
//            redirect('checkout');
//        } else{
        $data['customer_name'] = $this->input->post('customerName', TRUE);
        $data['email_address'] = $this->input->post('emailAddress', TRUE);
        $data['password'] = md5($this->input->post('password', TRUE));


        $this->db->insert('customer', $data);
        $customer_id = $this->db->insert_id();
        return $customer_id;
//        }


    }

//    public function customer_login_check_info($customer)
//    {
//        $customer_email = $this->input->post('emailAddress',true);
//        $customer_password = md5($this->input->post('password', TRUE));
//
//       $customer_details = $this->checkout_model->get_customer_details($customer_email);
//       if(password_verify($customer_password,$customer_details->password))
//       {
//           $session_data['customer_id'] = $customer_details->customer_id;
//           $session_data['email_address'] = $customer_details->email_address;
//           $session_data['password'] = $customer_details->password;
//
//       }
//       else{
//           $data['error_message']= 'Not a Valid User';
//           $this->load->view('checkout/customer_registration', $data);
//
//       }
//    }

    public function select_customer_info_by_id($customer_id)
    {

        $customer_info = $this->db->select('*')
            ->from('customer')
            ->where('customer_id', $customer_id)
            ->get()->row();
        return $customer_info;
    }

    public function update_billing_info()
    {

        $data = array();
        $data['customer_name'] = $this->input->post('customerName', true);
        $data['email_address'] = $this->input->post('emailAddress', true);
        $data['mobile_number'] = $this->input->post('mobileNumber', true);
        $data['address'] = $this->input->post('address', true);
        $data['city'] = $this->input->post('city', true);
        $data['country'] = $this->input->post('country', true);
        $data['zip_code'] = $this->input->post('zipCode', true);
        $shipping_status = $this->input->post('shippingStatus', true);


        if ($shipping_status == 'on') {

            $customer_id = $this->input->post('customerId', true);
            $this->db->where('customer_id', $customer_id);
            $this->db->update('customer', $data);

            $data['customer_id'] = $customer_id;
            $this->db->insert('shipping', $data);
            $shipping_id = $this->db->insert_id();
            $sdata = array();
            $sdata['shipping_id'] = $shipping_id;
            $this->session->set_userdata($sdata);

        } else {

//            $customer_id = $this->input->post('customerId', true);
//            $this->db->where('customer_id', $customer_id);
//            $this->db->update('customer', $data);
            $customer_id = $this->input->post('customerId', true);
            $this->db->where('customer_id', $customer_id);
            $this->db->update('customer', $data);
            redirect('shipping');
        }


    }

    public function save_shipping_info()
    {

        $data = array();
        $data['customer_id'] = $this->input->post('customerId',true);
        $data['shipping_name'] = $this->input->post('shippingName', TRUE);
        $data['email_address'] = $this->input->post('emailAddress', TRUE);
        $data['address'] = $this->input->post('address', TRUE);
        $data['mobile_no'] = $this->input->post('mobileNo', TRUE);
        $data['city'] = $this->input->post('city', TRUE);
        $data['country'] = $this->input->post('country', TRUE);
        $data['zip_code'] = $this->input->post('zipCode', TRUE);


        $this->db->insert('shipping', $data);


        $sdata = array();
        $sdata['shipping_id'] = $this->db->insert_id();
        $this->session->set_userdata($sdata);

    }

    public function save_payment_info()
    {

        $data = array();
        $data['payment_type'] = $this->input->post('paymentType', TRUE);
        $data['comments'] = $this->input->post('comments', TRUE);

        $this->db->insert('payment', $data);

        $sdata = array();
        $sdata['payment_id'] = $this->db->insert_id();
        $this->session->set_userdata($sdata);
    }

    public function save_order_info()
    {

        $data = array();
        $data['customer_id'] = $this->session->userdata('customer_id');
        $data['shipping_id'] = $this->session->userdata('shipping_id');
        $data['payment_id'] = $this->session->userdata('payment_id');
        $data['order_total'] = $this->session->userdata('gtotal');


        $this->db->insert('tbl_order', $data);
        $order_id = $this->db->insert_id();

        foreach ($this->cart->contents() as $v_content) {
            $oddata = array();
            $oddata['order_id'] = $order_id;
            $oddata['product_id'] = $v_content['id'];
            $oddata['product_name'] = $v_content['name'];
            $oddata['product_price'] = $v_content['price'];
            $oddata['product_sales_quantity'] = $v_content['qty'];
            $this->db->insert('order_details', $oddata);

        }
        $this->cart->destroy();

        $sql = "update product,order_details
                 set  product.product_quantity = product.product_quantity - order_details.product_sales_quantity
                    where product.product_id= order_details.product_id
                    and order_details.order_id = '$order_id'";

        $this->db->query($sql);
    }

    public function get_customer_by_order($customer_id)
    {
        return $this->db->where('customer_id', $customer_id)->get('customer')->row();
    }

    public function update_customer_by_order($customer_id)
    {
        return $this->db->where('customer_id', $customer_id)
                        ->update('customer');

    }
}