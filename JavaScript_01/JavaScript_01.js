function validate()
{
	let keeper1 = checkUsername();
	let keeper2 = checkPasswd();
	let keeper3 = checkSecondPasswd();
	
	if(keeper1 && keeper2 && keeper3)
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
	let username = document.getElementById("Username").value;
	let regex = RegExp('^[0-9a-zA-Z_]+$');
	let charCount = username.length;
	
	if(charCount >= 3 && charCount <= 10 && regex.test(username))// || /^[a-zA-Z_]+$/.test(username))
	{
		//alert('Username is OK!');
		return true;
	}
	else 
	{
		let invalidUsername = document.getElementById("invalidUsername");
		invalidUsername.innerHTML = "Invalid username";
		invalidUsername.style.color = "red";
		
		return false;
	}
}
function checkPasswd()
{	
	let passwd = document.getElementById("Password").value;
	let regex = RegExp('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[A-Za-z0-9]{6,}$');
	let charCount = passwd.length; 
	
	if(charCount >= 6 || regex.test(passwd))
	{
		//alert('Your password is OK!');
		return true;
	}
	else
	{ 
		let invalidPassword = document.getElementById("invalidPassword");
		invalidPassword.innerHTML = "Password is too short or does not have at least 1 upper character, 1 lower character and 1 digit!";
		invalidPassword.style.color = "red";
		//alert("Password does not have at least 1 upper character, 1 lower character and 1 digit!");
		return false;
	}
}
function checkSecondPasswd()
{
	let passwd = document.getElementById("Password").value;
	let new_Passwd = document.getElementById("Confirm_Password").value;
	let charCount = passwd.length; 
	
	if(passwd.localeCompare(new_Passwd) === 0 && charCount != 0)
	{
		//alert('Your password is OK!');
		return true;
	}
	else
	{ 
		let invalidPassword = document.getElementById("invalidConfirmPassword");
		invalidConfirmPassword.innerHTML = "The two passwords should be the same!";
		invalidConfirmPassword.style.color = "red";
		//alert("Password does not have at least 1 upper character, 1 lower character and 1 digit!");
		return false;
	}
}