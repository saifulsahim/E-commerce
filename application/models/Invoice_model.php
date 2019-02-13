<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model
{

    public function select_all_invoice()
    {

        $sql = $this->db->select('*')
            ->from('tbl_order')
            ->join('customer', 'customer.customer_id= tbl_order.customer_id')
            ->join('shipping', 'shipping.shipping_id = tbl_order.shipping_id')
            ->join('order_details', 'order_details.order_id = tbl_order.order_id')
            ->join('payment', 'payment.payment_id = tbl_order.payment_id')
            ->get()
            ->result();


        return $sql;
//        $sql= "SELECT order.order_id,customer. customer_name, order_details.product_name, order_details.product_sales_quantity ,order_details.product_price,order.order_total,order.order_status,payment.payment_status FROM order
//
//                INNER JOIN customer ON customer.customer_id = order.customer_id
//                INNER JOIN  order_details ON order_details.order_id = order.order_id
//                INNER JOIN payment ON payment.payment_id = order.payment_id
//  ";
//        $result = $this->db->insert($sql);
//        return $result;
//        echo "<pre>";
//        print_r($sql);
    }

    public function order_info_by_id($order_id)
    {

        $result = $this->db->select('*')
            ->from('tbl_order')
            ->where('order_id', $order_id)
            ->get()
            ->row();

        return $result;
    }

    public function customer_info_by_id($customer_id)
    {

        $result = $this->db->select('*')
            ->from('customer')
            ->where('customer_id', $customer_id)
            ->get()
            ->row();

        return $result;
    }

    public function shipping_info_by_id($shipping_id)
    {
        $result = $this->db->select('*')
            ->from('shipping')
            ->where('shipping_id', $shipping_id)
            ->get()
            ->row();

        return $result;

    }

    public function order_details_info_by_id($order_id)
    {
        $result = $this->db->select('*')
            ->from('order_details')
            ->where('order_id', $order_id)
            ->get()
            ->result();

        return $result;

    }

    public function select_order_info_by_id($order_id)
    {

//        $sql="SELECT customer.customer_name, order_details.product_name , payment.payment_status, order_details.product_sales_quantity,tbl_order.order_total, tbl_order.order_status  FROM tbl_order"
//            ."WHERE tbl_order.customer_id   = customer.customer_id   AND tbl_order.payment_id  =  payment.payment_id AND tbl_order.order_id = order_details.order_id"
//        ;


//        $sql = $this->db->select('tbl_order.*', 'customer.customer_name, payment.payment_status, order_details.product_name, order_details.product_sales_quantity')
//            ->from('tbl_order')
//            ->join('customer', 'customer.customer_id= tbl_order.customer_id')
//            ->join('order_details', 'order_details.order_id = tbl_order.order_id')
//            ->join('payment', 'payment.payment_id = tbl_order.payment_id')
//            ->where('tbl_order.order_id',$order_id)
//            ->get()
//            ->row();

//        echo '<pre>';
//        print_r($sql);
//       exit();
//
//        return $sql;
        return $this->db->where('order_id', $order_id)->get('tbl_order')->row();
    }


//            $sql = $this->db->last_query();
//            print_r($sql);
//            exit();


//            $query_result =$this->db->query($sql);
//            $result = $query_result->row();
//            return $result;


//            $sql = $this->db->last_query();
//            print_r($sql);
//            exit();
//            return $sql;


//'order_details.product_name','customer.customer_name','order_details.product_sales_quantity','order.order_total','order.order_status','payment.payment_status'


//            echo '<pre>';
//            print_r($sql);
//            exit();


//order.order_total, order.order_status, order_details.product_name  FROM order
//INNER JOIN customer ON customer.customer_id   =order.customer_id
//INNER JOIN payment ON payment.payment_id   = order.payment_id
//
//WHERE order_details.order_id = '$order_id'

//
//SELECT customer.customer_name, order_details.product_name , payment.payment_status, order_details.product_sales_quantity
//order.order_total, order.order_status, order_details.product_name  FROM order
//WHERE customer.customer_id = order.customer_id AND payment.payment_id = order.payment_id
//AND order_details.order_id = order.order_id
//

//    public function get_order_details($order_id)
//    {
//
//        $result = $this->db->select('*')->from('order_details')
//            ->where('order_id',$order_id)
//            ->get()->row();
//
//
//        return $result;
//    }
//
//
//
//    public function payment_info_by_id($order_id)
//    {
//
//        $payment_info = $this->db->select('*')
//            ->from('payment')
//            ->where('payment_status')
//            ->get()->result();
//        return $payment_info;
//
//    }
    public function update_invoice_info()
    {

        $data = array();

        //$data['customer_name'] = $this->input->post('customerName', true);
        //$data['product_name'] = $this->input->post('productName', true);
        //$data['product_sales_quantity'] = $this->input->post('productQuantity', true);
        $data['order_total'] = $this->input->post('orderTotal', true);
        $data['order_status'] = $this->input->post('orderStatus', true);
        //$data['payment_status'] = $this->input->post('paymentStatus', true);


        $order_id = $this->input->post('oldOrderId', true);
//        echo '<pre>';
//        print_r($data);
//        exit();


//        $this->db
//                  ->join('customer', 'customer.customer_id= tbl_order.customer_id')
//                 ->join('order_details', 'order_details.order_id = tbl_order.order_id')
//                 ->join('payment', 'payment.payment_id = tbl_order.payment_id')
//                 ->where('order_id',$order_id)
//                 ->update('tbl_order',$data);


        $this->db->where('order_id', $order_id)
            ->update('tbl_order', $data);


//        echo '<pre>';
//        print_r($data);
//        exit();

//
//        $this->db->where('order_id',$order_id)
//            ->join('customer', 'customer.customer_id= tbl_order.customer_id')
//            ->join('order_details', 'order_details.order_id = tbl_order.order_id')
//            ->join('payment', 'payment.payment_id = tbl_order.payment_id')
//            ->update('tbl_order',$data);

    }

    public function update_payment_info()
    {
        $data['payment_status'] = $this->input->post('paymentStatus', true);
        $this->db->where('payment_id', $this->input->post('oldPaymentId', true));
        $this->db->update('payment', $data);
    }

    public function update_order_details_info()
    {
        $data['product_name'] = $this->input->post('productName', true);
        $data['product_sales_quantity'] = $this->input->post('productQuantity', true);
        $this->db->where('order_details_id', $this->input->post('oldOrderDetailsId', true));
        $this->db->update('order_details', $data);
    }

    public function update_order_details_by_order($order_id)
    {
        $data = array();

        $data['product_name'] = $this->input->post('productName', true);
        $data['product_sales_quantity'] = $this->input->post('productQuantity', true);
        return $this->db->where('order_id', $order_id)
            ->update('order_details', $data);
    }

    public function update_payment_status_by_order($payment_id)
    {
        $data = array();
        $data['payment_status'] = $this->input->post('paymentStatus', true);
        return $this->db->where('payment_id', $payment_id)
            ->update('payment', $data);


    }

    public function delete_invoice_info($order_id)
    {
        $sql = "update product,order_details
                    
                  set product.product_quantity = product.product_quantity + order_details.product_sales_quantity
                     
                  where product.product_id = order_details.product_id
                      
                   and order_details.order_id = '$order_id';                   
            
            
            ";

        $this->db->query($sql);

        $this->db->where('order_id', $order_id);

        $this->db->delete('tbl_order');
    }

    public function get_order_details_by_order($id)
    {
        return $this->db->where('order_id', $id)->get('order_details')->row();
    }

    public function get_payment_status_by_order($payment_id)
    {
        return $this->db->where('payment_id', $payment_id)->get('payment')->row();
    }

}