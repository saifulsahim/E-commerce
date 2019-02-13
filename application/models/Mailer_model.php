<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Mailer_model extends CI_Model
{

    function send_email($data,$templateName)
    {
        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from'],$data['admin_full_name']);
        $this->email->to($data['to']);
        //$this->email->cc($data['cc_address']);
        $this->email->subject($data['subject']);
        $body = $this->load->view('mailscript/'.$templateName,$data,true);
        echo $body;
        exit();
        $this->email->message($body);
        //$this->email->send();
        $this->email->clear();



    }


}