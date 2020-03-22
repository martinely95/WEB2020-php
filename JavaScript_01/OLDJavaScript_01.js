//function validate(username, passwd, password_conf) 
function validate()
{
	if(checkUsername() && checkPasswd() && checkSecondPasswd())
	{
		return true;
	}
	else 
	{
		return false;
	}
	
}
function checkUsername()
{
	var username = getElementByIdFromDocument(Username).value;

	if(username.length < 3 || username.length > 10)// || /^[a-zA-Z_]+$/.test(username))
	{
		alert("Please input between " +3+ " and " +10+ " characters");
		return false;
	}
	else if(/^[0-9a-zA-Z_]+$/.test(username))
	{
		alert('Username is OK!');
		return true;
	}
	else 
	{
		return false;
	}
}
function checkPasswd()
{	
	var passwd = getElementByIdFromDocument(Password).value;
	/*if(passwd.length < 6)
	{ 
		alert("Please input more than " +6+ " characters");
		return false;
	}
	else if(/[0-9]/.test(passwd) && /[a-z]/.test(passwd) && /[A-Z]/.test(passwd))
	{
		alert('Your password is OK!');
		return true;
	}*/
	
	if(^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[A-Za-z0-9]{6,}$.test(passwd))
	{
		//alert('Your password is OK!');
		return true;
	}
	else
	{ 
		var invalidPassword = document.getElementById(invalidPassword);
		invalidPassword.innerHTML = "Password does not have at least 1 upper character, 1 lower character and 1 digit!";
		invalidPassword.style.colour = "orange";
		//alert("Password does not have at least 1 upper character, 1 lower character and 1 digit!");
		return false;
	}
}
function checkSecondPasswd()
{
	var passwd = getElementByIdFromDocument(Password).value;
	var new_Passwd = getElementByIdFromDocument(Password).value;
	
	if(passwd.localeCompare(new_Passwd) === 0)
	{
		alert('Your password is OK!');
		return true;
	}
	else
	{ 
		alert("Password does not have at least 1 upper character, 1 lower character and 1 digit!");
		return false;
	}
}

	
	/*if(password_conf.length < 6)
	{ 
		alert("Please input more than " +6+ " characters");
		return false;
	}
	else if(/[0-9]/.test(password_conf) && /[a-z]/.test(password_conf) && /[A-Z]/.test(password_conf) 
		&& passwd.localeCompare(password_conf) == 1)
	{
		alert('Your confirmation password is the same!');
		return true;
	}
	else
	{ 
		alert("Username does not have at least 1 upper character, 1 lower character and 1 digit!");
		return false;
	}*/