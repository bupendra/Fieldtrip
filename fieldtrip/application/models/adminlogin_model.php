<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');


class Adminlogin_model extends MY_Model
{
      public function __construct()
      {
            parent::__construct();
			
      }
            
      /**
       * Authenticate user.
       * 
       * @param array $data
       * @return type 
       */
      public function authenticate(array $data)
      {
        	$sql = "call LoginContact(?,?,@?)";
			$query = $this->db->query($sql,$data);  
		    
			$user_id = "0";
            $is_valid = ($query->num_rows() > 0);
			if ($is_valid == TRUE)
            {
                $user_id = $query->row()->id;
                // $this->update_last_logged_in($user_id);
                // $this->update_last_ip($user_id);
            }
            return $user_id;
      }
  
     
	  
	  /**
       * Find user by ID.
       * 
       * @param type $id
       * @return type 
       */
      public function find_by_userid($aid)
      {
            $q = $this->db->get_where($this->table_name, array('aid' => $aid));
            return $q->row();
      }
	  
	 
}