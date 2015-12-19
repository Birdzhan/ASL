<?php

class Login extends CI_Controller {

    function index()
    {
        $data['main_content'] = 'login_views/login_form';
        $this->load->view('mainview/template', $data);
    }
    function validate_credentials()
    {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();

        if($query)

        {
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            redirect('site/members_area');
        }

        else
        {
          $this->index();
        }
    }
    function signup()
    {
        $data['main_content'] = 'login_views/signup_form';
        $this->load->view('mainview/template', $data);
    }
    function create_member()
    {
        $this->load->library('form_validation');

        // validation for correct entered fields

        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email'); // require @ sign
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]'); // minimum length
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]'); // minimum length
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]'); // matching password

        if ($this->form_validation->run() == false)
        {
            $this->signup();
        }
        else
        {
            $this->load->model('membership_model');

            if($query = $this->membership_model->create_member())
            {
                $data['main_content'] = 'login_views/signup_successful';
                $this->load->view('mainview/template', $data);
            }
            else
            {
                $this->load->view('login_views/signup_form');
            }
        }


    }
}