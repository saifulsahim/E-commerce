<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin_model extends CI_Model
    {

        public function get_user_details($user_email)
        {

            $user_details = $this->db->select('*')
                ->from('user')
                ->where('user_email', $user_email)
                ->get()
                ->row();

            return $user_details;
        }

        public function register_new_admin()
        {

            //$data['user_name'] = $this->input->post('userName', TRUE);
            $data['user_email'] = $this->input->post('userEmail', TRUE);
            $password = $this->input->post('userPassword', TRUE);
            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
            $data['user_password'] = $encrypted_password;
            //$data['user_password']= password_hash($this->input->post('userPassword',TRUE),PASSWORD_DEFAULT);
            //$data['user_role'] = 1;
            $data['user_status'] = 1;


            $this->db->insert('user', $data);

        }


        public function select_all_published_category()
        {
            $this->db->select('*');
            $this->db->from('category');
            $this->db->where('category_status',1);
            $query_result = $this->db->get();
            $result= $query_result->result();
            return $result;

        }

        public function get_all_user_info()
        {
            $result =  $this->db->select('*')
                ->from('user')
                ->get()
                ->result();

            return $result;
        }

        public function change_admin_status($admin_id,$status)
        {
            $data['user_status'] = $status;
            $this->db->where('user_id',$admin_id);
            $this->db->update('user',$data);
        }

        public function edit_user_details($admin_id)
        {

            $result =$this->db->select('*')
                ->from('user')
                ->where('user_id',$admin_id)
                ->get()
                ->row();
            return $result;

        }

        public function update_user()
        {
            $data = array();
            //$data['user_name'] = $this->input->post('userName',true);
            $data['user_email'] = $this->input->post('userEmail',true);
            $password = $this->input->post('userPassword',true);
            $confirm_password = $this->input->post('confirmPassword',true);
            if($password == $confirm_password) {
                $data['user_password'] = password_hash($this->input->post('userPassword', true), PASSWORD_DEFAULT);
                $admin_id = $this->input->post('userId');

                $this->db->where('user_id',$admin_id)
                    ->update('user',$data);
            } else {
                redirect('admin');
            }

        }

    }