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
  
  

	/*public function TotalRec()
	{
	  $sql = "SELECT * FROM my_friends";
          $q = $this->db->query($sql);
          return $q->num_rows();
       }
 
	public function my_friends($perPage)
	{
		$offset = $this->getOffset()
		$query ="SELECT * FROM  my_friends Order By f_id Desc LIMIT ".$offset.", ".$perPage;
		$q = $this->db->query($query);
		return $q->result();
	}
 
	public function getOffset()
	{
        $page = $this->input->post('page');
        if(!$page):
        $offset = 0;
        else:
        $offset = $page;
        endif;
        return $offset;
    }*/
		
}

