<div style="margin:10px 0px; text-align:center">
<?php echo $pagination; ?>
</div>


<h3>Organization Matches Found</h3>
Total : <strong><?php echo $totRows ?></strong>
<div class="gridview" style="margin-top:10px; width:96%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
    <td width="4" bgcolor="#669EE3">&nbsp;
        <input type="hidden" name="selectedOrganizationActionPath" id="selectedOrganizationActionPath" value="organization/assignSession" /></td>
    <td width="164" height="30" bgcolor="#669EE3"><a href="#" class="gridheader">Organization Name</a></td>
    <td width="114" bgcolor="#669EE3"><a href="#" class="gridheader">Address</a></td>
    <td width="81" bgcolor="#669EE3"><a href="#" class="gridheader">City, State</a></td>
    <td width="57" bgcolor="#669EE3"><a href="#" class="gridheader">Zip</a></td>
  </tr>
<?php
//$c=1;
foreach($res as $r){
?>
    
    <tr>
        <td bgcolor="#EDF2FA">&nbsp;</td>
        <td height="26" bgcolor="#EDF2FA">
            <a href="javascript:parent.jQuery.fancybox.close();" id="selectedOrganization" onclick="return AssignToSession('<?php echo $r->id; ?>','<?php echo $r->NAME; ?>','<?php echo $r->account_type; ?>')"><?php echo $r->NAME; ?></a>                                                                                                                                                                                             
        </td>
            <td height="25" bgcolor="#EDF2FA"><?php echo $r->billing_address_street; ?></td>
            <td height="25" bgcolor="#EDF2FA"><?php echo $r->billing_address_city.'&nbsp;,'.$r->billing_address_state; ?></td>
            <td height="25" bgcolor="#EDF2FA"><?php echo $r->billing_address_postalcode ?></td>
        </tr>
<?php        
    //$c++;
    //if($c==10) break;
}
?> </table>        
</div>
<div style="clear:both"></div>
<div style="margin:20px 0px; text-align:center">
<?php echo $pagination; ?>
</div>
