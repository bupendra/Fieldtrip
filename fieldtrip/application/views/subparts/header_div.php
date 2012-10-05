<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="keywords" content="Visio, Extra Tour, css3" />
<title>FTF Admin</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css"/>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<div class="main">
  <div class="logo">
      <div class="logocol1"><a href="#"><img src="<?php echo base_url();?>assets/images/logo.jpg" alt="logo"/></a></div>
      <div class="logocol2">
      	<p align="right">User Name: <strong><?php echo strtoupper($this->session->userdata('username')); ?></strong></p>
      	<p align="right">Date: <?php echo date('d M ,Y'); ?></p>
      </div>
  </div>
  <div style="clear:both"></div>