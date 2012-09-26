<?php $this->load->view("subparts/header"); ?>
<table width="650" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan=2  class="menuline"> | <a href="#" class="link3">Main 
      Menu</a> | </td>
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
		  echo form_open("users/adduser");
		  ?>
          
          <table width="95%" border="0" align="center" cellpadding="1" cellspacing="1">
              <tr>
                <td colspan="2"><img src="<?php echo base_url()?>assets/images/spacer.gif" width=5 height=5></td>
              </tr>
              <tr> 
                <td colspan="2" align="left" class="hdrYellow2"><strong>Add User - Additional info</strong></td>
              </tr>
              
              <tr> 
                <td colspan="2" class="hdrBlue">
                <img height="3" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              
              <tr class="textBlue"> 
                <td colspan="2">1. How did you hear about us ?</td>
              </tr>
              <tr class="textBlue">  
                <td colspan="2"><input name="txtUsrerId" id="txtUsrerId" type="text" class="fldBlue" size="25" maxlength="50" 
                	value="<?php echo set_value("txtUsrerId"); ?>" />
                	<?php echo form_error('txtUsrerId', '<div class="error">', '</div>'); ?>
                </td>
              </tr>
              
              <tr><td colspan="2">&nbsp;</td></tr>
              
              <tr class="textBlue"> 
                <td colspan="2">2. How many off-site events does your organization attend ?</td>
              </tr>
              
              <tr>  
                <td class="textBlue3"><input name="txtUsrerId" id="txtUsrerId" type="text" class="fldBlue" size="25" maxlength="50" 
                	value="<?php echo set_value("txtUsrerId"); ?>" />
                	<?php echo form_error('txtUsrerId', '<div class="error">', '</div>'); ?>
                </td>
                <td>&nbsp;</td>
              </tr>
              
              <tr><td colspan="2">&nbsp;</td></tr>
              
              <tr class="textBlue"> 
                <td colspan="2">3. How many people in your organization do you plan outings ?</td>
              </tr>
             <tr class="textBlue"> 
               <td class="textBlue3"><input name="txtUsrerId" id="txtUsrerId" type="text" class="fldBlue" size="25" maxlength="50" 
                	value="<?php echo set_value("txtUsrerId"); ?>" />
                	<?php echo form_error('txtUsrerId', '<div class="error">', '</div>'); ?>
                </td>
                 <td>&nbsp;</td>
              </tr>
              
              <tr><td colspan="2">&nbsp;</td></tr>
              
              <tr class="textBlue"> 
                <td colspan="2">4. Who is your organization attends the outings your plan ?</td>
              </tr>
              <tr class="textBlue"> 
                <td class="textBlue3">
                <input type="radio" name="txtPlan" id="txtPlan" value="resident" />Resident
                <br />
                <input type="radio" name="txtPlan" id="txtPlan" value="familyresident" />Family of residents
                <br />
                <input type="radio" name="txtPlan" id="txtPlan" value="staff" />Staff
                <br />
                </td><td >&nbsp;</td>
              </tr>
				
               <tr><td colspan="2">&nbsp;</td></tr>
                
			  <tr class="textBlue"> 
                <td colspan="2">5. Are there others who plan outings for your organization ?</td>
              </tr>  
              <tr>   
                <td  class="textBlue3">
                	<div id="planFirst">
                    	<div id="planFirst_1">
                            <div style="width:45%; padding:5px; float:left">First Name <input name="txtUsrerId" id="txtUsrerId" type="text" class="fldBlue" size="25"
                             maxlength="50" value="<?php echo set_value("txtUsrerId"); ?>" />
                       			 <?php echo form_error('txtUsrerId', '<div class="error">', '</div>'); ?>
                            </div>
                            <div style="width:45%; padding:5px; float:left">
                                Last Name <input name="txtUsrerId" id="txtUsrerId" type="text" class="fldBlue" size="25" maxlength="50" 
                        			value="<?php echo set_value("txtUsrerId"); ?>" />
                        		<?php echo form_error('txtUsrerId', '<div class="error">', '</div>'); ?>
                            </div>
                            <div style="clear:both"></div> 	
                         </div>   
                    </div>
                </td>
                <td >&nbsp;</td>
              </tr>
              <tr><td colspan="2"><input type="button" name="btnAddmore" id="btnAddmore" value="Add more names" onclick="addmorePlan()" /></td></tr>
              
              <tr><td colspan="2">&nbsp;</td></tr>
              
               <tr class="textBlue"> 
                <td colspan="2">6. Would you like to receive... ?</td>
              </tr>
              <tr> 
                <td class="textBlue3">
                <input type="radio" name="txtPlan" id="txtPlan" value="resident" />Email announcements about Extra Tour events?
                <br />
                <input type="radio" name="txtPlan" id="txtPlan" value="familyresident" />Information on events from CVS and our parters ?
                <br />
                <input type="radio" name="txtPlan" id="txtPlan" value="staff" />Special offers from CVS?
                <br />
                <input type="radio" name="txtPlan" id="txtPlan" value="staff" />Special offers from our parters ?
                <br />
                </td><td >&nbsp;</td>
              </tr>
              
              <tr><td colspan="2">&nbsp;</td></tr>
              
              <tr><td colspan="2"><input type="Submit" name="btnSubmit" id="btnSubmit" value="Enter" /></td></tr>
              
              <tr><td colspan="2">&nbsp;</td></tr>
            </table>
            
          
          <?php
		  echo form_close();
		  /**
		   * Form Close 
		   */
		  ?>
            
            </td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php $this->load->view("subparts/footer"); ?>
