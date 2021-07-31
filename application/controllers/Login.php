<?php defined("BASEPATH") or exit("No direct script access allowed!");
/**
 * filename: Login.php
 */
class Login extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
    // Load the login page.
    public function index(){
		$this->load->view('admin_login');
    }
    // Generate OTP and verify it.
    // public function email_otp(){
    //   $otp = rand(0, 999999);
    //   $user_email = $this->input->post('email');
    //   $email = $this->db->select('email')->from('users')->where('email', $user_email)->get()->row();
    //   if($email != NULL){
    //     $data = array(
    //       'otp' => $otp
    //     );
    //     $this->db->where('email', $user_email);
    //     $this->db->update('users', $data);
    //     $this->load->library('email'); // Loading the email library.
    //     $this->email->from('no-reply@alhayyatgroup.com', 'AH Group');
    //     $this->email->to($email->email);
    //     // $this->email->cc('another@another-example.com');
    //     // $this->email->bcc('them@their-example.com');
    //     $this->email->subject('Security code');
    //     $this->email->message("Copy the 6 digit code to login to the portal. " . $otp);
    //     if($this->email->send()){
    //       echo 'Email sent';
    //     }else{
    //       show_error($this->email->print_debugger());
    //     }
    //     $this->session->set_flashdata('otp_sent', '<strong>Information! </strong>A 6 digit code has been sent to your email. Please check your email and return to login.');
    //     redirect('login/login');
    //   }else{
    //     $this->session->set_flashdata('not_found', '<strong>Uh oh! </strong>The email you entered does not exist on our database. Trying another one might help.');
    //     redirect($_SERVER['HTTP_REFERER']);
    //     exit;
    //   }
    // }
    // Login page
    public function login(){
      $this->load->view('admin_login');
    }
    // Validate user.
    public function admin_login(){
      if($this->session->userdata('username')){
        redirect('admin');
      }
    	$username = $this->input->post('username');
      $password = sha1($this->input->post('password'));
      // $otp = $this->input->post('otp');
      $user_signin = $this->Login_model->validate_user($username, $password);
      if($user_signin > '0'){
        $user_role = $user_signin['user_role'];
        $id = $user_signin['id'];
      }
      if($user_signin == TRUE ){
        $this->session->set_userdata(array('id' => $id, 'username' => $username, 'user_role' => $user_role));
        if($this->session->userdata('user_role') == 'admin'){
          redirect('admin');
        }elseif($this->session->userdata('user_role') == 'staff'){
          echo "I am an Employee.";
        }
      }else{
        $this->session->set_flashdata('login_error', '<strong>Aww snap! </strong>Username or password is incorrect.');
        redirect($_SERVER['HTTP_REFERER']);
      }
    }
    // Logout.
    public function logout(){
        $this->session->sess_destroy('username');
        $this->session->set_flashdata('logged_out', '<strong>Hooray !</strong> You have been logged out successfully, Login again .');
        $this->index();
    }
}

?>