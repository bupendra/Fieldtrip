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
		
		$this->load->model('user_model');
		//$this->load->helper('text');
		//$this->load->library('Ajax_pagination');
    }  
	
	public function index()
	{
		// $this->finduser();
		redirect("users/finduser");
	}
	/**
	* Find user form
	*/
	
	public function finduser()
	{
		$data = array();
		
		
		if($this->input->post('srchUsrBtn'))
		{
			$phoneNo = $this->input->post('txtPhoneArea').$this->input->post('txtPhoneCode').$this->input->post('txtPhone');
			$faxNo = $this->input->post('txtFaxArea').$this->input->post('txtFaxCode').$this->input->post('txtFax');
			$user_data = array('Id'   => $this->input->post('txtUsrerId'),
						   'firstname'    => $this->input->post('txtFirstName'),
						   'lastname'    => $this->input->post('txtLastName'),
						   'organizationname'    => $this->input->post('txtOrganizationName'),
						   'organizationtype' => $this->input->post('orgType_lst'),
						   'phonehome'    => $phoneNo,
						   'phonefax'    => $faxNo,
						   'primaryaddress_city'    => $this->input->post('txtCity'),
						   'primaryaddress_state' => $this->input->post('selState'),
						   'primaryaddress_postalcode'    => $this->input->post('txtZipCode'),
						   'email' => $this->input->post('txtEmailId')
						   );
								   
        	$res = $this->user_model->get_search_user($user_data);
			$data['res'] = $res;
			/*foreach($res as $r){
				$data = array();
				$data['first_name'] = $r->first_name;
				$data['last_name'] = $r->last_name;
				$data['primary_address_city'] = $r->primary_address_city;
				$data['primary_address_state'] = $r->primary_address_state;
				$data['primary_address_postalcode'] = $r->primary_address_postalcode;
			}*/
				$this->load->view("user/usersearch-results",$data);
		
		
			}else{
				$data['OrganizationTypes'] = $this->config->item('ORG_TYPES');
				$data['StatesList'] = $this->config->item('STATES_LIST');						
				$this->load->view("user/finduser-form",$data);
			
			}
		
		
	}
	/**
	* Find user form search result
	*/
	
	public function finduser_result()
	{
		$phoneNo = $this->input->post('txtPhoneArea').$this->input->post('txtPhoneCode').$this->input->post('txtPhone');
		$faxNo = $this->input->post('txtFaxArea').$this->input->post('txtFaxCode').$this->input->post('txtFax');
		$user_data = array('Id'   => $this->input->post('txtUsrerId'),
								   'firstname'    => $this->input->post('txtFirstName'),
                                   'lastname'    => $this->input->post('txtLastName'),
                                   'organizationname'    => $this->input->post('txtOrganizationName'),
                                   'organizationtype' => $this->input->post('orgType_lst'),
								   'phonehome'    => $phoneNo,
                                   'phonefax'    => $faxNo,
                                   'primaryaddress_city'    => $this->input->post('txtCity'),
                                   'primaryaddress_state' => $this->input->post('selState'),
								   'primaryaddress_postalcode'    => $this->input->post('txtZipCode'),
                                   'email' => $this->input->post('txtEmailId')
								   );
								   
        $res = $this->user_model->get_search_user($user_data);
		
		$disp ='<center><span class="hdrYellow2">'.'123'.' Organizations Found</span>
		<span class="hdrYellow2"><a onclick="$(\'#divOrgMtch\').hide()">X</a></span></center>
		<div class="gridview">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
			 <tr>
            <td width="4" bgcolor="#669EE3">&nbsp;
                <input type="hidden" name="selectedOrganizationActionPath" id="selectedOrganizationActionPath" value="organization/assignSession" /></td>
            <td width="164" height="30" bgcolor="#669EE3"><a href="#" class="gridheader">Name</a></td>
			<td width="164" height="30" bgcolor="#669EE3"><a href="#" class="gridheader">Organization</a></td>
            <td width="114" bgcolor="#669EE3"><a href="#" class="gridheader">City, State Zip</a></td>            
          </tr>';
		//$c=1;
		foreach($res as $r){

			$disp .='<tr>
                        <td bgcolor="#EDF2FA">&nbsp;</td>
                        <td height="26" bgcolor="#EDF2FA">
                            <a href="javascript:parent.jQuery.fancybox.close();" id="selectedOrganization" onclick="return AssignToSession(\''.$r->id.'\',\''.$r->first_name.'\',\''.$r->account_type.'\')">'.$r->first_name.' '.$r->last_name.'</a>                                                                                                                                                                                             
                        </td>
                        <td height="25" bgcolor="#EDF2FA">'.$r->last_name.'</td>
                        <td height="25" bgcolor="#EDF2FA">'.$r->primary_address_city.','.$r->primary_address_state.'&nbsp;'.$r->primary_address_postalcode.'</td>
                        <td height="25" bgcolor="#EDF2FA">'.$r->billing_address_postalcode.'</td>
                    </tr>'; //$r->phonehome
			//$c++;
			//if($c==10) break;
		}
		$disp .=' </table>        
                </div>';
		
		echo $disp;
	}
	
	public function adduser()
	{
			$this->form_validation->set_rules('title_fld', 'Title', 'required');
			$this->form_validation->set_rules('firstname_fld', 'Firstname', 'required');
			$this->form_validation->set_rules('lastname_fld', 'Lastname', 'required');
			$this->form_validation->set_rules('city_fld', 'City', 'required');
			$this->form_validation->set_rules('state_fld', 'State', 'required');
			
			/* Phone/fax/email Validation */
			//if($this->input->post('selType_fld') == 'p'){
				$this->form_validation->set_rules('phArea_fld', 'Phone', 'required');
				$this->form_validation->set_rules('phPre_fld', 'Phone', 'required');
				$this->form_validation->set_rules('phSuf_fld', 'Phone', 'required');
				$this->form_validation->set_rules('phone_type_btn', 'Phone Type', 'required');
			//}else if($this->input->post('selType_fld') == 'f'){
				$this->form_validation->set_rules('fxArea_fld', 'Fax', 'required');
				$this->form_validation->set_rules('fxPre_fld', 'Fax', 'required');
				$this->form_validation->set_rules('fxSuf_fld', 'Fax', 'required');
			//}else{
				$this->form_validation->set_rules('email_fld', 'Email', 'required');
				$this->form_validation->set_rules('password_fld', 'Password', 'required');
			//}
			
			$this->form_validation->set_rules('zip_fld', 'Zipcode', 'required|number');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('user/newuser-form');
			}
			else
			{
				 // Success, create user & redirect
				$now = date('Y-m-d H:i:s');
				//$phoneNo =  ($this->input->post('selType_fld') == 'p') ? $this->input->post('phArea_fld').$this->input->post('phPre_fld').$this->input->post('phSuf_fld'):'0';
				//$faxNo = ($this->input->post('selType_fld') == 'f') ?	$this->input->post('fxArea_fld').$this->input->post('fxPre_fld').$this->input->post('fxSuf_fld') : '0';	
				$faxNo = $this->input->post('fxArea_fld').$this->input->post('fxPre_fld').$this->input->post('fxSuf_fld');
					
				$phoneNoWrk = $phoneNoHome = $phoneNoMob = $phoneNoOthr = '';
				if($this->input->post('phone_type_btn') == 1)					 	
				 	$phoneNoWrk = $this->input->post('phArea_fld').$this->input->post('phPre_fld').$this->input->post('phSuf_fld');
				else if($this->input->post('phone_type_btn') == 2)
					$phoneNoHome = $this->input->post('phArea_fld').$this->input->post('phPre_fld').$this->input->post('phSuf_fld');
				else if($this->input->post('phone_type_btn') == 3)
					$phoneNoMob = $this->input->post('phArea_fld').$this->input->post('phPre_fld').$this->input->post('phSuf_fld');
				else
					$phoneNoOthr = $this->input->post('phArea_fld').$this->input->post('phPre_fld').$this->input->post('phSuf_fld');
				
				/*'primary_address_city'        => $this->input->post('city_fld'),
							   'primary_address_state'       => $this->input->post('state_fld'),
							   'primary_address_postalcode'   => $this->input->post('zip_fld'),*/
				$addrStreet = $addrCity = $addrState = $addrZip = $addrStreet2 = $addrCity2 = $addrState2 = $addrZip2 = '';
				
                // Setting values for Primary Adddress or Secondary Address
                if($this->input->post('prmCntct_btnType') == 1){					 	
					$addrStreet = $this->input->post('homeAdr_fld');
					$addrCity = $this->input->post('cityAdr_fld');
					$addrState = $this->input->post('state_lst');
					$addrZip = $this->input->post('cntZip_fld');
				}
				else if($this->input->post('prmCntct_btnType') == 2){
					$addrStreet2 = $this->input->post('homeAdr_fld');
					$addrCity2 = $this->input->post('cityAdr_fld');
					$addrState2 = $this->input->post('state_lst');
					$addrZip2 = $this->input->post('cntZip_fld');
				}		
                
				// Setting Bean Value 
                if($this->input->post('radNoOrganization')=='no'):
                    $beanModule = "Users";
                else:
                    $beanModule = "Contacts";    
                endif;
                
				$user_data = array(
							   'created_by'       => '1',
							   'modified_user_id'       => '1',
							   'salutation'   => $this->input->post('title_fld'), 
							 
                               'title'   => $this->input->post('jobtitle_fld'),
							   'first_name'        => $this->input->post('firstname_fld'),
							   'last_name'       => $this->input->post('lastname_fld'),
                               
							   'phone_home'       => $phoneNoHome,							   
							   'phone_mobile'   => $phoneNoMob, 
							   'phone_work'        => $phoneNoWrk,
							   'phone_other'       => $phoneNoOthr,
							   'phone_fax'        => $faxNo,
							   
                               'primary_address_street'   => $addrStreet,
							   'primary_address_city'        => $addrCity,
							   'primary_address_state'       => $addrState,
							   'primary_address_postalcode'   => $addrZip, 							  
							   'primary_address_country'       => '',
                               
							   'alt_address_street'       => $addrStreet2,	
							   'alt_address_city'   => $addrCity2, 
							   'alt_address_state'        => $addrState2,
							   'alt_address_postalcode'        => $addrZip2,
                               'alt_address_country' => '',
							   
                               'PASSWORD'   => $this->input->post('password_fld'),
							   'beanmodule'       => $beanModule,
							   'email_address'       => $this->input->post('email_fld'),
							   'organization_id'       => $this->input->post('txtOrganisationID'),
							   'acounttype'       => $this->input->post('txtOrganisationTyp'),
							   'contactid' => '');
							   //$this->input->post('selType_fld')
							   
							   /*'primary_address_state'        => $this->input->post('firstname_fld'),
							   'primary_address_postalcode'       => $this->input->post('lastname_fld'),
							   'primary_address_city'   => $this->input->post('zip_fld'), 
							   'primary_address_city'        => $this->input->post('city_fld'),
							   'primary_address_state'       => $this->input->post('state_fld'),*/
							   
							   
							   /*'password_c'        => $this->input->post('password_fld'),
							   'email'   => $this->input->post('title_fld'),
							   */
				  $this->user_model->createProc($user_data);
				 $this->load->view('user/newuser-form'); 
			}
		
	}
	
	
	/**
	* Calling Ajax method
	*/
	public function search_users()
	{
		$phoneNo = $this->input->post('phoneArea').''.$this->input->post('phonePre').''.$this->input->post('phonePre');
		$faxNo = $this->input->post('faxArea').''.$this->input->post('faxPre').''.$this->input->post('faxSuff');
		/* $user_data = array('firstname'   => $this->input->post('firstname'),
						   'lastname'    => $this->input->post('lastname'),
						   'jobtitle'    => "",
						   'phonehome'   => $phoneNo,
						   'phonefax'    => $faxNo,
						   'email'       => $this->input->post('useremail'),
						   'primaryaddress_city'       => $this->input->post('city'),
						   'primaryaddress_state'       => $this->input->post('state'),
						   'primaryaddress_postalcode'       => $this->input->post('zipcode')
						   );	*/
		$user_data = array('firstname'   => $this->input->post('firstname'),
						   'lastname'    => $this->input->post('lastname'),
						   'email'       => $this->input->post('useremail')
						   );	
						   
		$res = $this->user_model->get_users($user_data);
		
		$disp ='<div align="center" class="hdrYellow2" style="padding:3px">
			User Matches Found <span class="hdrYellow2"><a onclick="$(\'#divUsrMtch\').hide()">X</a></span></div>
		<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#eaf4ff">
			<tr> 
				<th align="center" class="textBlue3">Name</th>
				<th  align="center" class="textBlue3">City, State Zip</th>
				<th  align="center" class="textBlue3">Email</th>
				<th  align="center" class="textBlue3">Phone</th>
			</tr>';
		if(count($res)!=0)
		{
			foreach($res as $r){
			
			$disp .='<tr> 
				<td  align="center" class="textBlue3">'.$r->first_name.'&nbsp;'.$r->last_name.'</td>
				<td  align="center" class="textBlue3">'.$r->primary_address_city.'&nbsp;'.$r->primary_address_state.'&nbsp;'.$r->primary_address_postalcode.'</td>
				<td  align="center" class="textBlue3">'.$r->email_address.'</td>
				<td  align="center" class="textBlue3"></td>
			</tr>'; //$r->phonehome
		
			}
			
		}else{	
			
			$disp .='<tr> 
				<td  align="center" class="textBlue3" colspan="3" height="50" valign="middle">No users found..</td>
				<td  align="center" class="textBlue3" valign="middle">'.anchor("users/adduser","Add new User").'</td>
			</tr>'; //$r->phonehome
		}
		$disp .='</table>';
		
		echo $disp;		
	}
	
	
	/**
	* Calling Ajax method
	*/
	public function search_org()
	{
		$user_data = array('orgname'   => $this->input->post('orgname'),
						   'orgtype'    => $this->input->post('orgtype')
						   );	
						   
		$res = $this->user_model->get_org($user_data);
		
		$disp ='<div align="center" class="hdrYellow2" style="padding:3px">
			User Matches Found <span class="hdrYellow2"><a onclick="$(\'#divUsrMtch\').hide()">X</a></span></div>
		<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#eaf4ff">
			<tr> 
				<th align="center" class="textBlue3">Organization Name</th>
				<th  align="center" class="textBlue3">Address</th>
				<th  align="center" class="textBlue3">City, State </th>				
				<th  align="center" class="textBlue3">Zip</th>
				<th  align="center" class="textBlue3">&nbsp;</th>
			</tr>';
		if(count($res)!=0)
		{
			foreach($res as $r){
			
			$disp .='<tr> 
				<td  align="center" class="textBlue3"><a href="#">'.$r->NAME.'</a></td>
				<td  align="center" class="textBlue3">'.$r->billing_address_street.'</td>
				<td  align="center" class="textBlue3">'.$r->billing_address_city.'&nbsp;'.$r->billing_address_state.'</td>				
				<td  align="center" class="textBlue3">'.$r->billing_address_postalcode.'</td>
				<td  align="center" class="textBlue3">&nbsp;</td>
			</tr>'; //$r->phonehome
		
			}
			
		}else{	
			
			$disp .='<tr> 
				<td  align="center" class="textBlue3" colspan="3" height="50" valign="middle">No users found..</td>
				<td  align="center" class="textBlue3" valign="middle">'.anchor("users/adduser","Add Organization").'</td>
			</tr>'; //$r->phonehome
		}
		$disp .='</table>';
		
		echo $disp;		
	}
	
	
	
	
	
		
}