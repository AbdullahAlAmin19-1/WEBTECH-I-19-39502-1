
function checkEmail()
{
    if (document.getElementById("email").value == "") 
    {
	  	document.getElementById("emailErr").innerHTML = "Email Required";
		document.getElementById("emailErr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else if(document.form.email.value.indexOf("@")<1||document.form.email.value.indexOf("@")+2>document.form.email.value.lastIndexOf(".")||document.form.email.value.lastIndexOf(".")+2>=document.form.email.value.length)
	{
		document.getElementById("emailErr").innerHTML = "Invalid Email Format";
		document.getElementById("emailErr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else
	{
		document.getElementById("emailErr").innerHTML = "";
		document.getElementById("email").style.borderColor = "black";
	}
}


function checkName() 
{
	if (document.getElementById("name").value == "") 
	{
		document.getElementById("nameErr").innerHTML = "Name can't be blank";
		document.getElementById("nameErr").style.color = "red";
		document.getElementById("name").style.borderColor = "red";
	}

	else
	{
		document.getElementById("nameErr").innerHTML = "";
		document.getElementById("name").style.borderColor = "black";
	}
			
}


function checkPassword()
{
    if (document.getElementById("password").value == "") 
    {
		document.getElementById("passwordErr").innerHTML = "Password Required";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else if(document.getElementById("password").value.length<8)
	{
		document.getElementById("passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("passwordErr").innerHTML = "";
		document.getElementById("password").style.borderColor = "black";
	}
}


function checkConfirmPassword()
{
    if (document.getElementById("confirm_password").value == "") 
    {
		document.getElementById("confirm_passwordErr").innerHTML = "Password Required";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value.length<8)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value != document.getElementById("password").value)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("confirm_passwordErr").innerHTML = "";
		document.getElementById("confirm_password").style.borderColor = "black";
	}
}


function checkMoblieNumber()
{
    if (document.getElementById("mobile_number").value == "") 
    {
		document.getElementById("mobile_numberErr").innerHTML = "Mobile Number Required";
		document.getElementById("mobile_numberErr").style.color = "red";
		document.getElementById("mobile_number").style.borderColor = "red";
	}
	else if(document.getElementById("mobile_number").value.length<11)
	{
		document.getElementById("mobile_numberErr").innerHTML = "Must Be Atleast 11 Numbers";
		document.getElementById("mobile_numberErr").style.color = "red";
		document.getElementById("mobile_number").style.borderColor = "red";
	}
	else
	{
		document.getElementById("mobile_numberErr").innerHTML = "";
		document.getElementById("mobile_number").style.borderColor = "black";
	}
}


function checkAddress()
{
    if (document.getElementById("address").value == "") 
    {
		document.getElementById("addressErr").innerHTML = "Address Required";
		document.getElementById("addressErr").style.color = "red";
		document.getElementById("address").style.borderColor = "red";
	}	else
	{
		document.getElementById("addressErr").innerHTML = "";
		document.getElementById("address").style.borderColor = "black";
	}
}


function checkdob()
{
    if (document.getElementById("dob").value == "") 
    {
		document.getElementById("dobErr").innerHTML = "Date Of Birth Required";
		document.getElementById("dobErr").style.color = "red";
		document.getElementById("dob").style.borderColor = "red";
	}
	// else if(document.getElementById("dob").value.age<18)
	// {
	// 	document.getElementById("dobErr").innerHTML = "Age must be 18+";
	// 	document.getElementById("dobErr").style.color = "red";
	// 	document.getElementById("dob").style.borderColor = "red";
	// }

	else
	{
		document.getElementById("dobErr").innerHTML = "";
		document.getElementById("dob").style.borderColor = "black";
	}
}


function checkCurrentPassword()
{
    if (document.getElementById("current_password").value == "") 
    {
		document.getElementById("current_passwordErr").innerHTML = "Password Required";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else if(document.getElementById("current_password").value.length<8)
	{
		document.getElementById("current_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("current_passwordErr").innerHTML = "";
		document.getElementById("current_password").style.borderColor = "black";
	}
}


function checkNewPassword()
{
    if (document.getElementById("new_password").value == "") 
    {
		document.getElementById("new_passwordErr").innerHTML = "Password Required";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else if(document.getElementById("new_password").value.length<8)
	{
		document.getElementById("new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	// else if(document.getElementById("new_password").value == document.getElementById("current_password").value)
	// {
	// 	document.getElementById("new_passwordErr").innerHTML = "Can't set the same password";
	// 	document.getElementById("new_passwordErr").style.color = "red";
	// 	document.getElementById("new_password").style.borderColor = "red";
	// }
	else
	{
		document.getElementById("new_passwordErr").innerHTML = "";
		document.getElementById("new_password").style.borderColor = "black";
	}
}


function checkRetypeNewPassword()
{
    if (document.getElementById("retype_new_password").value == "") 
    {
		document.getElementById("retype_new_passwordErr").innerHTML = "Password Required";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value.length<8)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value != document.getElementById("new_password").value)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "";
		document.getElementById("retype_new_password").style.borderColor = "black";
	}
}


function search(id)
{
	if (document.getElementById("searchByID").value == "") 
    {
		document.getElementById("searchByIDErr").innerHTML = "ID Required";
		document.getElementById("searchByIDErr").style.color = "red";
		document.getElementById("searchByID").style.borderColor = "red";
		document.getElementById("search").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller3/search3.php?id="+id, true);
   		xhttp.send();
		document.getElementById("searchByIDErr").innerHTML = "";
		document.getElementById("searchByID").style.borderColor = "black";
		document.getElementById("search").style.borderColor = "black";
	}
}




function searchPayment(id)
{
	if (document.getElementById("searchByID").value == "") 
    {
		document.getElementById("searchByIDErr").innerHTML = "ID Required";
		document.getElementById("searchByIDErr").style.color = "red";
		document.getElementById("searchByID").style.borderColor = "red";
		document.getElementById("search").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller3/searchPayment3.php?id="+id, true);
   		xhttp.send();
		document.getElementById("searchByIDErr").innerHTML = "";
		document.getElementById("searchByID").style.borderColor = "black";
		document.getElementById("search").style.borderColor = "black";
	}
}