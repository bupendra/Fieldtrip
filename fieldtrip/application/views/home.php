<?php $this->load->view("subparts/header_div"); ?>

<?php $this->load->view("subparts/topmenu_div"); ?>

<table width="956" cellpadding="0" cellspacing="0" align="center">
  <tr> 
    <td> 
      <table width="100%" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td>
         
         <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
              <tr>
                <td><img src="<?php echo base_url()?>assets/images/spacer.gif" width=5 height=5></td>
              </tr>
              
              <tr> 
                <td class="hdrBlue">
                <img height="3" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
              </tr>
              
              <tr> 
                <td align="center"><?php if(isset($flash)): ?>
                                           
                                    <p><strong><?php echo $flash; ?></strong></p>
                               
                                <?php endif; ?>
                </td>
              </tr>
              <tr> 
                <td align="center" valign="middle" height="250"><strong>Welcome</strong></td>
              </tr>   
             
            </table>
       
            </td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
    
<?php $this->load->view("subparts/footer_div"); ?>
