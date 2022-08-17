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
      $data['title'] = 'Home | Saddam';
      $data['content'] = 'frontend/home';
      $this->load->view('frontend/commons/template', $data);
   }
   // php quiz
   public function php_quiz(){
      $daily = ($coding = 1) + 1; 
      $coding++;
      $daily += $coding;
      echo $daily++;
   }
   // JS calculator
   public function js_calculator(){
      $data['title'] = 'JS Calculator | Saddam';
      $data['content'] = 'frontend/js_calculator';
      $this->load->view('frontend/commons/template', $data);
   }
}
