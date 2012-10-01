<?php $this->load->view("subparts/header_div"); ?>
  <div class="titleheader1"><span><a href="" class="header">Find Orgnization</a></span></div>
  <div class="titleheader2"><span> <a href="" class="header1">> Find Orgnization</a></span></div>
     <div class="mainbox">
        <div class="mainboxcol">
<?php
/**
* Form Open 
*/
 echo form_open("organization/addorganization");
?>		
       <p><strong>Add Orgnization Info:</strong></p>
           <div class="mainboxcol_1">
               <li>Name*</li>
               <li>Address*</li>
               <li>City*</li>
               <li>State*</li>
               <li>Zip*</li>
               <li>Phone</li>
               <li>Fax</li>
               <li>Org Type</li>
               <li>Org Type other</li>
               <li>Do Not Mail</li>
               <li>Don Not Fax</li>
               <li>Status</li>
           </div>
           <div class="mainboxcol_2">
             <div class="mainboxcol_2_1">
               <li><input name="orgName_fld" type="text" size="25" maxlength="50" value="">
				    <?php echo form_error('orgName_fld', '<div class="error">', '</div>'); ?></li>
               <li><input name="address1_fld" type="text" size="25" maxlength="50" value="">
				    <?php echo form_error('address1_fld', '<div class="error">', '</div>'); ?></li>
               <li><input type="text" name="city_fld"  size="35" maxlength="100" value="">
				    <?php echo form_error('city_fld', '<div class="error">', '</div>'); ?></li>
               <!--<li><input type="text" size="30" /></li> -->
               <li>
                 <select id="state_lst" name="state_lst">
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
               </li>
                <li>
                  <div class="phone">
                    <div class="phone_col">
                       <div class="phone_col_1"><input name="zipCode_fld" type="text" size="6" maxlength="10" value="">
    <?php echo form_error('zipCode_fld', '<div class="error">', '</div>'); ?></div>                     
                    </div>                   
                  </div>
                </li>
                <li>
                  <div class="phone">
                    <div class="phone_col">
                       <div class="phone_col_1"><input name="phArea_fld" id="phArea_fld" type="text" size="6" maxlength="3" value=""></div>
                       <div class="phone_col_2"><input name="phPre_fld" id="phPre_fld" type="text" size="6" maxlength="3" value=""></div>
                    </div>
                    <div class="phone_co2"><input name="phSuf_fld" id="phSuf_fld" type="text" size="6" maxlength="4" value=""></div>
                  </div>
                </li>
                 <li>
                  <div class="phone">
                    <div class="phone_col">
                       <div class="phone_col_1"><input name="fxArea_fld" id="fxArea_fld" type="text" size="6" maxlength="3" value=""></div>
                       <div class="phone_col_2"><input name="fxPre_fld" id="fxPre_fld" type="text" size="6" maxlength="3" value=""></div>
                    </div>
                    <div class="phone_co2"><input name="fxSuf_fld" id="fxSuf_fld" type="text" size="6" maxlength="4" value=""></div>
                  </div>
                </li>
                 <li>
					 <select id="orgType_lst" name="orgType_lst" onchange="checkOrgTypeOther();">
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
                 <li><input name="orgTypeOther_fld" id="orgTypeOther_fld" type="text" size="30" maxlength="50" value="" disabled="disabled"></li>
                 <li>
                    <div class="phone">
                    <div class="phone_col">
                       <div class="phone_col_1"><input name="dnMail_cbx" type="checkbox" id="dnMail_cbx" value="1"></div>                       
                    </div>                   
                  </div>
                 </li>
                  <li>
                    <div class="phone">
                    <div class="phone_col">
                       <div class="phone_col_1"><input name="dnFax_cbx" type="checkbox" id="dnFax_cbx" value="1"></div>                       
                    </div>                   
                  </div>
                 </li>
                <li>
                 <select id="status_lst" name="status_lst">
                            <option value=""></option>
                            <option value="0" >Hide from public</option>
                            <option value="1" >Post to public</option>
                        </select>
                 </li>                 
                 <li>
                 <div class="button">
                   <div class="buttoncol1"><input name="saveBtn" class="fancybox-item fancybox-close" type="submit" value="Save"></div>
                   <div class="buttoncol2"><input name="cancelBtn" type="reset" value="Cancel"></div>
                 </div>
                   </li>
                   <p></p>
             </div>
           </div>
        </div>
        <div class="mainboxco2"></div>
		<?php
		  echo form_close();
		  /**
		   * Form Close 
		   */
		  ?>
     </div>
</div>
            
          
          
            
    
<?php $this->load->view("subparts/footer"); ?>
<script language="javascript">
$(document).ready(function() { 
	$('#phArea_fld').keyup(function() {
		 if(this.value.length == $(this).attr('maxlength')) {
			 $('#phPre_fld').focus();
		 }
	 });
	 $('#phPre_fld').keyup(function() {
		 if(this.value.length == $(this).attr('maxlength')) {
			 $('#phSuf_fld').focus();
		 }
	 }); 
});

$(document).ready(function() { 
	$('#fxArea_fld').keyup(function() {
		 if(this.value.length == $(this).attr('maxlength')) {
			 $('#fxPre_fld').focus();
		 }
	 });
	 $('#fxPre_fld').keyup(function() {
		 if(this.value.length == $(this).attr('maxlength')) {
			 $('#fxSuf_fld').focus();
		 }
	 }); 
});
	 
</script>

