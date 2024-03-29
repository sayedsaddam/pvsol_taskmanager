<?php defined('BASEPATH') or exit('No direct script access allowed!');
/**
 * filename: Login_model
 */
class Login_model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }
    // Validate user to login into the system
    public function validate_user($username, $password)
    {
    	$this->db->select('id, username, password, user_role, otp');
    	$this->db->from('users');
		$this->db->where(array('username' => $username, 'password' => $password, 'user_status' => 1));
		$query = $this->db->get();
		if($query->num_rows() == 0)
			return false;
		else
			return $query->row_array();
    }
    // Add new user
    public function add_user($data)
    {
    	$this->db->insert('users', $data);
    	if($this->db->affected_row() > 0){
    		return true;
    	}else{
    		return false;
    	}
    }
}

?>