<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//class User_model extends CI_Model  {
class User_model extends MY_Model  {

	var $title   = '';
    var $content = '';
    var $date    = '';
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->table_name = 'contacts';
		//$this->table_name2 = 'contacts_cstm';
		//$this->table_name3 = 'contacts';
    }
    
	/**
   * Abstract record creation.
   * 
   * @param array $data
   * @return type 
   */
  public function createProc(array $data)
  {
  	
	$sql = "call AddContacts(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,@?)";
	$execute = $this->db->query($sql, $data);
    //$this->db->insert($this->table_name, $data);
    //return $this->db->insert_id();
	
  }

 /**
   * Get Users
   */
  public function get_users(array $data)
  {
  		//$sql = "call SearchAddUser(?,?,?,?,?,?,?,?,?)";
		$sql = "call SearchAddUser(?,?,?)";
		$query = $this->db->query($sql, $data);
		return $query->result();
  }	
  
     /**
  *  To search the Users
  */
  public function get_search_user(array $data)
  {
  		//$sql = "call searchorganization('ABBOTT ELEMENTARY SCHOOL','1','CHICAGO','IL','',0,10)";
		$sql = "call FindUser(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql,$data);
       // echo $this->db->last_query();
		return $query->result();    
  }	
  
/**
  *  To Count no. of search organisation
  */
  public function get_search_user_count(array $data)
  {
  		//$sql = "CALL countsearchorganizations('ABBOTT ELEMENTARY SCHOOL','1','CHICAGO','IL','')";
		$sql = "call countUserResult(?,?,?,?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, $data);
        $tot_res = $query->row();	
        $totRows = $tot_res->tCount;	
        $query->free_result(); 
        return $totRows;
  }
		
}

