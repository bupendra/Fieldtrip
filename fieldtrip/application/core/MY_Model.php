<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MY_Model extends CI_Model
{
  public $table_name;

  public function __construct()
  {
    parent::__construct();
  }
  
  
  
  /**
   * Paginate results.
   * 
   * @param type $offset
   * @param type $limit
   * @return type 
   */
  public function paginate($limit = 10, $offset = 0)
  {
		$data = array();
		$this->db->limit($limit, $offset);
		$q = $this->db->get($this->table_name);
		
		if ($q->num_rows() > 0)
		{
		  foreach ($q->result_array() as $row)
		  {
			$data[] = $row;
		  }
		}
		
		return $data;
  }

}