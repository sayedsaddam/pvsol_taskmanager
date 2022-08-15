<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * filename: Frontend.php
 */
class Frontend extends CI_Controller{
   function __construct(){
      parent::__construct();
   }
   // Index page.
   public function index(){
      $data['title'] = 'Home | Nirvana by SJ';
      $data['content'] = 'frontend/home';
      $this->load->view('frontend/commons/template', $data);
   }
}
