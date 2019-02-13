<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    public function __construct()
    {

        parent::__construct();

        if(!isset($this->session->user_id) && ($this->session->user_status != 1)){

          redirect('admin');
        }
        $this->load->model('admin_model');
    }




    public function show_dashboard(){

        $data=array();
        $data['dashboard']=$this->load->view('admin/admin_pages/dashboard','',True);
        $this->load->view('admin/admin_master',$data);
    }


    public function show_admin_register_form(){

        $data =array();
        $data['dashboard']= $this->load->view('admin/admin_pages/register_admin_form','',TRUE);
        $this->load->view('admin/admin_master',$data);

    }

    public function register_new_admin(){

        //$this->form_validation->set_rules('userName','User Name','required|max_length[255]');
        $this->form_validation->set_rules('userEmail','Email Address','required|max_length[255]|is_unique[user.user_email]');
        $this->form_validation->set_rules('userPassword','User Password','required|min_length[6]');
        $this->form_validation->set_rules('confirmPassword','Confirm Password','required|min_length[6]|matches[userPassword]');


        if($this->form_validation->run()){

            $this->admin_model->register_new_admin();
            $data['success_message']= 'User Registration Completeted Succesfully';

            $data['dashboard']= $this->load->view('admin/admin_pages/register_admin_form',$data,TRUE);

            $this->load->view('admin/admin_master',$data);

        }else{
            $this->show_admin_register_form();

        }




        //$confirm_password= $this->input->post('confirmPassword',TRUE);

//        echo $user_name;
//        exit();
//        echo $user_email;
//        echo $user_password;
//        echo $confirm_password;


    }

    public function manage_admin()
    {

        $user_data['all_user'] = $this->admin_model->get_all_user_info();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_admin_form', $user_data, true);
        $this->load->view('admin/admin_master', $data);

    }


    public function change_user_status($user_id,$status)
    {
        $this->admin_model->change_admin_status($user_id,$status);
        redirect('manage-admin');

    }

    public function edit_user($admin_id)
    {
        $data['user_data'] = $this->admin_model->edit_user_details($admin_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_admin_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_user()
    {
        $this->admin_model->update_user();

        redirect('manage-admin');

    }
}