<?php defined('BASEPATH') or exit('No direct script access allowed!');
/**
 * filename: Home.php
 */
class Admin extends CI_Controller{
    /**
     * summary
     */
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        if(!$this->session->userdata('username')){
            redirect('');
        }
    }
    // Index method will load the page.
    public function index(){
    	$data['title'] = 'Dashboard | PVSol';
    	$data['content'] = 'dashboard';
        $data['users'] = $this->admin_model->get_users();
    	$this->load->view('components/template', $data);
    }
    // Assign task to user / employee.
    public function assign_task(){
        $data = array(
            'assignee' => $this->input->post('emp_id'),
            'assigner' => $this->session->userdata('id'),
            'due_date' => $this->input->post('due_date'),
            'priority' => $this->input->post('priority'),
            'task_description' => $this->input->post('task_description')
        );
        var_dump($data);
    }
    // Todo list
    public function todo_list(){
        $data['title'] = 'TODO List | PVSol';
        $data['content'] = 'todo_list';
        $this->load->view('components/template', $data);
    }
}

?>