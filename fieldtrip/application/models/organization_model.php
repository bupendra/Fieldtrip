<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization_model extends MY_Model  {

	var $title   = '';
    var $content = '';
    var $date    = '';
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
    
  /**
  * 
  */
  public function get_search_organization(array $data)
  {
  		//$sql = "call SearchAddContacts(?,?,?,?,?,?,?,?,?)";
		$sql = "call SearchOrganization(?,?)";
		$query = $this->db->query($sql, $data);
		return $query->result();
  }	
	
}

