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
   * Abstract record creation.
   * 
   * @param array $data
   * @return type 
   */
  public function createProc(array $data)
  {
  	
	$sql = "call AddOrganization(?,?,?,?,?,?,?,?,?,?,?,?,?,?,@account_id)";
	$execute = $this->db->query($sql, $data);
    //$this->db->insert($this->table_name, $data);
   // return $this->db->insert_id();
	$res = $this->db->query("SELECT @account_id as accid");
	$row = $res->result();
	return $row;
  }
    
   /**
  *  To search the organisation
  */
  public function get_search_organization(array $data)
  {
  		//$sql = "call searchorganization('ABBOTT ELEMENTARY SCHOOL','1','CHICAGO','IL','',0,10)";
		$sql = "call searchorganization(?,?,?,?,?,?,?)";
		$query = $this->db->query($sql,$data);
       // echo $this->db->last_query();
		return $query->result();    
  }	
  
  
  /**
  *  To Count no. of search organisation
  */
  public function get_search_organizations_count(array $data)
  {
  		//$sql = "CALL countsearchorganizations('ABBOTT ELEMENTARY SCHOOL','1','CHICAGO','IL','')";
		$sql = "call countsearchorganizations(?,?,?,?,?)";
		$query = $this->db->query($sql, $data);
        $tot_res = $query->row();	
        $totRows = $tot_res->tcount;	
        $query->free_result(); 
        return $totRows;
  }
	
}

