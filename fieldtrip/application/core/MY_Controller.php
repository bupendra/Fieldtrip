<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');


 class MY_Controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  
  /**
   * Get user session data.
   * 
   * @return type 
   */
  protected function get_user_data()
  {
    return $this->session->all_userdata();
  }
  
  /**
   * Get logged in user id.
   * 
   * @return type 
   */
  protected function get_user_id()
  {
    $session_data = $this->session->all_userdata();
    return $session_data['userid'];
  }
  
  /**
   * Determine if user is authenticated.
   * 
   * @return type 
   */
  protected function is_logged_in()
  {
    	$session_data = $this->session->all_userdata();
    	return (isset($session_data['userid']) && $session_data['userid'] != "0" && $session_data['logged_in'] == TRUE);
		//return (isset($session_data['user_id']) && $session_data['user_id'] > 0 && isset($session_data['logged_in']) && $session_data['logged_in'] == TRUE);
  }
  
  /**
   * Determine if logged in user is admin.
   * 
   * @return type 
   */
  protected function is_admin()
  {
    $session_data = $this->session->all_userdata();
    return (isset($session_data['is_admin']) && $session_data['is_admin'] == 1);
  }
  
  
  
  /**
   * Utility method for sending emails.
   * 
   * @param type $to
   * @param type $subject
   * @param type $message 
   */
  protected function send_mail($to, $subject, $message)
  {
    $this->load->library('email');
    $this->email->from("info@info.ru");
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);
    $this->email->send();
  }
  
  /**
   * Utility method for determining if the request is a POST.
   * 
   * @return type 
   */
  protected function is_method_post()
  {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }
  
}