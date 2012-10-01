<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization extends CI_Controller {

	
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
        
        $this->load->view('organization/pop-search_org');
        
    } 
    
    
	/**
	* Search Organization, Ajax Results
	*/
	public function search_organizations()
	{
		/*$organization_data = array('name'   => $this->input->post('orgname'),
								   'type'    => $this->input->post('orgtype'),
								   'primaryaddress_city'       => $this->input->post('city'),
								   'primaryaddress_state'       => $this->input->post('state'),
								   'primaryaddress_postalcode'       => $this->input->post('zipcode')
								   );	*/
		$organization_data_paging = array('name'   => $this->input->post('orgname'),
									   'account_type'    => $this->input->post('orgtype'),
									   'billing_address_city'    => $this->input->post('orgCity'),
									   'billing_address_state'    => $this->input->post('orgState'),
									   'billing_address_postalcode'    => $this->input->post('orgZipcode'),
									   'pagestart'=>0,
									   'pageend'=>10000
								   );
		$organization_data = array('name'   => $this->input->post('orgname'),
								   'account_type'    => $this->input->post('orgtype'),
                                   'billing_address_city'    => $this->input->post('orgCity'),
                                   'billing_address_state'    => $this->input->post('orgState'),
                                   'billing_address_postalcode' => $this->input->post('orgZipcode')
								   );					   
		
		$totRows = $this->organization_model->get_search_organizations_count($organization_data);
		//echo $tot_res->tcount;
        $res = $this->organization_model->get_search_organization($organization_data_paging);
		//print_r($res);
		//die;
		
        
		$disp ='<center><span class="hdrYellow2">'.$totRows.' Organizations Found</span>
		<span class="hdrYellow2"><a onclick="$(\'#divOrgMtch\').hide()">X</a></span></center>
		<div class="gridview">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
			 <tr>
            <td width="4" bgcolor="#669EE3">&nbsp;
                <input type="hidden" name="selectedOrganizationActionPath" id="selectedOrganizationActionPath" value="organization/assignSession" /></td>
            <td width="164" height="30" bgcolor="#669EE3"><a href="#" class="gridheader">Organization Name</a></td>
            <td width="114" bgcolor="#669EE3"><a href="#" class="gridheader">Address</a></td>
            <td width="81" bgcolor="#669EE3"><a href="#" class="gridheader">City, State</a></td>
            <td width="57" bgcolor="#669EE3"><a href="#" class="gridheader">Zip</a></td>
          </tr>';
		//$c=1;
		foreach($res as $r){

			$disp .='<tr>
                        <td bgcolor="#EDF2FA">&nbsp;</td>
                        <td height="26" bgcolor="#EDF2FA">
                            <a href="javascript:parent.jQuery.fancybox.close();" id="selectedOrganization" onclick="return AssignToSession(\''.$r->id.'\',\''.$r->NAME.'\',\''.$r->account_type.'\')">'.$r->NAME.'</a>                                                                                                                                                                                             
                        </td>
                        <td height="25" bgcolor="#EDF2FA">'.$r->billing_address_street.'</td>
                        <td height="25" bgcolor="#EDF2FA">'.$r->billing_address_city.'&nbsp;'.$r->billing_address_state.'</td>
                        <td height="25" bgcolor="#EDF2FA">'.$r->billing_address_postalcode.'</td>
                    </tr>'; //$r->phonehome
			//$c++;
			//if($c==10) break;
		}
		$disp .=' </table>        
                </div>';
		
		echo $disp;		
	}
		
	
    /**
    * Jquery selected Organization, Assign to session
    */
  /*  public function assignSession()
    {
        $newdata = array(
                   'SessionOrganizationName'  => $this->uri->segment(3),
                   'SessionOrganizationID'     => $this->uri->segment(4)
               );
        $this->session->set_userdata($newdata);    
    }*/
}
