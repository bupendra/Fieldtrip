<?php $this->load->view("subparts/header"); ?>
<table width="650" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan=2  class="menuline"><?php $this->load->view("subparts/topmenu"); ?></td>
  </tr>
  <tr> 
    <td colspan=3><img height="12" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
  </tr>
    
  <tr> 
    <td> 
      <table width="96%" border="0" cellpadding="0" cellspacing="0" bgcolor="#eaf4ff">
        <tr>
          <td>
          <?php
		  /**
		   * Form Open 
		   */
		  echo form_open("users/finduser");
		  ?>
          
          <table width="95%" border="0" align="center" cellpadding="1" cellspacing="1">
              <tr>
                <td colspan="4"><img src="<?php echo base_url()?>assets/images/spacer.gif" width=5 height=5></td>
              </tr>
              <tr> 
                <td colspan="4" align="left" class="hdrYellow2"><strong>Search By:</strong></td>
              </tr>
              <tr> 
                <td colspan="4" class="hdrBlue">
                <img height="3" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              
              <tr class="textBlue"> 
                <td >&nbsp;</td>
                <td width=135>User ID</td>
                <td >&nbsp;</td>
                <td class="textBlue3" ><input name="txtUsrerId" id="txtUsrerId" type="text" class="fldBlue" size="25" maxlength="50" 
                	value="<?php echo set_value("txtUsrerId"); ?>" />
                <?php echo form_error('txtUsrerId', '<div class="error">', '</div>'); ?>                </td>
              
              </tr>
              
              <tr class="textBlue"> 
                <td ><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2 /></td>
                <td >First Name</td>
                <td ><img src="<?php echo base_url()?>assets/images/spacer.gif" width="2" height="2" /></td>
                <td class="textBlue3" >
                <input name="txtFirstName" id="txtFirstName" type="text" class="fldBlue" size="25" maxlength="50" value="<?php echo set_value("txtFirstName"); ?>" />
                <?php echo form_error('txtFirstName', '<div class="error">', '</div>'); ?>
                <div class="error" id="reqFirstName"></div> 
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td> Last Name</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                <input name="txtLastName" id="txtLastName" type="text" class="fldBlue" size="25" maxlength="50" value="<?php echo set_value("txtFirstName"); ?>" />
                <?php echo form_error('txtLastName', '<div class="error">', '</div>'); ?>
                <div class="error" id="reqLastName"></div> 
                </td>
              </tr>

              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Organization Name</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                <input name="txtOrganizationName" id="txtOrganizationName" type="text" class="fldBlue" size="25" maxlength="50" value="<?php echo set_value("txtOrganizationName"); ?>" />
                  </td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td> Organization Type</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                 <!--<select name="txtOrganizationType" id="txtOrganizationType">
                 	<option value="">- Select -</option>
                 </select> -->
				 <?php 
				  $options = 'id="orgType_lst" class="inputBlue"';
				  echo form_dropdown('orgType_lst', $OrganizationTypes, '', $options);
  ?>
                 
				 </td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Phone</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                      <input name="txtPhoneArea" id="txtPhoneArea" type="text" class="inputBlue" size="3" maxlength="3" value="">
                      - 
                      <input name="txtPhoneCode" id="txtPhoneCode" type="text" class="inputBlue" size="3" maxlength="3" value="">
                      - 
                      <input name="txtPhone" id="txtPhone" type="text" class="inputBlue" size="4" maxlength="4" value=""> 
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Fax</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                      <input name="txtFaxArea" id="txtFaxArea" type="text" class="inputBlue" size="3" maxlength="3" value="">
                      - 
                      <input name="txtFaxCode" id="txtFaxCode" type="text" class="inputBlue" size="3" maxlength="3" value="">
                      - 
                      <input name="txtFax" id="txtFax" type="text" class="inputBlue" size="4" maxlength="4" value=""> 
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>City</td>
                <td>&nbsp;</td>
                <td class="textBlue3"><input name="txtCity" id="txtCity" type="text" class="fldBlue" size="25" maxlength="50" value="<?php echo set_value("txtCity"); ?>" /></td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>State</td>
                <td>&nbsp;</td>
                <td class="textBlue3">
                <!--<select name="txtState" id="txtState">
                 	<option value="">- Select -</option>
                 </select> -->
				 
<?php 
				   $options = 'id="selState" class="fldBlue"';
				   echo form_dropdown('selState', $StatesList, "" , $options);
   ?>
                </td>
              </tr>
              
               <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Zip</td>
                <td>&nbsp;</td>
                <td class="textBlue3"><input name="txtZipCode" id="txtZipCode" type="text" class="fldBlue" size="25" maxlength="6" value="<?php echo set_value("txtZipCode"); ?>" /></td>
              </tr>
              
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Email</td>
                <td>&nbsp;</td>
                <td class="textBlue3">
                <input name="txtEmailId" id="txtEmailId" type="text" class="fldBlue" size="25" maxlength="50" value="<?php echo set_value("txtEmailId"); ?>" /></td>
              </tr>
             
              <tr> 
                <td colspan="4"><img height="5" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              <tr> 
                <td colspan="4" align=center class="hdrBlue"> 
               <!-- <input name="btnSearch" id="btnSearch" type="button" class="fldBlue" value="Search" />-->
               <input type="hidden" name="searchAction" id="searchAction" value="<?php echo base_url();?>users/search_users" />
                <input type="submit" name="srchUsrBtn" id="srchUsrBtn" value="Search" />
                </td>
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
          
          <table width="95%" border="0" align="center" cellpadding="1" cellspacing="1">
              <tr>
                <td colspan="4"> 
                <img src="<?php echo base_url();?>assets/images/ajax-loader.gif" width="150" height="150" id="showSearchStatus" />
 		  		<div id="divUsrMtch" style="width:100%; margin:10px 0px;"></div></td>
              </tr>
          </table>    
         
            
            </td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php $this->load->view("subparts/footer"); ?>
