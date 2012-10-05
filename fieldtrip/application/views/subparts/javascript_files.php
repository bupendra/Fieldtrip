<script language="javascript" src="<?php echo base_url()?>assets/jquery-accordion/jquery-1.3.1.min.js"></script>
<script language="javascript" src="<?php echo base_url()?>assets/jquery-accordion/jquery.easing.1.3.js"></script>
<script language="javascript" src="<?php echo base_url()?>assets/js/jquery-latest.js"></script> 
<script language="javascript" src="<?php echo base_url()?>assets/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/general.js"></script>

<!--
Add user page,
 -->
<script language="javascript" src="<?php echo base_url()?>assets/js/jquery.autotab-1.1b.js"></script>

<!--Add user rating star related files -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/ratingstar/jquery_002.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/ratingstar/jquery_004.js"></script>
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url()?>assets/js/ratingstar/jquery.css">

<!-- END Add user rating star related files -->

<?php if($this->uri->segment(2)=="finduser"){?>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/find_user.js"></script>
<?php }  ?>

<!--<script type="text/javascript" src="<?php echo base_url()?>assets/js/find_org.js"></script>-->

<?php if($this->uri->segment(2)=="adduser"){ ?>
<!-- Add jQuery library -->
<script type="text/javascript" src="<?php echo base_url()?>assets/fancybox/lib/jquery-1.8.0.min.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/fancybox/source/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.0"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 850,
		maxHeight	: 700,
		fitToView	: false,
		width		: '85%',
		height		: '90%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'

	});
});
</script>

<?php } ?>

<?php if($this->uri->segment(2)=="adduser"){?>
<!--<script type="text/javascript" src="<?php echo base_url()?>assets/js/add_user.js"></script>-->
<?php } ?>
