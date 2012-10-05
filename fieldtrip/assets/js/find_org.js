// JavaScript Document
$(document).ready(function() {
	
	// user Search Button
	$("#frmSearchOrg").submit(function(){
		
		$("#divOrgMtch").html("");
		var errValue=0;
		var orgname = $("#orgName_fld").val();
		var orgtype = $("#orgType_lst").val();
		var orgZipcode = $("#orgZipCode_fld").val();
		var orgCity = $("#city_org_fld").val();
		var orgState = $("#state_org_fld").val();
		var action = $("#searchActionOrg").val();
		
		if(orgname =='' && orgtype=='' && orgZipcode=='' && orgCity=='' && orgState==''){
			return false;
		}else{
			return true;
		}
		
	});
 
});


