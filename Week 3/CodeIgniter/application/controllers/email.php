<?php

class Email extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('email/attached_email');
    }

    function send()
    {
       // input fields validation starts

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','Name', 'trim|required');
        $this->form_validation->set_rules('email','Email Address', 'trim|required|valid_email');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('email/attached_email');

        //  if validation doesn't pass it will reload the form'
        }
        else
        {
            $name = $this->input->post('name');
            $email = $this->input->post('email');


            $this->load->library('email');
            $this->email->set_newline("\r\n");

            $this->email->from('brucewayne123789@gmail.com', $name);
            $this->email->to($email);
            $this->email->subject(' Testing attached_email ');
            $this->email->message('This is testing please ignore the message');

            $path = $this->config->item('server_root');
            $file = $path . '/CodeIgniter/efiles/text.txt';

            $this->email->attach($file);

            if($this->email->send())
            {
                $this->load->view('email/emailsent');
            }
            else
            {
                show_error($this->email->print_debugger());
            }

        }

    }
}