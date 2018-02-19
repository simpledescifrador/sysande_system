function validateEntries() 
{
	
	var reg = /[a-zA-Z]{1}[a-zA-Z0-9]{5,19}$/
	var str = document.getElementById("inputUser").value;
	if (!(str.match(reg)))
	{
		document.getElementById("message").innerHTML = "Not a valid username. Please enter alpha numeric minimum of 6 characters and maximum of 20 characters and should start with alphabet.";
		return false;	
	}
	
	var reg = /^[A-Za-z]\w{6,}$/;
	var str = document.getElementById("inputPass").value;
	if (!(str.match(reg)))
	{
		document.getElementById("message").innerHTML = "Please enter a valid password!";
		return false;	
	}	
	return true;
}
