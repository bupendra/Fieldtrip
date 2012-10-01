<?php 
//$this->load->view("subparts/header_div"); 
//$this->load->view("subparts/topmenu_div"); 
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css"/>
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
	  echo form_open("organization/search_organizations");
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
           		<input name="orgName_fld" id="orgName_fld" type="text" class="fldBlue" size="30" maxlength="100" />
        		<input type="hidden" name="searchOrganizationAction" id="searchOrganizationAction" value="<?php echo base_url();?>organization/search_organizations" />
           </li>
           <li>
               <select class="inputBlue" id="orgType_lst" name="orgType_lst">
                <option value="-1">SELECT</option>
                <option value="1">SCHOOL</option>
                <option value="14">PRE-SCHOOL</option>
                <option value="5">HOMESCHOOL</option>
                <option value="10">GIRL SCOUTS</option>
                <option value="11">BOY SCOUTS</option>
                <option value="6">YMCA/YWCA</option>
                <option value="4">BOYS & GIRLS CLUB</option>
                <option value="8">PARK DISTRICT</option>
                <option value="9">HEADSTART</option>
                <option value="15">DAY CARE</option>
                <option value="16">PARENT GROUP</option>
                <option value="18">VIRTUAL AND CYBER SCHOOLS</option>
                <option value="7">OTHER</option>
               </select>   
           </li>
           <li><input name="orgZipCode_fld" id="orgZipCode_fld" type="text" size="10" maxlength="10" /></li>
         </div>
       </div>
       
        <div class="mainboxcol_1" style="width:100px">
           <li>City</li>
           <li>State</li>
       </div>
       <div class="mainboxcol_2">
         <div class="mainboxcol_2_1">
           <li><input name="city_org_fld" id="city_org_fld" type="text" size="20"  /></li>
           <li>
           		 <select class="fldBlue" id="state_org_fld" name="state_org_fld">
					<option value="" selected="selected">- Select -</option>
					<optgroup label="United States">					
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="IA">Iowa</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NC">New Carolina</option>
					<option value="ND">New Dakota</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NV">Nevada</option>
					<option value="NY">New York</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VA">Virginia</option>
					<option value="VT">Vermont</option>
					<option value="WA">Washington</option>
					<option value="WI">Wisconsin</option>
					<option value="WV">West Virginia</option>
					<option value="WY">Wyoming</option>
					</optgroup><optgroup label="Canada">
					<option value="AB">Alberta</option>
					<option value="BC">British Columbia</option>
					<option value="MB">Manitoba</option>
					<option value="NB">New Brunswick</option>
					<option value="NL">Newfoundland</option>
					<option value="NT">Northwest Territories</option>
					<option value="NS">Nova Scotia</option>
					<option value="NU">Nunavut</option>
					<option value="ON">Ontario</option>
					<option value="PE">Prince Edward Island</option>
					<option value="QC">Quebec</option>
					<option value="SK">Saskatchewan</option>
					<option value="YT">Yukon</option>
					</optgroup>
				  </select>
               </li>
         </div>
       </div>
    
    </div>
    <!--<div class="mainboxco2"></div>-->
    <div style="clear:both"></div>
    <div align="center">
  	   	<input name="btnOrgSearch" id="btnOrgSearch" type="button" value="Search" class="search" />
    </div>
    <?php echo form_close(); ?>
<div style="clear:both"></div>
<?php //$this->load->view("subparts/footer_div"); ?>
<img src="<?php echo base_url();?>assets/images/ajax-loader.gif" width="150" height="150" id="showSearchOrgStatus" />
<div id="divOrgMtch" style="width:95%; margin:10px 0px;"></div>

<script type="text/javascript">
function AssignToSession(orgID,orgName,orgAccountType){
   
      parent.document.frmAddUser.txtOrganisationID.value = orgID;
      parent.document.frmAddUser.txtOrganization.value = orgName; 
      parent.document.frmAddUser.txtOrganisationType.value = orgAccountType;
      
	  return true; 
}
</script>