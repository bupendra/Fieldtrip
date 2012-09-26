// JavaScript Document
$(document).ready(function() {
	$("#showSearchStatus").hide();
	$("#showSearchOrgStatus").hide();
	
	// user Search Button
	$("#srchUsrBtn").click(function(){
		
		var errValue=0;
		var firstname = $("#firstname_fld").val();
		var lastname = $("#lastname_fld").val()
		var email = $("#email_fld").val()
		
		if(firstname==''){
			$("#reqFirstName").html("Please enter the firstname");
			errValue = errValue+1;
		}
		if(lastname==''){
			$("#reqLastName").html("Please enter the lastname");
			errValue = errValue+1;
		}
		if(email==''){
			$("#reqEmail").html("Please enter the email field");
			errValue = errValue+1;
		}
		
		if(errValue !=0 ){
			return false;
		}else{
			$("#showSearchStatus").show();		
		}
		
		var action = $("#searchAction").val();
		var form_data = {
			firstname: $("#firstname_fld").val(),
			lastname: $("#lastname_fld").val(),
			zipcode: $("#zip_fld").val(),
			city: $("#city_fld").val(),
			state: $("#state_fld").val(),
			useremail: $("#email_fld").val(),
			
			phoneArea: $("#phArea_fld").val(),
			phonePre: $("#phPre_fld").val(),
			phoneSuff: $("#phSuf_fld").val(),
			
			faxArea: $("#phArea_fld").val(),
			faxPre: $("#phPre_fld").val(),
			faxSuff: $("#phSuf_fld").val(),
			is_ajax: 1
		};
		
		$.ajax({
			type: "POST",
			url: action,
			data: form_data,
			success: function(data)
			{
				$("#showSearchStatus").hide();
				$("#divUsrMtch").html(data);
			}
		});
		//return false;
		
	});
	
});

function searchOrganization()
{
		var action = $("#searchOrganizationAction").val();
		var form_data = {
			orgname: $("#orgName_fld").val(),
			orgtype: $("#orgType_lst").val(),
			zipcode: $("#orgZipCode_fld").val(),
			city: $("#city_org_fld").val(),
			state: $("#state_org_fld").val(),
			is_ajax: 1
		};
		
		$("#showSearchOrgStatus").show();		
		$.ajax({
			type: "POST",
			url: action,
			data: form_data,
			success: function(data)
			{
				$("#showSearchOrgStatus").hide();
				$("#divOrgMtch").html(data);
			}
		});
		//return false;
}