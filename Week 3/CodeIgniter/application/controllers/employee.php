<?php


class Employee extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('modemployee', 'emp');
    }

    public function index() {

        $data['row'] = $this->emp->getemployee();
        $this->load->view('emp_view/index', $data);
    }
    function add() {
        $this->load->view('emp_view/add');
    }
    function save(){
        $data=array(
            'name'=>$this->input->post('txtname'),
            'dep'=>$this->input->post('txtdep'),
            'loc'=>$this->input->post('txtloc'));
        $this->db->insert('employee_list', $data);
        redirect('employee/index');
    }
    function edit($employee_id) {
        $data['r']=$this->emp->getemployeerow($employee_id);
        $this->load->view('emp_view/edit',$data);
    }
    function save_update(){
        $employee_id=$this->input->post('txtemployee_id');
        $data=array(
            'name'=>$this->input->post('txtname'),
            'dep'=>$this->input->post('txtdep'),
            'loc'=>$this->input->post('txtloc'));
        $this->db->where('employee_id',$employee_id);
        $this->db->update('employee_list',$data);
        redirect('employee/index');
    }
    function delete($employee_id){
        $this->db->where('employee_id', $employee_id);
        $this->db->delete('employee_list');
        redirect('employee/index');
    }
}