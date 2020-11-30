function validateForm()
{

var name = document.myForm.fn;
var add = document.myForm.Message;
var email = document.myForm.email;
var num = document.myForm.phone;

if(allLetter(name))
{
if(ValidateEmail(email))
{
if(allnumeric(num))                          
{ 
} 
} 
}
return true;
} 

function allLetter(name)
{ 
var letters = /^[A-Za-z]+$/;
if(name.value.match(letters))
{
return true;
}
else
{
alert('Name must have alphabet characters only');
name.focus();
return false;
}
}

function ValidateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}
function allnumeric(num)
{ 
var numbers = /^[0-9]+$/;
if(num.value.match(numbers))
{
return true;
}
else
{
alert('Phone numbers must have numeric characters only');
num.focus();
return false;
}
}