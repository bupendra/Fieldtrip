<?php $this->load->view("subparts/header"); ?>

<table width="600" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan=3  class="menuline"> | <a href="../ftfMain.php?ts=1343568164" class="link2">Main 
      Menu</a> 
| <a href="findOrg.php?ts=1343568164&rl=1" class="link2">Find 
Org</a>&nbsp;|</td>
  </tr>
  <tr> 
    <td colspan=3><img height="5" src="<?php echo base_url()?>images/spacer.gif" width="10"></td>
  </tr>
  </table> 
  
<?php
/**
* Form Open 
*/
 echo form_open("organization/addorganization");
?>

<table width="600" cellpadding="0" cellspacing="1" bgcolor="#eaf4ff">
  <tr> 
    <td rowspan="16" width=5><img src="<?php echo base_url()?>images/spacer.gif" width=5 height=5></td>
    <td width=90><img src="<?php echo base_url()?>images/spacer.gif" width=5 height=5></td>
    <td><img src="<?php echo base_url()?>images/spacer.gif" width=5 height=5></td>
    <td rowspan="16" width=5><img src="<?php echo base_url()?>images/spacer.gif" width=5 height=5></td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFCC" class="textBlue"><strong>Add Org Info</strong></td>
    <td bgcolor="#FFFFCC" align="right" >&nbsp;</td>
  </tr>
  <tr> 
    <td class="textBlue">Name*</td>
    <td class="textBlue3"> 
    <input name="orgName_fld" type="text" class="fldBlue" size="25" maxlength="50" value="">
    <?php echo form_error('orgName_fld', '<div class="error">', '</div>'); ?>      
    </td>
  </tr>
  <tr> 
    <td class="textBlue">Address*</td>
    <td class="textBlue3"><input name="address1_fld" type="text" class="fldBlue" size="25" maxlength="50" value="">
     <?php echo form_error('address1_fld', '<div class="error">', '</div>'); ?>
    </td>
  </tr>
  <tr> 
    <td class="textBlue">&nbsp; </td>
    <td class="textBlue3"><input name="address2_fld" type="text" class="fldBlue" size="25" maxlength="50" value="">
    </td>
  </tr>
  <tr> 
    <td class="textBlue">City*</td>
    <td class="textBlue3"><input name="city_fld" type="text" class="fldBlue" size="35" maxlength="100" value="">
    <?php echo form_error('city_fld', '<div class="error">', '</div>'); ?>
    </td>
  </tr>
  <tr>
    <td class="textBlue">State*</td>
    <td class="textBlue3">
    <select class="fldBlue" id="state_lst" name="state_lst">
    	<option value="" SELECTED > </option>
        <optgroup label="United States">
        <option value="AK">AK</option>
        <option value="AL">AL</option>
        <option value="AR">AR</option>
        <option value="AZ">AZ</option>
        
        <option value="CA">CA</option>
        <option value="CO">CO</option>
        <option value="CT">CT</option>
        <option value="DC">DC</option>
        <option value="DE">DE</option>
        <option value="FL">FL</option>
        <option value="GA">GA</option>
        <option value="HI">HI</option>
        <option value="IA">IA</option>
        <option value="ID">ID</option>
        <option value="IL">IL</option>
        <option value="IN">IN</option>
        <option value="KS">KS</option>
        <option value="KY">KY</option>
        <option value="LA">LA</option>
        <option value="MA">MA</option>
        <option value="MD">MD</option>
        <option value="ME">ME</option>
        <option value="MI">MI</option>
        <option value="MN">MN</option>
        <option value="MO">MO</option>
        <option value="MS">MS</option>
        <option value="MT">MT</option>
        <option value="NC">NC</option>
        <option value="ND">ND</option>
        <option value="NE">NE</option>
        <option value="NH">NH</option>
        <option value="NJ">NJ</option>
        <option value="NM">NM</option>
        <option value="NV">NV</option>
        <option value="NY">NY</option>
        <option value="OH">OH</option>
        <option value="OK">OK</option>
        <option value="OR">OR</option>
        <option value="PA">PA</option>
        <option value="RI">RI</option>
        <option value="SC">SC</option>
        <option value="SD">SD</option>
        <option value="TN">TN</option>
        <option value="TX">TX</option>
        <option value="UT">UT</option>
        <option value="VA">VA</option>
        <option value="VT">VT</option>
        <option value="WA">WA</option>
        <option value="WI">WI</option>
        <option value="WV">WV</option>
        <option value="WY">WY</option>
        </optgroup><optgroup label="Canada">
        <option value="AB">AB</option>
        <option value="BC">BC</option>
        <option value="MB">MB</option>
        <option value="NB">NB</option>
        <option value="NL">NL</option>
        <option value="NT">NT</option>
        <option value="NS">NS</option>
        <option value="NU">NU</option>
        <option value="ON">ON</option>
        <option value="PE">PE</option>
        <option value="QC">QC</option>
        <option value="SK">SK</option>
        <option value="YT">YT</option>
        </optgroup>
      </select>
       <?php echo form_error('state_lst', '<div class="error">', '</div>'); ?>
      </td>
  </tr>
  <tr> 
    <td class="textBlue">Zip/Postal Code*</td>
    <td class="textBlue3">
    <input name="zipCode_fld" type="text" class="fldBlue" size="10" maxlength="10" value="">
    <?php echo form_error('zipCode_fld', '<div class="error">', '</div>'); ?>
    </td>
  </tr>
  <tr> 
    <td class="textBlue">Phone</td>
    <td class="textBlue3"> 
      <input name="phArea_fld" type="text" class="inputBlue" size="3" maxlength="3" value="">
      - 
      <input name="phPre_fld" type="text" class="inputBlue" size="3" maxlength="3" value="">
      - 
      <input name="phSuf_fld" type="text" class="inputBlue" size="4" maxlength="4" value="">
    </td>
  </tr>
  <tr> 
    <td class="textBlue">Fax</td>
    <td class="textBlue3"><input name="fxArea_fld" type="text" class="inputBlue" size="3" maxlength="3" value="">
      - 
      <input name="fxPre_fld" type="text" class="inputBlue" size="3" maxlength="3" value="">
      - 
      <input name="fxSuf_fld" type="text" class="inputBlue" size="4" maxlength="4" value=""> 
    </td>
  </tr>
  <tr> 
    <td class="textBlue">Org Type</td>
    <td class="textBlue3">
        <select class="inputBlue" id="orgType_lst" name="orgType_lst" onchange="checkOrgTypeOther();">
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
   <tr> 
    <td class="textBlue">Org Type Other</td>
    <td class="textBlue3">
    <input name="orgTypeOther_fld" type="text" class="inputBlue" size="25" maxlength="50" value="">
    </td>
  </tr>
   <tr> 
    <td class="textBlue">Do Not Mail</td>
    <td class="textBlue3"><input name="dnMail_cbx" type="checkbox" id="dnMail_cbx" value="1"></td>
  </tr>
  <tr> 
    <td class="textBlue">Do Not Fax</td>
    <td class="textBlue3"><input name="dnFax_cbx" type="checkbox" id="dnFax_cbx" value="1"></td>
  </tr>
    <tr> 
    <td class="textBlue">Status</td>
    <td class="textBlue3"><select class="inputBlue" id="status_lst" name="status_lst">
                            <option value=""></option>
                            <option value="0" >Hide from public</option>
                            <option value="1" >Post to public</option>
                        </select>
    </td>
  </tr> 
  <tr> 
    <td colspan="2"> <img src="images/spacer.gif" height=5 width=5></td>
  </tr>
  <tr> 
    <td colspan="2" align="left">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td align="center"> <input name="saveBtn" type="submit" class="fldBlue" value="Save"> 
          </td>
          <td align="center"> <input name="cancelBtn" type="reset" class="fldBlue" value="Cancel"> 
          </td>
        </tr>
        <tr> 
          <td colspan="2"> <img src="images/spacer.gif" height=5 width=5></td>
        </tr>
      </table>
   </td>
  </tr>
</table>


<?php
  echo form_close();
  /**
   * Form Close 
   */
?>
          
<?php $this->load->view("subparts/footer"); ?>
