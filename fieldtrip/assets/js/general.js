// JavaScript Document

var i=1;

function addmorePlan()
{
	i++;
	var divTag = document.createElement("div");
	divTag.id ="planFirst_"+i;
	divTag.innerHTML= '<div style="width:45%; padding:5px; float:left">First Name <input name="txtUsrerId" id="txtUsrerId" type="text" class="fldBlue" size="25" maxlength="50" /></div><div style="width:45%; padding:5px; float:left">Last Name <input name="txtUsrerId" id="txtUsrerId" type="text" class="fldBlue" size="25" maxlength="50"  /></div><div style="clear:both"></div>';
	document.getElementById("planFirst").appendChild(divTag);
}

function checkOrgTypeOther(){
	var orgtype = $("#orgType_lst").val();
	
	if(orgtype == 7){
		//alert(orgtype);
		$("#orgTypeOther_fld").removeAttr("disabled");
	}else if(orgtype == 1){
		//alert(orgtype);
		$("#dnFax_cbx").attr("checked","checked");
	}
}