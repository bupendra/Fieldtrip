<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization extends MY_Controller {

	
    public function __construct()
    {
        parent::__construct();    
        if ($this->is_logged_in() == FALSE)
		{
		  redirect('administrator');
		}
		
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		
		$this->load->model('organization_model');
        $this->load->library('pagination');
    }  
	 
	public function index()
	{
		echo "working on this module..";
		//$this->load->view('login');
	}
	
    /**
    * Add Organization
    */
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
				$this->load->view('organization/addorg-form');
			}
			else
			{
				//$this->load->view('formsuccess');
				$phoneoffice = $this->input->post('phArea_fld').$this->input->post('phPre_fld').$this->input->post('phSuf_fld');
				$faxNo = $this->input->post('fxArea_fld').$this->input->post('fxPre_fld').$this->input->post('fxSuf_fld');
				$orgOther = $this->input->post('orgType_lst') == 7 ? $this->input->post('orgTypeOther_fld') : '';
				
				$user_data = array(
							   'organizationname'   => $this->input->post('orgName_fld'), 
							   'organizationtype'   => $this->input->post('orgType_lst'),
							   'phoneoffice'        => $phoneoffice,
							   'phonefax'       => $faxNo,
							   'addressstreet'       => $this->input->post('address1_fld'),							   
							   'addresscity'   => $this->input->post('city_fld'), 
							   'addressstate'        => $this->input->post('state_lst'),
							   'addresspostalcode'       => $this->input->post('zipCode_fld'),
							   'organizationtypeother'        => $orgOther,
							   'dontmail'   => $this->input->post('dnMail_cbx'),
							   'dontfax'        => $this->input->post('dnFax_cbx'),
							   'status1'       => $this->input->post('status_lst'),
							   'createdby'   => 1, 							  
							   'modifiedby'       => 1
							   );
							   
				  $lastInsertOrgId = $this->organization_model->createProc($user_data);
				  //print_r($lastInsertOrgId);die;
				  foreach($lastInsertOrgId as $r){
				  	$outVal = $r->accid;
				  }
				  
				  
?>				
<!--<script language="javascript" src="<?php echo base_url()?>assets/jquery-accordion/jquery-1.3.1.min.js"></script> -->
<!--<script type="text/javascript" src="<?php echo base_url()?>assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.0"></script> -->
	<script language="javascript">	
		parent.document.frmAddUser.txtOrganisationID.value = '<?php echo $outVal;?>';
		parent.document.frmAddUser.txtOrganization.value = '<?php echo $this->input->post('orgName_fld');?>';
		parent.document.frmAddUser.txtOrganisationType.value = '<?php echo $this->input->post('orgType_lst');?>';
		parent.$.fancybox.close();
		/*alert(document.getElementById('lastInsert').id);
		document.getElementById('lastInsert').innerHTML = 'Upend';
		alert(document.getElementById('lastInsert').innerHTML);*/
		 
		
	   
		
	</script>
<?php				  //echo 'upendra'; //$this->load->view('organization/closeorg-form'); 
				
				
			}
		
	}
	
    /**
    * Find Organization Form
    */
    public function findorg(){
        
        $data = array();
		$data['OrganizationTypes'] = $this->config->item('ORG_TYPES');
		$data['StatesList'] = $this->config->item('STATES_LIST');
		$this->load->view('organization/pop-search_org',$data);
        
    } 
    
    
	/**
	* Search Organization, Ajax Results
	*/
	public function orgresults()
	{
		
		$data = array();
		$data['OrganizationTypes'] = $this->config->item('ORG_TYPES');
		$data['StatesList'] = $this->config->item('STATES_LIST');
		
			$uri = $this->uri->segment(3);
			$offset = ( ! empty($uri) && is_numeric($uri)) ? $uri : 0;
			$per_page = 30;
			
			if($this->input->post('btnOrgSearch'))
			{
				$organization_data_paging = array('name'   => $this->input->post('orgName_fld'),
										   'account_type'    => $this->input->post('orgType_lst'),
										   'billing_address_city'    => $this->input->post('city_org_fld'),
										   'billing_address_state'    => $this->input->post('state_org_fld'),
										   'billing_address_postalcode'    => $this->input->post('orgZipCode_fld'),
										   'pagestart'=>$offset,
										   'pageend'=>$per_page
									   );
				$organization_data = array('name'   => $this->input->post('orgName_fld'),
										   'account_type'    => $this->input->post('orgType_lst'),
										   'billing_address_city'    => $this->input->post('city_org_fld'),
										   'billing_address_state'    => $this->input->post('state_org_fld'),
										   'billing_address_postalcode' => $this->input->post('orgZipCode_fld')
										   );
												
				// Storing in Session value.								   					   
				$this->session->set_userdata("OrgNAME",$this->input->post('orgName_fld'));
				$this->session->set_userdata("OrgTYPE",$this->input->post('orgType_lst'));
				$this->session->set_userdata("OrgCITY",$this->input->post('city_org_fld'));
				$this->session->set_userdata("OrgSTATE",$this->input->post('state_org_fld'));
				$this->session->set_userdata("OrgZIPCODE",$this->input->post('orgZipCode_fld'));
				
			}else{
			
				
					$organization_data_paging = array('name'   => $this->session->userdata("OrgNAME"),
										   'account_type'    => $this->session->userdata("OrgTYPE"),
										   'billing_address_city'    => $this->session->userdata("OrgCITY"),
										   'billing_address_state'    => $this->session->userdata("OrgSTATE"),
										   'billing_address_postalcode'    => $this->session->userdata('OrgZIPCODE'),
										   'pagestart'=>$offset,
										   'pageend'=>$per_page
									   );
					$organization_data = array('name'   => $this->session->userdata("OrgNAME"),
										   'account_type'    => $this->session->userdata("OrgTYPE"),
										   'billing_address_city'    => $this->session->userdata("OrgCITY"),
										   'billing_address_state'    => $this->session->userdata("OrgSTATE"),
										   'billing_address_postalcode' => $this->session->userdata("OrgZIPCODE")
										   );
			
			}
				$totRows = $this->organization_model->get_search_organizations_count($organization_data);
				//echo $tot_res->tcount;
				$res = $this->organization_model->get_search_organization($organization_data_paging);
				//print_r($res);
				//die;
				
				$config = array();
				$config['base_url']         = site_url('organization/orgresults');
				$config['uri_segment'] = 3;
				$config['total_rows']       = $totRows;
				$config['per_page']         = $per_page;
				$config['full_tag_open']    = '<div class="pagination">';
				$config['full_tag_close']   = '</div>';
				$config['next_link']        = 'Next &rarr;';
				$config['prev_link']        = 'Previous &laquo;';
				$config['cur_tag_open'] =  '<a class="current">';
				

				$this->pagination->initialize($config);
	
				$data['totRows'] = $totRows;
				$data['res'] = $res;
				$data['pagination'] =  $this->pagination->create_links();
				
				$this->load->view('organization/pop-search_org',$data);
				$this->load->view('organization/searchresults/pop-search_org_result', $data);
		
	}
}
