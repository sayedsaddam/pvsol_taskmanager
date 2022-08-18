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
    // Count pending tasks.
    public function count_pending_tasks(){
      return $this->db->from('tasks')->where('status', 'pending')->count_all_results();
    }
    // Count tasks in progress
    public function count_progress_tasks(){
      return $this->db->from('tasks')->where('status', 'progress')->count_all_results();
    }
    // Count tasks completed.
    public function count_completed_tasks(){
      return $this->db->from('tasks')->where('status', 'completed')->count_all_results();
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
    // Get tasks assigned to users / staff > dashboard.
    public function get_assigned_tasks($limit, $offset){
      $this->db->select('tasks.id,
                          tasks.assignee,
                          tasks.assigner,
                          tasks.due_date,
                          tasks.priority,
                          tasks.task_title,
                          tasks.task_description,
                          tasks.status,
                          tasks.created_at,
                          users.id as user_id,
                          users.username');
      $this->db->from('tasks');
      $this->db->join('users', 'tasks.assignee = users.id', 'left');
      $this->db->order_by('created_at', 'DESC');
      $this->db->limit($limit, $offset);
      return $this->db->get()->result();
    }
    // update task status
    public function update_task_status($id, $data){
      $this->db->where('id', $id);
      $this->db->update('tasks', $data);
      if($this->db->affected_rows() > 0){
        return true;
      }else{
        return false;
      }
    }
    // Get user profile > with tasks assigned, pending, completed, in progress with percentage > user profile.
    public function get_user_profile($id){
      $this->db->select('COUNT(IF(status="pending", 1, NULL)) as pending,
                          COUNT(IF(status="progress", 1, NULL)) as progress,
                          COUNT(IF(status="completed", 1, NULL)) as completed,
                          tasks.id,
                          tasks.assignee,
                          tasks.assigner,
                          tasks.due_date,
                          tasks.priority,
                          tasks.task_title,
                          tasks.task_description,
                          tasks.status,
                          tasks.created_at,
                          users.id as user_id,
                          users.username,
                          users.fullname,
                          users.designation');
      $this->db->from('tasks');
      $this->db->join('users', 'tasks.assignee = users.id', 'left');
      $this->db->where('tasks.assignee', $id);
      return $this->db->get()->row();
    }
}
