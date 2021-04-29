// <script src="JS/style.js"></script>

// function wordCount(text) {
//   var text = input.value;
//   var wordCount = 0;
//   for (var i = 0; i <= text.length; i++) 
//   {
//     if (text.charAt(i) == ' ') 
//     {
//       wordCount++;
//     }
//   }
//   return count.innerText = wordCount;
// }
function checkName() 
{//document.getElementById("name").style.backgroundColor = "red";
	if (document.getElementById("name").value == "") 
	{
		document.getElementById("nameErr").innerHTML = "Name Required";
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