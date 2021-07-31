<?php defined('BASEPATH') or exit('No direct script access allowed!');
/**
 * filename: Admin_model.php
 */
class Admin_model extends CI_Model{
    /**
     * summary
     */
    public function __construct(){
		parent::__construct();        
    }
    // Get users to assign tasks to.
    public function get_users(){
      return $this->db->select('id, username')->from('users')->get()->result();
    }
    // Assign task
    public function assign_task($data){
      $this->db->insert('tasks', $data);
      if($this->db->affected_rows() > 0){
        return true;
      }else{
        return false;
      }
    }
    // Get tasks assigned to users / staff.
    public function get_assigned_tasks(){
      $this->db->select('tasks.id,
                          tasks.assignee,
                          tasks.assigner,
                          tasks.due_date,
                          tasks.priority,
                          tasks.task_description,
                          tasks.status,
                          tasks.created_at,
                          users.id as user_id,
                          users.username');
      $this->db->from('tasks');
      $this->db->join('users', 'tasks.assignee = users.id', 'left');
      $this->db->order_by('created_at', 'DESC');
      return $this->db->get()->result();
    }
}


?>