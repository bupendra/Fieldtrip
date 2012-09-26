<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization extends CI_Controller {

	/**
	 * Construtor
	 */
   
    public function __construct()
    {
        parent::__construct();    
       
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		
		$this->load->model('organization_model');
    }  
	 
	public function index()
	{
		$this->load->view('login');
	}
	
	public function addorganization()
	{
			$this->form_validation->set_rules('orgName_fld', 'Organization', 'required');
			$this->form_validation->set_rules('address1_fld', 'Address', 'required');
			$this->form_validation->set_rules('city_fld', 'City', 'required');
			$this->form_validation->set_rules('state_lst', 'State', 'required');
			$this->form_validation->set_rules('zipCode_fld', 'Zipcode', 'required|number');
			
			/* Phone Validation 
			$this->form_validation->set_rules('phArea_fld', 'Phone', 'required');
			$this->form_validation->set_rules('phPre_fld', 'Phone', 'required');
			$this->form_validation->set_rules('phSuf_fld', 'Phone', 'required'); */
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('neworganization-form');
			}
			else
			{
				$this->load->view('formsuccess');
			}
		
	}
	
	/**
	* Search Organization
	*/
	public function search_organizations()
	{
		/*$organization_data = array('name'   => $this->input->post('orgname'),
								   'type'    => $this->input->post('orgtype'),
								   'primaryaddress_city'       => $this->input->post('city'),
								   'primaryaddress_state'       => $this->input->post('state'),
								   'primaryaddress_postalcode'       => $this->input->post('zipcode')
								   );	*/
		$organization_data = array('name'   => $this->input->post('orgname'),
								   'type'    => $this->input->post('orgtype'),
								   );
		$res = $this->organization_model->get_search_organization($organization_data);
		
		$disp ='<center><span class="hdrYellow2">Organizations Found</span>
		<span class="hdrYellow2"><a onclick="$(\'#divOrgMtch\').hide()">X</a></span></center>
		<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#eaf4ff">
			<tr> 
				<th colspan="8" align="center" class="textBlue3">Organization Name</th>
				<th colspan="8" align="center" class="textBlue3">Address</th>
				<th colspan="8" align="center" class="textBlue3">City, State</th>
				<th colspan="8" align="center" class="textBlue3">Zip</th>
			</tr>';
		$c=1;
		foreach($res as $r){
			
			$disp .='<tr> 
				<td colspan="8" align="center" class="textBlue3">'.$r->NAME.'</td>
				<td colspan="8" align="center" class="textBlue3">'.$r->billing_address_street.'</td>
				<td colspan="8" align="center" class="textBlue3">'.$r->billing_address_city.'&nbsp;'.$r->billing_address_state.'</td>
				<td colspan="8" align="center" class="textBlue3">'.$r->billing_address_postalcode.'</td>
			</tr>'; //$r->phonehome
			$c++;
			if($c==10) break;
		}
		
		$disp .='</table>';
		
		echo $disp;		
	}
		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */