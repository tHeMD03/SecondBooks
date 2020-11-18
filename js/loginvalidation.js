function emailValidate(){
	email = document.getElementById("email").value;
	reg = /^[a-zA-Z0-9.]*@gmail.com$/

	if (email == null || email == "") {
	}else{
		if (!reg.test(email)){
			document.getElementById("emailerror").style.color = "red";
			document.getElementById("emailerror").innerHTML = "Enter Valid Email !!";
		}else{
			document.getElementById("emailerror").style.color = "green";
			document.getElementById("emailerror").innerHTML = "Valid Email :)";
		}
	}	
}

function passValidate(){
	password = document.getElementById("password").value;
	reg = /[a-zA-Z0-9]{6,20}/
	if (password == null || password == "") {
	}else{
		if (!reg.test(password)) {
			document.getElementById("passerror").style.color = "red";
			document.getElementById("passerror").innerHTML = "Enter Valid Password !!";
		}else{
			document.getElementById("passerror").style.color = "green";
			document.getElementById("passerror").innerHTML = "Good to GO :)";
		}
	}	
}