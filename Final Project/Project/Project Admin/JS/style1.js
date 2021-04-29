// <script src="JS/style.js"></script>

function checkName() 
{
	if (document.getElementById("name").value == "") 
	{
		document.getElementById("nameErr").innerHTML = "(Name Required)";
		document.getElementById("nameErr").style.color = "red";
		document.getElementById("name").style.borderColor = "red";
	}
	// else if (wordCount(document.getElementById("name").value)<2)
	
	// 	document.getElementById("nameErr").innerHTML = "Minimum Two Words";
	// 	document.getElementById("nameErr").style.color = "red";
	// 	document.getElementById("name").style.borderColor = "red";
	// }
	else
	{
		document.getElementById("nameErr").innerHTML = "";
		document.getElementById("name").style.borderColor = "green";
	}
			
}

function checkUserName()
{
	if (document.getElementById("user_name").value == "") 
	{
		document.getElementById("user_nameErr").innerHTML = "(User Name Required)";
		document.getElementById("user_nameErr").style.color = "red";
		document.getElementById("user_name").style.borderColor = "red";
	}
	else
	{
		document.getElementById("user_nameErr").innerHTML = "";
		document.getElementById("user_name").style.borderColor = "green";
	}		
}

function checkEmail()
{
    if (document.getElementById("email").value == "") 
    {
	  	document.getElementById("emailErr").innerHTML = "(Email Required)";
		document.getElementById("emailErr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else if(document.form.email.value.indexOf("@")<1||document.form.email.value.indexOf("@")+2>document.form.email.value.lastIndexOf(".")||document.form.email.value.lastIndexOf(".")+2>=document.form.email.value.length)
	{
		document.getElementById("emailErr").innerHTML = "(Input Correct Email Address)";
		document.getElementById("emailErr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else
	{
		document.getElementById("emailErr").innerHTML = "";
		document.getElementById("email").style.borderColor = "green";
	}
}

function checkPassword()
{
    if (document.getElementById("password").value == "") 
    {
		document.getElementById("passwordErr").innerHTML = "(Password Required)";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else if(document.getElementById("password").value.length<8)
	{
		document.getElementById("passwordErr").innerHTML = "(Minimum 8 Characters)";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("passwordErr").innerHTML = "";
		document.getElementById("password").style.borderColor = "green";
	}
}


function checkConfirmPassword()
{
    if (document.getElementById("confirm_password").value == "") 
    {
		document.getElementById("confirm_passwordErr").innerHTML = "(Password Required)";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value.length<8)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "(Minimum 8 Characters)";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value != document.getElementById("password").value)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "(Password Dosen't Match)";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("confirm_passwordErr").innerHTML = "";
		document.getElementById("confirm_password").style.borderColor = "green";
	}
}


function checkMoblieNumber()
{
    if (document.getElementById("mobile").value == "") 
    {
		document.getElementById("mobileErr").innerHTML = "(Mobile Number Required)";
		document.getElementById("mobileErr").style.color = "red";
		document.getElementById("mobile").style.borderColor = "red";
	}
	else if(document.getElementById("mobile").value.length<11)
	{
		document.getElementById("mobileErr").innerHTML = "(Unknown Format)";
		document.getElementById("mobileErr").style.color = "red";
		document.getElementById("mobile").style.borderColor = "red";
	}
	else
	{
		document.getElementById("mobileErr").innerHTML = "";
		document.getElementById("mobile").style.borderColor = "green";
	}
}

function checkMoblieNumber1()
{
    if (document.getElementById("mobile_number").value == "") 
    {
		document.getElementById("mobile_numberErr").innerHTML = "(Mobile Number Required)";
		document.getElementById("mobile_numberErr").style.color = "red";
		document.getElementById("mobile_number").style.borderColor = "red";
	}
	else if(document.getElementById("mobile_number").value.length<11)
	{
		document.getElementById("mobile_numberErr").innerHTML = "(Unknown Format)";
		document.getElementById("mobile_numberErr").style.color = "red";
		document.getElementById("mobile_number").style.borderColor = "red";
	}
	else
	{
		document.getElementById("mobile_numberErr").innerHTML = "";
		document.getElementById("mobile_number").style.borderColor = "green";
	}
}

function checkAddress()
{
    if (document.getElementById("address").value == "") 
    {
		document.getElementById("addressErr").innerHTML = "(Address Required)";
		document.getElementById("addressErr").style.color = "red";
		document.getElementById("address").style.borderColor = "red";
	}	
	else
	{
		document.getElementById("addressErr").innerHTML = "";
		document.getElementById("address").style.borderColor = "green";
	}
}


function checkdob()
{
    if (document.getElementById("dob").value == "") 
    {
		document.getElementById("dobErr").innerHTML = "(Birthdate Required)";
		document.getElementById("dobErr").style.color = "red";
		document.getElementById("dob").style.borderColor = "red";
	}
	else
	{
		document.getElementById("dobErr").innerHTML = "";
		document.getElementById("dob").style.borderColor = "green";
	}
}


function checkCurrentPassword()
{
    if (document.getElementById("current_password").value == "") 
    {
		document.getElementById("current_passwordErr").innerHTML = "(Password Required)";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else if(document.getElementById("current_password").value.length<8)
	{
		document.getElementById("current_passwordErr").innerHTML = "(Minimum 8 Characters)";
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
		document.getElementById("new_passwordErr").innerHTML = "(Password Required)";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else if(document.getElementById("new_password").value.length<8)
	{
		document.getElementById("new_passwordErr").innerHTML = "(Minimum 8 Characters)";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("new_passwordErr").innerHTML = "";
		document.getElementById("new_password").style.borderColor = "green";
	}
}


function checkRetypeNewPassword()
{
    if (document.getElementById("retype_new_password").value == "") 
    {
		document.getElementById("retype_new_passwordErr").innerHTML = "(Password Required)";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value.length<8)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "(Minimum 8 Characters)";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value != document.getElementById("new_password").value)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "(Password Dosen't Match)";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "";
		document.getElementById("retype_new_password").style.borderColor = "green";
	}
}


/*
function checkCurrentPassword(password)
{
	if (document.getElementById("current_password").value == "") 
    {
		document.getElementById("current_passwordErr").innerHTML = "ID Required";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("searchByID").style.borderColor = "red";
		document.getElementById("").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/search.php?id="+id, true);
   		xhttp.send();
		document.getElementById("searchByIDErr").innerHTML = "";
		document.getElementById("searchByID").style.borderColor = "black";
		document.getElementById("search").style.borderColor = "black";
	}
} */

function searchName(name)
{
	document.getElementById("txtHint1").innerHTML = "";
	if (document.getElementById("SearchByName").value == "") 
    {
    	document.getElementById("txtHint").innerHTML = "";
		document.getElementById("SearchByNameErr").innerHTML = "";
		document.getElementById("SearchByNameErr").style.color = "red";
		document.getElementById("SearchByName").style.borderColor = "";
		//document.getElementById("search").style.borderColor = "red";
	}
	else 
	{
		
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/SearchName1.php?name="+name, true);
   		xhttp.send();
		document.getElementById("SearchByNameErr").innerHTML = "";
		document.getElementById("SearchByName").style.borderColor = "green";
		//document.getElementById("search").style.borderColor = "black";
	}
}

function showData(id)
{//document.getElementById("searchByID").style.backgroundColor = "red";
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() 
  	{
    if (this.readyState == 4 && this.status == 200) 
    	{document.getElementById("txtHint1").innerHTML = this.responseText;}
	};
    xhttp.open("GET", "Controller/SearchId10.php?id="+id, true);
   	xhttp.send();
}

function showData1(id)
{//document.getElementById("searchByID").style.backgroundColor = "red";
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() 
  	{
    if (this.readyState == 4 && this.status == 200) 
    	{document.getElementById("txtHint1").innerHTML = this.responseText;}
	};
    xhttp.open("GET", "Controller/SearchId11.php?id="+id, true);
   	xhttp.send();
}

function showData2(id)
{//document.getElementById("searchByID").style.backgroundColor = "red";
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() 
  	{
    if (this.readyState == 4 && this.status == 200) 
    	{document.getElementById("txtHint1").innerHTML = this.responseText;}
	};
    xhttp.open("GET", "Controller/SearchId12.php?id="+id, true);
   	xhttp.send();
}

function showData3(id)
{//document.getElementById("searchByID").style.backgroundColor = "red";
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() 
  	{
    if (this.readyState == 4 && this.status == 200) 
    	{document.getElementById("txtHint1").innerHTML = this.responseText;}
	};
    xhttp.open("GET", "Controller/SearchId13.php?id="+id, true);
   	xhttp.send();
}
