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
}


?>