// JavaScript Document
$(document).ready(function() {
	$("#showSearchOrgStatus").hide();
	
	// user Search Button
	$("#btnOrgSearch").click(function(){
		
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
			$("#showSearchOrgStatus").show();		
		}
		
		var form_data = {
			orgname: $("#orgName_fld").val(),
			orgtype: $("#orgType_lst").val(),
			orgZipcode: $("#orgZipCode_fld").val(),
			orgState: $("#state_org_fld").val(),
			orgCity: $("#city_org_fld").val()
		};
		
		$.ajax({
			type: "POST",
			url: $("#searchOrganizationAction").val(),
			data: form_data,
			success: function(data)
			{  // alert(data);
				$("#showSearchOrgStatus").hide();
				$("#divOrgMtch").html(data);
			}
		});
		//return false;
		
	});
    
   
      
});


