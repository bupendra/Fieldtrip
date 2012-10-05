<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>pagination.css"/>
<!-- Add jQuery library -->
<script type="text/javascript" src="<?php echo base_url()?>assets/fancybox/lib/jquery-1.8.0.min.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/fancybox/source/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.0"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/find_org.js"></script>

<!-- Body Start -->       
<div style="font-weight:bold; font-size:16px; text-align:center; text-decoration:underline">Search & Select Organization</div>
<?php
	  /**
	   * Form Open 
	   */
	  echo form_open("organization/orgresults",'id="frmSearchOrg" name="frmSearchOrg"');
?>
  <div class="mainbox" style="width:100%">
    <div class="mainboxcol" style="width:100%">
	<p><a href="<?php echo base_url(); ?>organization/addorganization">Add Organization</a></p>
    <p><strong>Search By:</strong></p>
       <div class="mainboxcol_1">
           <li>Organization Name</li>
           <li>Organization Type</li>
           <li>Zipcode</li>
       </div>
       <div class="mainboxcol_2">
         <div class="mainboxcol_2_1">
           <li>
           		<input name="orgName_fld" id="orgName_fld" type="text" class="fldBlue" size="30" maxlength="100"  />
           </li>
           <li>
           <?php 
		   		$options = 'id="orgType_lst" class="inputBlue"';
				echo form_dropdown('orgType_lst', $OrganizationTypes, "", $options);
			?>
           </li>
           <li><input name="orgZipCode_fld" id="orgZipCode_fld" type="text" size="10" maxlength="10"  /></li>
         </div>
       </div>
       
        <div class="mainboxcol_1" style="width:100px">
           <li>City</li>
           <li>State</li>
       </div>
       <div class="mainboxcol_2">
         <div class="mainboxcol_2_1">
           <li><input name="city_org_fld" id="city_org_fld" type="text" size="20"    /></li>
           <li>
           	   <?php 
		   		$options = 'id="state_org_fld" class="fldBlue"';
				echo form_dropdown('state_org_fld', $StatesList,"", $options);
			  ?>
           	 </li>
         </div>
       </div>
    
    </div>
    <!--<div class="mainboxco2"></div>-->
    <div style="clear:both"></div>
    <div align="center">
  	   	<input name="btnOrgSearch" id="btnOrgSearch" type="submit" value="Search" class="search" />
    </div>
    <?php echo form_close(); ?>
<div style="clear:both"></div>
<?php //$this->load->view("subparts/footer_div"); ?>

<script type="text/javascript">
function AssignToSession(orgID,orgName,orgAccountType){
       parent.document.frmAddUser.txtOrganisationID.value = orgID;
       parent.document.frmAddUser.txtOrganization.value = orgName; 
	   parent.document.frmAddUser.txtOrganisationType.value = orgAccountType;
       return true; 
}
</script>