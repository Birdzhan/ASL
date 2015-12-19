<?php

class Site extends CI_Controller {

    function members_area()
    {
        $this->load->view('login_views/members_area');
    }
}