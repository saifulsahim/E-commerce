<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
//        $this->load->model('checkout_model');
//       if(!($this->session->userdata('customer_id'))){
//           return redirect('checkout');


        //redirect('checkout');
//            $data = array();
//            $data['title'] = "Checkout";
//            $data['slider'] = '';
//            $data['featured_product'] = '';
//            $data['category'] = '';
//            $data['manufacturer'] = '';
//            $data['price_range'] = '';
//            $data['recommend'] = '';
//            $this->load->view('pages/checkout',$data,true);
//            redirect('checkout');
////
//       }

    }


    public function index()
    {
        $data = array();
        $data['title'] = "Checkout";
        $data['slider'] = '';
        $data['featured_product'] = $this->load->view('pages/checkout', $data, true);
        $data['category'] = '';
        $data['manufacturer'] = '';
        $data['price_range'] = '';
        $data['recommend'] = '';
        $this->load->view('master', $data);

    }

    public function ajax_email_check($email_address = null)
    {
        if ($email_address == NULL) {
            echo "Email Address Required";
            return;

        }
        $result = $this->checkout_model->ajax_email_address_check($email_address);
        if ($result) {
            echo "Already Exists !";

        } else {

            echo "Available";
        }
    }


    public function show_customer_register_form()
    {

        $data = array();
        $data['title'] = "Checkout";
        $data['slider'] = '';
        $data['featured_product'] = $this->load->view('pages/checkout', $data, true);
        $data['category'] = '';
        $data['manufacturer'] = '';
        $data['price_range'] = '';
        $data['recommend'] = '';
        $this->load->view('master', $data);
    }


    public function customer_registration()
    {

        $this->form_validation->set_rules('customerName', 'Customer Name', 'required|max_length[255]');
        $this->form_validation->set_rules('password', 'Customer Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|min_length[6]|matches[password]');

        if ($this->form_validation->run()) {

            $customer_id = $this->checkout_model->save_customer_info();


            $sdata = array();
            $sdata['customer_id'] = $customer_id;
            $sdata['customer_name'] = $this->input->post('customerName');
            $this->session->set_userdata($sdata);

            /*
             * Start Send Email
             */

//            $mdata = array();
//            $mdata['customer_name']= $this->input->post('customerName',true);
//            $mdata['from']= 'sahimalam96@gmail.com';
//            $mdata['admin_full_name'] = "Saiful Sahim";
//            $mdata['to']= $this->input->post('emailAddress',true);
//            $mdata['subject']= "Registration Successfully";
//            $mdata['password']= $this->input->post('password',true);
//            $this->mailer_model->send_email($mdata,'successful_registration');

            /*
             * End Send Mail
             */

            redirect('/billing');

        } else {
            $this->show_customer_register_form();
        }
    }

    public
    function customer_login_check()
    {
//        $customer_email = $this->input->post('emailAddress', true);
//        $customer_password = $this->input->post('password', TRUE);
//        if ($customer_email == '' || $customer_password == '') {
//            redirect('checkout');
//        } else {


        $customer_email = $this->input->post('emailAddress', true);
        $customer_password = md5($this->input->post('password', TRUE));


        $customer_details = $this->checkout_model->get_customer_details($customer_email, $customer_password);


//        echo '<pre>';
//        print_r($customer_details);
//        exit();

        if ($customer_details) {
            $customer_id['customer_id'] = $customer_details->customer_id;
            $customer_id['customer_name'] = $customer_details->customer_name;
            $this->session->set_userdata($customer_id);


            redirect('/billing');
        } else {
            echo 'Data not found! Please register';

        }
//        }


    }

    public  function logout()
    {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_name');
        redirect('welcome');
    }

    public
    function billing()
    {
        $data = array();
        $data['title'] = "Billing";
        $data['slider'] = '';
        $customer_id = $this->session->customer_id;
        $data['customer_info'] = $this->checkout_model->select_customer_info_by_id($customer_id);
        $data['featured_product'] = $this->load->view('pages/billing', $data, true);
        $data['category'] = '';
        $data['manufacturer'] = '';
        $data['price_range'] = '';
        $data['recommend'] = '';
        $this->load->view('master', $data);

    }

    public function update_billing()
    {

//            $shipping_status = $this->input->post('shippingStatus',true);
//            echo '------'.$shipping_status;
//            exit();

        $this->checkout_model->update_billing_info();
        $shipping_id = $this->session->userdata('shipping_id');

        if ($shipping_id != NULL) {

            redirect('/payment');

        } else {
            redirect('/shipping');
        }

    }

    public
    function shipping()
    {
        $data = array();
        $data['title'] = "Shipping";
        $data['slider'] = '';
        $customer_id = $this->session->userdata('customer_id');
//        echo $customer_id;
//        exit();
        $data['customer_info'] = $this->checkout_model->select_customer_info_by_id($customer_id);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['featured_product'] = $this->load->view('pages/shipping', $data, true);
        $data['category'] = '';
        $data['manufacturer'] = '';
        $data['price_range'] = '';
        $data['recommend'] = '';
        $this->load->view('master', $data);

    }

    public
    function save_shipping()
    {

        $data = array();

        $this->checkout_model->save_shipping_info();
        redirect('/payment');


    }

    public
    function payment()
    {
        $data = array();
        $data['title'] = "Payment";
        $data['slider'] = '';

        $data['featured_product'] = $this->load->view('pages/payment', '', true);
        $data['category'] = '';
        $data['manufacturer'] = '';
        $data['price_range'] = '';
        $data['recommend'] = '';
        $this->load->view('master', $data);

    }

    public
    function place_order()
    {

        $name = $this->session->userdata('customer_name');
        $this->checkout_model->save_payment_info();
        $amount = $this->session->userdata('gtotal');

        $payment_type = $this->input->post('paymentType', TRUE);

//            $data['title']= "Payment";
//            $data['slider']= '';
//
//
//            $data['category']= '';
//            $data['manufacturer']= '';
//            $data['price_range']= '';
//            $data['recommend']=  '';


        if ($payment_type == 'cash_on_delivery') {

            $this->checkout_model->save_order_info();
            redirect('order-successful');

        } else if ($payment_type == 'ssl_commerz') {

            $this->ssl_coomerz_payment($name, $amount);
        }
        if ($payment_type == 'paypal') {


        }
    }


    public
    function order_successful()
    {

        $data = array();
        //$data['slider'] = '';


        $data['featured_product'] = '';
//        "<h1 align='center'>Accounts Page Content Here.....</h1>";

        $data['category'] = $this->load->view('pages/category', '', true);

        $data['recommend'] = '';
        $data['slider'] = $this->load->view('pages/order_successful', $data, true);
        $this->load->view('master', $data);


        //redirect('order-successful');


    }

    public
    function ssl_coomerz_payment($name, $amount)
    {
        define("STORE_ID", "testbox");

        define("STORE_PASSWORD", "qwerty");

        define("SSLCZ_REDIRECT_URL", "https://sandbox.sslcommerz.com/gwprocess/v3/api.php");

        define("SSLCZ_VALIDATION_API", "https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php");

        # COMMUNICATE NECESSARY INFO

        $post_data = array();

        $post_data['store_id'] = STORE_ID;

        $post_data['store_passwd'] = STORE_PASSWORD;

        $post_data['currency'] = 'BDT';

        $post_data['total_amount'] = str_replace(',', '', $amount);

        $_SESSION['SSLCZ_TRX_ID'] = $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();

        $post_data['success_url'] = "http://localhost/E-commerce/success";

        $post_data['fail_url'] = "http://localhost/E-commerce/fail";

        $post_data['cancel_url'] = "http://localhost/E-commerce/cancel";

        # CUSTOMER INFORMATION

        $_SESSION['CUS_HISTORY']['CUS_NAME'] = $post_data['cus_name'] = $name;
        $_SESSION['CUS_HISTORY']['CUS_NAME2'] = $post_data['cus_name2'] = '';

        $_SESSION['CUS_HISTORY']['CUS_EMAIL'] = $post_data['cus_email'] = 'sahim@yahoo.com';

        $_SESSION['CUS_HISTORY']['CUS_ADD'] = $post_data['cus_add1'] = 'Chittagong';
        //$_SESSION['CUS_HISTORY']['CUS_COUNTRY'] = 'bangladesh' = 'Bangladesh';

        #$post_data['cus_city'] = "Dhaka";
        #$post_data['cus_state'] = "Dhaka";
        #$post_data['cus_postcode'] = "1000";

        #$post_data['cus_fax'] = "01711111111";
        # SHIPMENT INFORMATION
        #$post_data['ship_name'] = "Store Test";
        #$post_data['ship_add1 '] = "Dhaka";
        #$post_data['ship_add2'] = "Dhaka";
        #$post_data['ship_city'] = "Dhaka";
        #$post_data['ship_state'] = "Dhaka";
        #$post_data['ship_postcode'] = "1000";
        #$post_data['ship_country'] = "Bangladesh";
        # OPTIONAL PARAMETERS
        #$post_data['value_a'] = "ref001";
        #$post_data['value_b '] = "ref002";
        #$post_data['value_c'] = "ref003";
        #$post_data['value_d'] = "ref004";
        # REQUEST SEND TO SSLCOMMERZ

        $handle = curl_init();

        curl_setopt($handle, CURLOPT_URL, SSLCZ_REDIRECT_URL);

        curl_setopt($handle, CURLOPT_POST, 1);

        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);

        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

        /* ---------- **Below two lines only for Localhost ----------- */
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, 0);


        $content = curl_exec($handle);

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);


        if ($code == 200 && !(curl_errno($handle))) {

            curl_close($handle);

            $sslcommerzResponse = $content;

            # PARSE THE JSON RESPONSE

            $sslcz = json_decode($sslcommerzResponse, true);

            if (isset($sslcz['status']) && $sslcz['status'] == 'SUCCESS') {

                if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != '') {

                    echo '<meta http-equiv="refresh" content="0; url=' . $sslcz['GatewayPageURL'] . '" />';

                    #header("Location: " . $sslcz['GatewayPageURL']);

                    exit;
                } else {

                    echo "No redirect URL found!";
                }
            } else {

                echo "Invalid Credential!";
            }
        } else {

            curl_close($handle);

            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";

            exit;
        }
    }

    public
    function success()
    {
        echo "In success";
    }

    public
    function fail()
    {
        echo "In fail order";
    }

    public
    function cancel()
    {
        echo "order Cancel";
    }


}