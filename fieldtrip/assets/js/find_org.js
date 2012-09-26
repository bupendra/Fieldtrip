// JavaScript Document
$(document).ready(function() {
	$("#showSearchOrgStatus").hide();
	
	// user Search Button
	$("#orgType_lst").change(function(){
		
		var errValue=0;
		var orgname = $("#orgName_fld").val();
		var orgtype = $("#orgType_lst").val();
		var action = $("#searchActionOrg").val();
		
		if(orgtype =='' ){
			return false;
		}else{
			$("#showSearchOrgStatus").show();		
		}
		
		var form_data = {
			orgname: $("#orgName_fld").val(),
			orgtype: $("#orgType_lst").val(),
			
			is_ajax: 1
		};
		
		$.ajax({
			type: "POST",
			url: action,
			data: form_data,
			success: function(data)
			{ //alert(data);
				$("#showSearchOrgStatus").hide();
				$("#divOrgMtch").html(data);
			}
		});
		//return false;
		
	}).change();
	
});
