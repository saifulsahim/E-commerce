<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Invoice extends CI_Controller{


    function __construct()
    {
        parent::__construct();
        $this->load->model('invoice_model');
    }



    public function manage_invoice()
    {
        $data= array();
        $data['all_invoice'] = $this->invoice_model->select_all_invoice();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_invoice', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }


    public  function view_invoice($order_id){

        $data= array();
        $order_info = $this->invoice_model->order_info_by_id($order_id);
        $data['order_information'] = $this->invoice_model->order_info_by_id($order_id);
        $data['customer_info'] = $this->invoice_model->customer_info_by_id($order_info->customer_id);
        $data['shipping_info'] = $this->invoice_model->shipping_info_by_id($order_info->shipping_id);
        $data['order_details'] = $this->invoice_model->order_details_info_by_id($order_info->order_id);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['dashboard'] = $this->load->view('admin/admin_pages/print_invoice_details', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_invoice($order_id)
    {
        $data=array();
//        $order_info = $this->invoice_model->order_info_by_id($order_id);
//        $data['payment_info'] = $this->invoice_model->payment_info_by_id($order_info->order_id);

        $data['order_info'] = $this->invoice_model->select_order_info_by_id($order_id);
//
//                    echo '<pre>';
//            print_r($data);
//            exit();


//        $data['order_details'] = $this->invoice_model->get_order_details($order_id);

        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_invoice_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);

    }

    public function update_invoice()
    {

        //$data = array();

         //$invoice_info = $this->invoice_model->update_invoice_info();
        $this->invoice_model->update_invoice_info();
        $this->invoice_model->update_payment_info();
        $this->invoice_model->update_order_details_info();
        //$customer_info = $this->checkout_model->update_customer_by_order($invoice_info->customer_id);
//        echo '<pre>';
//        print_r($invoice_info);
//        exit();
        //$order_details = $this->invoice_model->update_order_details_by_order($invoice_info->order_id);
        //$payment = $this->invoice_model->update_payment_status_by_order($invoice_info->payment_id);

//        echo '<pre>';
//         print_r($data);
//         exit();

//        $data['invoice_info']=
//        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_invoice_form', $data, TRUE);
//        $this->load->view('admin/admin_master', $data);
        redirect('manage-invoice');
    }

    public function delete_invoice($order_id)
    {
        $this->invoice_model->delete_invoice_info($order_id);
        redirect('manage-invoice');

    }
}