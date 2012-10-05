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
                <td colspan="4" align="left" class="hdrYellow2"><strong>User Search Results</strong></td>
              </tr>
              <tr> 
                <td colspan="4" class="hdrBlue">
                <img height="3" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              <tr> 
                <td colspan="2" align="left"><a href="#" title="search again">Search Again</a></td>
                <td colspan="2" align="right"><a href="#" title="search again">Add New User</a></td>
              </tr>
              <tr> 
                <td align="left" colspan="4">&nbsp;</td>
              </tr>   
              
               <tr> 
                <td align="left">Narrow Your Results</td>
                <td align="left">Date Filters</td>
                <td align="left">Display</td>
                <td align="left">&nbsp;</td>
              </tr>
               <tr> 
                <td align="left">
                <select name="selectedFilter" id="selectedFilter">
                	<option value="">--Select--</option>
                    <option value="primary">Primary Organization</option>
                    <option value="type">Organization Type</option>
                    <option value="city">City</option>
                    <option value="state">State</option>
                    <option value="zipcode">Zipcode</option>
                    <option value="email">Primary Email</option>
                    <option value="phone">Primary Phone</option>
                </select> 
                </td>
                <td align="left"><input type="text" name="txtDate" id="txtDate" /></td>
                <td align="left">
                <select name="selLimit" id="selLimit">
                	<option value="25">25 per page</option>
                    <option value="50">50 per page</option>
                    <option value="50">100 per page</option>
                </select> </td>
                <td align="left"><input type="submit" name="btnFilter" id="btnFilter" value="Filter" /></td>
              </tr>
               <tr> 
                <td align="right" colspan="4">Page 1 0f 1</td>
              </tr>
              <tr> 
                <td align="right" colspan="4">&nbsp;</td>
              </tr>   
            </table>
            
            <table width="95%" border="0" align="center" cellpadding="1" cellspacing="1">
               
               <tr> 
                <td bgcolor="#3399CC">Name</td>
                <td bgcolor="#3399CC">Organization</td>
                <td bgcolor="#3399CC">City, State Zip</td>
                <td bgcolor="#3399CC">Dynamic1</td>
                <td bgcolor="#3399CC">Dynamic2</td> 
               </tr>
<?php			foreach($res as $r){
?>			   
				   <tr> 
					<td align="left"><?php echo $r->first_name;?></td>
					<td align="left"><?php echo $r->first_name;?></td>
					<td align="left"><?php echo $r->first_name;?></td>
					<td align="left">&nbsp;</td>
					<td align="left">&nbsp;</td> 
				   </tr>
<?php 			}?>			   
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
