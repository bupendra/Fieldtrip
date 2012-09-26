function changestatus(id,noemps,status,opt,page)
{ 
   //alert(page+id);
	var xmlhttp;
	if (window.XMLHttpRequest)
	  { 
	  // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4)
		{  
			//alert("Setting has been Saved");
			//alert(xmlhttp.responseText);
			if(xmlhttp.responseText=="Remove"){
				
				if(opt!="" && page=="publish" )
				{ 
					document.getElementById('myspan_'+id+'_'+opt).innerHTML = '<font color="blue">Uncheck to Unpublish</font>';
					document.getElementById('status_'+id+'_'+opt).checked=true; 
				}else{ 
					document.getElementById('status_'+id).checked=true; 
				}
			}
			
			//alert(xmlhttp.responseText);
			
		}
	}
	xmlhttp.open("GET","colliborate_ajax/changestatus.php?id="+id+"&opt="+opt+"&page="+page,true);
	xmlhttp.send(null);
}