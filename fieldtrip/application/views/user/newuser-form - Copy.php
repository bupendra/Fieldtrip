<?php $this->load->view("subparts/header"); ?>
<script type="text/javascript">
$(document).ready(function(){
			//Turn all the select boxes into rating controls
		    $(".rating").rating();
		
			//Show that we can bind on the select box
			$("#serialStar2").bind("change", function(){
				$('#serialString2').val( $('#serialStar2').serialize() );
			});
			
		});	
</script>

<table width="650" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan=2  class="menuline"> | <a href="#" class="link3">Main 
      Menu</a> | </td>
  </tr>
  <tr> 
    <td colspan=3><img height="12" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
  </tr>
  </table> 
      <!--<table width="75%" border="0" cellpadding="0" cellspacing="0" bgcolor="#eaf4ff">
        <tr>
          <td> -->
          <?php
		  /**
		   * Form Open 
		   */
		  echo form_open("users/adduser");
		  ?>
          <input type="hidden" name="searchAction" id="searchAction" value="<?php echo base_url();?>users/search_users" />
		  <input type="hidden" name="searchActionOrg" id="searchActionOrg" value="<?php echo base_url();?>users/search_org" />
          
          <table width="60%" border="0"  cellpadding="1" cellspacing="1" bgcolor="#eaf4ff">
              <tr>
                <td colspan="4"><img src="<?php echo base_url()?>assets/images/spacer.gif" width=5 height=5></td>
              </tr>
              <tr> 
                <td colspan="4" align="center" class="hdrYellow2"><strong>Contact Information</strong></td>
              </tr>
              <tr> 
                <td colspan="4" class="hdrBlue">
                <img height="3" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              
              <tr class="textBlue"> 
                <!--<td >&nbsp;</td> -->
                <td width=135>Title*</td>
                <td >&nbsp;</td>
                <td class="textBlue3" > 
                  <select class="inputBlue" id="title_fld" name="title_fld">
                  	<option value=""></option>
                    <option value="Ms.">Ms.</option>
                    <option value="Miss">Miss</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Dr.">Dr.</option>
                  </select>
                  <?php echo form_error('title_fld', '<div class="error">', '</div>'); ?>
                </td>
              
              </tr>
              
              <tr class="textBlue"> 
                <!--<td ><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td >First Name*</td>
                <td ><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3" >
                <input name="firstname_fld" id="firstname_fld" type="text" class="fldBlue" size="25" maxlength="50" value="">
                <?php echo form_error('firstname_fld', '<div class="error">', '</div>'); ?>
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td> Last Name*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                <input name="lastname_fld" id="lastname_fld" type="text" class="fldBlue" size="25" maxlength="50" value="">
                <?php echo form_error('lastname_fld', '<div class="error">', '</div>'); ?>
                <div class="error" id="reqLastName"></div>
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td>Zip*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                <input name="lastname_fld" id="lastname_fld" type="text" class="fldBlue" size="25" maxlength="50" value="">
                <?php echo form_error('lastname_fld', '<div class="error">', '</div>'); ?>
                <div class="error" id="reqLastName"></div>
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td> City*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                <input name="city_fld" id="city_fld" type="text" class="fldBlue" size="25" maxlength="" value="">
                <?php echo form_error('city_fld', '<div class="error">', '</div>'); ?>
                </td>
              </tr>
              
               <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td> State*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                <select class="fldBlue" id="state_fld" name="state_fld">
					<option value="" SELECTED > </option>
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
				 <?php echo form_error('state_fld', '<div class="error">', '</div>'); ?>
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td>Phone*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                <input name="phArea_fld" id="phArea_fld" type="text" class="inputBlue" size="3" maxlength="3" value="">
                  - 
                  <input name="phPre_fld" id="phPre_fld" type="text" class="inputBlue" size="3" maxlength="3" value="">
                  - 
                  <input name="phSuf_fld" id="phSuf_fld" type="text" class="inputBlue" size="4" maxlength="4" value="">
                  Ext 
                  <input name="phExt_fld" type="text" class="inputBlue" size="4" maxlength="6" value="">
                  <?php 
                        echo form_error('phArea_fld', '<div class="error">', '</div>');
                        echo form_error('phPre_fld', '<div class="error">', '</div>');
                        echo form_error('phSuf_fld', '<div class="error">', '</div>');
                   ?>
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td>Phone type*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                <input type="radio" name="phone_type_btn" value="1" checked="checked">
                  Work 
                  <input type="radio" name="phone_type_btn" value="2">
                  Home 
                  <input type="radio" name="phone_type_btn" value="3">
                  Cell
                </td>
              </tr>
              
                            <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td>Fax*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                <input name="fxArea_fld" type="text" class="inputBlue" size="3" onKeyup="autotab(this, document.AddUser.fxPre_fld)" maxlength="3" value="">
                  - 
                  <input name="fxPre_fld" type="text" class="inputBlue" size="3" onKeyup="autotab(this, document.AddUser.fxSuf_fld)" maxlength="3" value="">
                  - 
                  <input name="fxSuf_fld" type="text" class="inputBlue" size="4" maxlength="4" value=""> 
				  <?php 
							echo form_error('fxArea_fld', '<div class="error">', '</div>');
							echo form_error('fxPre_fld', '<div class="error">', '</div>');
							echo form_error('fxSuf_fld', '<div class="error">', '</div>');
					   ?>
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td>Fax type*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                      <input type="radio" name="fax_type_btn" value="1" checked="checked">
					  Work 
					  <input type="radio" name="fax_type_btn" value="2">
					  Home 
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td>Email id*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                     <input name="email_fld" id="email_fld" type="text" class="fldBlue" size="25" maxlength="" value="">
                <?php echo form_error('email_fld', '<div class="error">', '</div>'); ?>
                <div class="error" id="reqEmail"></div>
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <!--<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td> -->
                <td>Password*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                     <input name="password_fld" type="password" class="fldBlue" size="25" maxlength="" value="">
					<?php echo form_error('password_fld', '<div class="error">', '</div>'); ?>
                </td>
              </tr>
			 </table>
             
			 <table width="60%" border="0" cellpadding="1" cellspacing="1" bgcolor="#eaf4ff" style="padding-top:20px;">
             <tr> 
                <td colspan="8" align="left"><u>Organization Information</u></td>
              </tr>
              <tr> 
                <td colspan="8" align="left">&nbsp;</td>
              </tr>
              <tr> 
                 <td>&nbsp;</td>
                <td>Organization required </td>
                <td>&nbsp;</td>
                <td colspan="8" align="left">
                 <input type="radio" name="organizationDetails" id="organizationDetails" value="yes" onclick="" />&nbsp;Yes
                &nbsp;&nbsp; <input type="radio" name="organizationDetails" id="organizationDetails" value="no" />&nbsp;No</td>
              </tr>
              
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Select Organization</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> <input name="orgName_fld" id="orgName_fld" type="text" class="fldBlue" size="30" maxlength="100" />
                <input type="hidden" name="searchOrganizationAction" id="searchOrganizationAction" value="<?php echo base_url();?>organization/search_organizations" />
                </td>
				<td colspan="2">OR</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> <input type="radio" name="organization_btn" value="n"> No organization</td> 
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Organization Type</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                 <select class="inputBlue" id="orgType_lst" name="orgType_lst" onchange="searchOrganization()">
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
				</td>
              </tr>
			  <tr >
			  	<td rowspan="2">&nbsp;</td> 
				<td class="textBlue" rowspan="2">Organization Zip</td>
				<td rowspan="2">&nbsp;</td>
				<td class="textBlue3" rowspan="2">
				<input name="orgZipCode_fld" id="orgZipCode_fld" type="text" class="fldBlue" size="10" maxlength="10" /> OR
				</td>
				<td>&nbsp;</td>
				<td class="textBlue">Organization City</td>
				<td>&nbsp;</td>
				<td class="textBlue3"><input name="city_org_fld" id="city_org_fld" type="text" class="fldBlue" size="35" maxlength="100" />
				</td>
			</tr>
			<tr >
				<td>&nbsp;</td>
				<td class="textBlue">Organization State*</td>
				<td>&nbsp;</td>
				<td class="textBlue3">
				<select class="fldBlue" id="state_org_fld" name="state_org_fld">
					<option value="" SELECTED > </option>
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
				  </td>
			  </tr>
             <tr>
             	<td colspan="8">
                <img src="<?php echo base_url();?>assets/images/ajax-loader.gif" width="150" height="150" id="showSearchOrgStatus" />
 			 	<div id="divOrgMtch" style="width:60%; margin:10px 0px;"></div>
                </td>
             </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Primary Role</td>
                <td>&nbsp;</td>
                <td class="textBlue3">
					<select class="fldBlue" id="prmRole_lst" name="prmRole_lst">
						<option value="" SELECTED > </option>
						<option value="AK">AK</option>
						<option value="AL">AL</option>
						<option value="AR">AR</option>
					</select>
				</td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Job Title</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> <input name="jobtitle_fld" type="text" class="inputBlue" value=""></td>
              </tr>
			  
			  <tr class="textBlue">
			  	<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td>Fax type</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                  <input type="radio" name="fax_type_btn" value="1" checked="checked">
                  Work 
                  <input type="radio" name="fax_type_btn" value="2">
                  Home 
                  
                 </td>
			</tr>
			<tr class="textBlue">
			  	<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td > 
                  <input type="radio" name="prmCntct_btnType" value="1" checked="checked">
                </td>
				<td colspan="2">Primary Contact</td>                
			</tr>
			<tr class="textBlue">
			  	<td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td > 
                  <input type="radio" name="prmCntct_btnType" value="2">
                </td>
				<td colspan="2">Secondary Contact</td>                
			</tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Type of Group</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                	<select class="fldBlue" id="grpType_lst" name="grpType_lst">
						<option value="" SELECTED > </option>
						<option value="AK">AK</option>
						<option value="AL">AL</option>
						<option value="AR">AR</option>
					</select>
                    </td>
              </tr>
			  <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Interest Level</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
					<select style="display: none;" name="myRating" class="rating" id="serialStar2">
						<option value="1">ALright</option>
						<option value="2">Ok</option>
						<option value="3">Getting Better</option>
						<option value="4">Pretty Good</option>
						<option value="5">Awesome</option>
					</select>
					
                </td>
				<span><input type="hidden" name="serialString2" id="serialString2" /></span>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Home address</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> <input name="homeAdr_fld" type="text" class="inputBlue" size="25" value=""></td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>City</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> <input name="cityAdr_fld" type="text" class="inputBlue" size="10" maxlength="" value=""></td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>State</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                  <select class="fldBlue" id="cntState_lst" name="state_lst">
					<option value="" SELECTED > </option>
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
                 </td>
              </tr>
			  <tr class="textBlue"> 
                <td rowspan="2"><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td rowspan="2">Zip</td>
                <td rowspan="2"><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3" rowspan="2"><input name="cntZip_fld" type="text" class="fldBlue" size="25" maxlength="6" value=""></td>
			</tr>
			  
              <tr> 
                <td colspan="4"><img height="5" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              <tr> 
                <td colspan="4" align=center class="hdrBlue"> 
                <input name="Next" type="submit" class="fldBlue" id="Next" value="Next" /></td>
              </tr>
              <tr> 
                <td colspan="4">
                <img height="5" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
            </table>
            
          
          <?php
		  echo form_close();
		  /**
		   * Form Close 
		   */
		  ?>
            
          <!--  </td>
        </tr>
      </table> -->
<?php $this->load->view("subparts/footer"); ?>


<script type="text/javascript">
/*$(document).ready(function() {	
	$('#phArea_fld, #phPre_fld, #phSuf_fld').autotab_magic();
});*/

/*$('#selType_fld').change(function() {
  if($(this).val() == 'e'){
  	$('.Emailtr').show();
	$('.phonetr').hide();
	$('.faxtr').hide();
	
	}
  else if($(this).val() == 'p'){
  	$('.Emailtr').hide();
  	$('.phonetr').show();
	$('.faxtr').hide();
	}
  else if($(this).val() == 'f'){
  	$('.Emailtr').hide();
  	$('.phonetr').hide();
	$('.faxtr').show();
}
	
	
});*/

	

</script>
