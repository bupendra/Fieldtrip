<html>
<head>       
<title>User Manager - User Profile</title>
<link rel="STYLESHEET" href="<?php echo base_url()?>assets/admin.css" Type="text/css">
<script language="javascript" src="<?php echo base_url()?>assets/js/general.js"></script>
<?php $this->load->view("subparts/javascript_files"); ?>
</head>    
<body> 
<table width="650" cellspacing="0" cellpadding="0" >
  <tr> 
    <td class="hdrBlue"><img src="<?php echo base_url()?>assets/images/logo_bus.gif" width="106" height="72"></td>
    <td class="hdrBlue"><img src="<?php echo base_url()?>assets/images/header_admin.gif" width="191" height="65"></td>
    <td align=right class="hdrBlue"> 
      
<table class="border2" cellspacing="1" cellpadding="1" width="125" bgcolor="white" background border="0">
  <tr> 
    <td  class="genLn1" style="text-align:center;">Username</td>
  </tr>
  <tr> 
    <td align="middle" valign="center"><img height="2" src="<?php echo base_url()?>assets/images/blueSq.gif" width="118" border="0"></td>
  </tr>
  <tr> 
	<td class="genLn1" style="text-align:center;"><?php echo anchor("administrator/logout","Log Out"); ?></td>
   </tr>
</table>
    </td>
  </tr>
  <tr> 
    <td colspan=3 align=right class="hdrBlue"><?php echo date("d/m/Y"); ?></td>
  </tr>
  <tr> 
    <td class="hdrBlue1" colSpan="3"><img height="1" src="<?php echo base_url()?>assets/images/spacer.gif" width="1">
    <img height="1" src="<?php echo base_url()?>assets/images/spacer.gif" width="10"></td>
  </tr>
  <tr> 
    <td height="16" colspan=3 class="hdrTaskBar"> </td>
  </tr>
</table>