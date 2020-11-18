function EmailValidate(){
	var reg = /^[a-zA-Z0-9.]*@gmail.com$/;
	var email = document.getElementById("email").value;

	if (email == null || email == "") {
		window.alert("Enter Valid Email !!");
	}else{
		if (!reg.test(email)){
			window.alert("Enter Valid Email !!");
		}
	}	
}

function checkFname(){
	var reg = /[a-zA-Z]/;
	var name = document.getElementById("fname").value;
	if (!reg.test(name)){
		window.alert("Enter Valid First Name !!");
	}
}

function checkLname(){
	var reg = /[a-zA-Z0-9]/;
	var lname = document.getElementById("lname").value;
	if (!reg.test(lname)){
		window.alert("Enter Valid Last Name !!");
	}
}

function phoneValidation(){
	var phone = document.getElementById("phone").value;
	var reg = /\d{10}/;

	if (!reg.test(phone)) {
		window.alert("Enter Valid Phone Number !!");
	}
}

function passValidate(){
	var password = document.getElementsByClassName("password");
	var reg = /[a-zA-Z0-9@#$%&\s]{6,20}/;
	var i = 0;

	if (!reg.test(password[0].value)) {
		window.alert("Enter Valid Password !!");
	}
	if (!reg.test(password[1].value)) {
		window.alert("Enter Valid Confirm Password !!");
	}	
	if (password[0].value != password[1].value && password[0].value != "" && password[1].value != "") {
				window.alert("Passwords doesn't match !!");
	}
}

function cityValidate(){
	var city = document.getElementById("city").value;
	var reg = /^[a-zA-Z]/;

	if (!reg.test(city)) {
		window.alert("Enter Valid City Name !!");
	}
}

function pincodeValidate(){
	var pincode = document.getElementById("pincode").value;
	var reg = /\d{6}/;

	if (!reg.test(pincode)) {
		window.alert("Entre Valid Pincode !!");
	}
}