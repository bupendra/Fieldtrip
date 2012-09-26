<HTML>
<HEAD>
<TITLE>Field trip Factory</TITLE>
<link rel="STYLESHEET" href="<?php echo base_url()?>assets/admin.css" Type="text/css">
</HEAD>
<BODY>

<?php echo form_open("administrator/authenticate"); ?>
<table width="500" border="0" align=center cellpadding="0" cellspacing="0" bgcolor="#eaf4ff">
 <tr>
  <td>


  <table width="500" border="0" ALIGN=center cellpadding="0" cellspacing="0" bgcolor="#eaf4ff">
    <tr>  
      <td><img src="<?php echo base_url()?>assets/images/logo_bus.gif" width="106" height="72"></td>
      <td><img src="<?php echo base_url()?>assets/images/header_admin.gif" width="191" height="65"></td>
    </tr>
  </table>
 		
        <table cellSpacing=1 cellPadding=1 width="100%" bgcolor=white border=0 >
          <tr> 
            <td colspan="4"  class="hdrTaskBar">&nbsp;</td>
          </td>
          <tr> 
            <td colSpan=4><img height=10 width=10 src="<?php echo base_url()?>assets/images/spacer.gif"></td>
          </tr>
          <tr> 
            <td align=center colSpan=4 class=textredBig>Welcome to the <StrONG>Field 
              trip Factory</StrONG> Administation Site<br>
              Please login to continue...</td>
          </tr>
          <tr> 
            <td colSpan=4><img height=10 width=10 src="<?php echo base_url()?>assets/images/spacer.gif"></td>
          </tr>
          <tr> 
            <td colSpan=4 align="center"> 
             <?php if(isset($login_error)){ echo '<span style="color:red">'.$login_error.'</span>'; } ?>
          </td>
          </tr>
          <tr> 
            <td width=5 rowspan="2" align="right"><img src="<?php echo base_url()?>assets/images/cafe.gif" width="70" height="81"></td>
            <td width=5 rowspan="2">&nbsp;</td>
            <td width=80 class=textBlue7>Username</td>
            <td width=200><input class="border3" maxLength=25 width ="0" size=28 name="username_fld" height="0" value="">
            <?php echo form_error('username_fld', '<div class="error">', '</div>'); ?>
            </td>
          </tr>
          <tr> 
            <td class=textBlue7>Password</td>
            <td><input class="border3" type="password" maxLength =25 width="0" size=28  name="password_fld" height="0">
            <?php echo form_error('password_fld', '<div class="error">', '</div>'); ?>
            </td>
          </tr>
          <tr> 
            <td align=middle colSpan=4><img height=3 src="<?php echo base_url()?>assets/images/spacer.gif"></td>
          </tr>
          <tr> 
            <td colSpan=4 align=middle>
            	<input type="image" class="button" title="Click to Login" 
		  								src="<?php echo base_url()?>assets/images/buttons/login_btn.gif">
               <input type="hidden" name="loginCheck" value="yes" />                         
                                        </td>
          </tr>
        </table>
        
      
      </td>
      <td class=hdrBlue width="10">
      	<img height=10 width=10 src="<?php echo base_url()?>assets/images/spacer.gif">
       </td>
    </tr>
    <tr> 
      <td class=hdrBlue colSpan=4>
      	<img height=10 src="<?php echo base_url()?>assets/images/spacer.gif">
       </td>
    </tr>
  </table>

<?php echo form_close(); ?>

</BODY>
</HTML>