<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends MY_Controller {
        
    /**
    * Default Constructor
    */   
    public function __construct()
    {
        parent::__construct();    
        
		$this->load->model('Adminlogin_model'); 
    	
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }   
        
	/**
    * Default Method
    */   
	public function index()
	{
	    if ($this->_is_logged_in() == TRUE)
        {
           redirect('administrator/home');
        }
        $data = array();
        $data['email'] = '';
        $this->load->view('login',$data);
		
    }
    
    
    /**
    * Default Method
    */   
    public function home()
    {
       if($this->_is_logged_in() == FALSE)
       {
          redirect('administrator');
       }
       $data = array();
       
       $flash_login_success = $this->session->flashdata('flash_message');  
       if(isset($flash_login_success) && ! empty($flash_login_success)):
            $data['flash'] = $flash_login_success;
       endif; 
       
      // $user = $this->Adminlogin_model->get_by_email_address($this->session->userdata('admin_email'));
      // $data['user_data'] = $user;
       $this->load->view('home',$data);    
    
    }
    
    
    
     /**
      * Process user authentication.
      */
      public function authenticate()
      {
           if ($this->_is_logged_in() == TRUE)
           {
               redirect('administrator/home');
           }
		   
		   
			$data = array();
								
            $this->form_validation->set_rules('username_fld', 'username', 'trim|required'); 
			$this->form_validation->set_rules('password_fld', 'password', 'trim|required|md5'); 
			if($this->form_validation->run() == FALSE):
			
						$this->load->view('login',$data);
			
			else:
			
			 	 // Authenticate user.
				 $userData =   array('username' => $this->input->post('username_fld',TRUE), 
									'password' => $this->input->post('password_fld',TRUE),
								    'result'=>'');
				$user_id = $this->Adminlogin_model->authenticate($userData);
				
				if($user_id!="0")
				{
					 // Create session var
					 // $user = $this->Adminlogin_model->find_by_aid($user_id);
					  $this->session->set_userdata('username', $this->input->post('username_fld',TRUE));
					  $this->create_login_session($user_id);
					  $this->session->set_flashdata('flash_message', 'You are logged in.');
					  redirect('administrator/home');
				}
				else
				{
					$data = array();
					$data['login_error'] = 'Invalid Username or Password';
					$data['email'] = $this->input->post('user_name');
					$this->load->view('login', $data);
				}
				
		   endif;		
      }
      
      
    
      /**
       * Creates session data for logged in user.
       *
       * @param type $user 
       */
      protected function create_login_session($user)
      {
            /*$session_data = array(
                'admin_email'    => $user->admin_email,
                'aid'            => $user->aid,
                'logged_in'      => TRUE,
                'is_admin'       => $user->is_admin,
                'ip'             => $this->input->ip_address()
            ); */
            $session_data = array(
                'userid'            => $user,
                'logged_in'      => TRUE  
            );
            $this->session->set_userdata($session_data);
      }

      
      /**
      * Change password
      */
      public function changepassword()
      {
           // Body
		   
      }
	 
	 
	 
	/**
	* Passord Checking
	*/
	public function password_check()
	{
		 // body
	}
	
	
	  /**
      * Checking the Login or not
      */
      private function _is_logged_in()
      {
            $session_data = $this->session->all_userdata();
            return (isset($session_data['userid']) && $session_data['userid'] != "0" && $session_data['logged_in'] == TRUE);
      }
          
    
      /**
       * Administrator LogOut
      */
      public function logout()
      {
            $this->session->sess_destroy();
            redirect('administrator');
      }
      
}
/* End of file Administrator.php */
/* Location: ./application/controllers/Administrator.php */