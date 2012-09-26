<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
    * Default Constructor
    */   
    public function __construct()
    {
        parent::__construct();    
       
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }  
	
	public function index()
	{
		//$this->load->view('login');
		
		$this->adduser();
		// Search User display
		//$this->load->view('users/search-results-users');
		
		
		// Additional Userinfo
		//$this->load->view('users/additional-userinfo');
		
		
		// Additional Userinfo
		//$this->load->view('users/additional-userinfo');
		
	}
	
	
	public function finduser()
	{
		// Find User
		$this->load->view('users/finduser-form');
	}
	
		
	public function adduser()
	{
			$this->form_validation->set_rules('title_fld', 'Title', 'required');
			$this->form_validation->set_rules('firstname_fld', 'Firstname', 'required');
			$this->form_validation->set_rules('lastname_fld', 'Lastname', 'required');
			
			/* Phone Validation */
			$this->form_validation->set_rules('phArea_fld', 'Phone', 'required');
			$this->form_validation->set_rules('phPre_fld', 'Phone', 'required');
			$this->form_validation->set_rules('phSuf_fld', 'Phone', 'required');
			
			// $this->form_validation->set_rules('prole_fld', 'Primary role', 'required');
			$this->form_validation->set_rules('email_fld', 'Email', 'required|valid_email|matches[passconf]');
			$this->form_validation->set_rules('reemail_fld', 'Confirm email', 'required|valid_email');
			
			$this->form_validation->set_rules('zipcode_fld', 'Zipcode', 'required|number');
			//$this->form_validation->set_rules('reemail_fld', 'Confirm email', 'required|valid_email');
			$this->form_validation->set_rules('affiliation_fld', 'Affiliation', 'required');
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('users/newuser-form');
			}
			else
			{
				$this->load->view('formsuccess');
			}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */