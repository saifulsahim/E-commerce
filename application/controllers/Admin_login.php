<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');


    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function index()
    {
        if(isset($this->session->user_id)){

            redirect('admin-dashboard');
        }else{
            $this->load->view('admin/admin_login');

        }

    }



    public function check_admin_login(){

        $user_email= $this->input->post('userEmail',TRUE);
        $user_password= $this->input->post('userPassword',TRUE);

//        $encrypt_password= password_hash($user_password, PASSWORD_DEFAULT);
//
//        echo $encrypt_password;
//        exit();

        //$this->load->model('admin_model');

        $user_details= $this->admin_model->get_user_details($user_email);
        if($user_details){

        if(password_verify($user_password,$user_details->user_password )){

            if($user_details->user_status == 1){

                $session_data['user_id']=$user_details->user_id;
                $session_data['user_email']=$user_details->user_email;
                $session_data['user_status']=$user_details->user_status;
                $session_data['user_role']=$user_details->user_role;



                $this->session->set_userdata($session_data);
                redirect('admin-dashboard');
                //echo 'password is correct';


            }else{
                $data['error_message']= 'Not a Valid User';
                $this->load->view('admin/admin_login', $data);
            }

        }else{

            $data['error_message']= 'Incorrect Email or Password';
            $this->load->view('admin/admin_login', $data);

            //redirect('admin');

        }
        }
        else {
            $data['error_message'] = 'Incorrect Email or Password';
            //$this->load->view('master', $data);
        }



    }

    public function check_admin_logout(){

        $this->session->sess_destroy();
        redirect('admin');

    }


//    public function admin_dashboard(){
//
//        $data= array();
//        $data['dashboard']= "This is a Admin Dashboard";
//        $this->load->view('admin/admin_pages/dashboard',$data);
//
//    }

}
