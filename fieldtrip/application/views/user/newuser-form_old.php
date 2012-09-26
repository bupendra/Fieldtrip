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
                <td >&nbsp;</td>
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
                <td ><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td >First Name*</td>
                <td ><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3" >
                <input name="firstname_fld" type="text" class="fldBlue" size="25" maxlength="50" value="">
                <?php echo form_error('firstname_fld', '<div class="error">', '</div>'); ?>
                </td>
              </tr>
              
              <tr class="textBlue"> 
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td> Last Name*</td>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=2 height=2></td>
                <td class="textBlue3">
                <input name="lastname_fld" type="text" class="fldBlue" size="25" maxlength="50" value="">
                <?php echo form_error('lastname_fld', '<div class="error">', '</div>'); ?>
                </td>
              </tr>

              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Phone*</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                  <input name="phArea_fld" type="text" class="inputBlue" size="3" onKeyup="autotab(this, document.AddUser.phPre_fld)" maxlength="3" value="">
                  - 
                  <input name="phPre_fld" type="text" class="inputBlue" size="3" onKeyup="autotab(this, document.AddUser.phSuf_fld)" maxlength="3" value="">
                  - 
                  <input name="phSuf_fld" type="text" class="inputBlue" size="4" onKeyup="autotab(this, document.AddUser.phExt_fld)" maxlength="4" value="">
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
                <td>&nbsp;</td>
                <td> Phone type</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                  <input type="radio" name="phone_type_btn" value="1" checked="checked">
                  Work 
                  <input type="radio" name="phone_type_btn" value="2">
                  Home 
                  <input type="radio" name="phone_type_btn" value="3">
                  Cellular 
                 </td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Fax</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                  <input name="fxArea_fld" type="text" class="inputBlue" size="3" onKeyup="autotab(this, document.AddUser.fxPre_fld)" maxlength="3" value="">
                  - 
                  <input name="fxPre_fld" type="text" class="inputBlue" size="3" onKeyup="autotab(this, document.AddUser.fxSuf_fld)" maxlength="3" value="">
                  - 
                  <input name="fxSuf_fld" type="text" class="inputBlue" size="4" maxlength="4" value=""> 
                </td>
              </tr>
               <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Fax Type</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                 <input type="radio" name="phone_type_btn" value="1" checked="checked">
                  Work 
                  <input type="radio" name="phone_type_btn" value="2">
                  Home  
                </td>
              </tr>
              
              
             
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Contact 2</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> <input name="contact2_fld" type="text" class="fldBlue" size="30" maxlength="100" value=""></td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Phone 2</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> <input name="phArea2_fld" type="text" class="inputBlue" size="3" onKeyup="autotab(this, document.AddUser.phPre2_fld)" maxlength="3" value="">
                  - 
                  <input name="phPre2_fld" type="text" class="inputBlue" size="3"  onKeyup="autotab(this, document.AddUser.phSuf2_fld)" maxlength="3" value="">
                  - 
                  <input name="phSuf2_fld" type="text" class="inputBlue" size="4" maxlength="4" value=""></td>
              </tr>
              <tr> 
                <td colspan="4"><img height="5" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              <tr> 
                <td colspan="4" align="center" class="hdrYellow2">Login Information</td>
              </tr>
              <tr> 
                <td colspan="4" class="hdrBlue"><img height="5" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Email</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                	<input name="email_fld" type="text" class="fldBlue" size="25" maxlength="100" value="">
                     <?php echo form_error('email_fld', '<div class="error">', '</div>'); ?>
                    </td>
              </tr>
			                <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td> Re-enter Email</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                <input name="reemail_fld" type="text" class="inputBlue" size="25" value="">
                <?php echo form_error('reemail_fld', '<div class="error">', '</div>'); ?>
                </td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Enter Password</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> <input name="password_fld" type="password" class="inputBlue" size="25" value=""></td>
              </tr>

              <tr> 
                <td colspan="4"><img height="5" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              <tr> 
                <td colspan="4" align="center" class="hdrYellow2">School/Org Zip 
                  Code and Affiliation</td>
              </tr>
              <tr> 
                <td colspan="4" class="hdrBlue"><img height="5" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Zip/Postal Code*</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> <input name="zipcode_fld" type="text" class="inputBlue" size="10" maxlength="10" value=""> - CA email opt-in 
                <input name="email_opt_in" id="email_opt_in" type="text" class="inputBlue" />
                <?php 
				    echo form_error('zipcode_fld', '<div class="error">', '</div>');
				//	echo form_error('email_opt_in', '<div class="error">', '</div>');
				 ?>
                </td>
              </tr>
              <tr class="textBlue"> 
                <td>&nbsp;</td>
                <td>Affiliation*</td>
                <td>&nbsp;</td>
                <td class="textBlue3"> 
                  <select class="inputBlue" id="affiliation_fld" name="affiliation_fld">
                    <option value="">SELECT</option>
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
                    <?php echo form_error('affiliation_fld', '<div class="error">', '</div>'); ?>
                 </td>
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
            
            </td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php $this->load->view("subparts/footer"); ?>
