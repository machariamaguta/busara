function formurl()
{
	var formurl=window.location.href;
	document.getElementById("form").action=formurl;
	document.getElementById("submit").style.display="none";
}

function applybutton()
{
	if(document.getElementById("name").value.length!=0 && document.getElementById("email").value.length!=0 && document.getElementById("phone").value.length!=0
		&& document.getElementById("coverletter").value.length!=0 && document.getElementById("yearsofexperience").value!=0 && document.getElementById("educationlevel").value!=0)
	{
		document.getElementById("submit").style.display="inline";
	}
	else
	{
	document.getElementById("submit").style.display="none";	
	}
}
window.onload=function(){formurl();}
window.oninput=function(){applybutton();}