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
    	$data['content'] = 'admin/dashboard';
        $data['users'] = $this->admin_model->get_users();
        $data['tasks'] = $this->admin_model->get_assigned_tasks();
        $data['pending_tasks'] = $this->admin_model->count_pending_tasks();
        $data['progress_tasks'] = $this->admin_model->count_progress_tasks();
        $data['completed_tasks'] = $this->admin_model->count_completed_tasks();
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
        if($this->admin_model->assign_task($data)){
            $this->session->set_flashdata('success', '<strong>Success! </strong>A task has been assigned successfully.');
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->session->set_flashdata('failed', '<strong>Failed! </strong>Failed to assign task, please try again!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    // Get user profile > with tasks assigned, pending, completed, in progress with percentage.
    public function user_profile($id){
        $data['title'] = 'Profile | PVSol';
        $data['content'] = 'admin/user_profile';
        $data['profile'] = $this->admin_model->get_user_profile($id);
        $data['users'] = $this->admin_model->get_users();
        $this->load->view('components/template', $data);
    }
    // Get pending tasks.
    public function tasks(){
        $data['title'] = 'Pending Tasks | PVSol';
        $data['content'] = '';
        $data['tasks '] = $this->admin_model->get_assigned_tasks();
        
    }
}

?>