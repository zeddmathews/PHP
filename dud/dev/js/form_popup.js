function if_empty() {
	if (document.getElementById('login-email').value == "" || document.getElementById('login-password') == "") {
		alert('Fill all fields');
	}
	else if (document.getElementById('login-email').value != "" && document.getElementById('login-password').value != "") {
		document.getElementById('login-form').submit();
		alert('Login Successful');
	}
}

function show_log() {
	document.getElementById('pop').style.display = "block";
}

function hide_log() {
	document.getElementById('pop').style.display = "none";
}

function reg_empty() {
	if (document.getElementById('reg-name').value == "" || document.getElementById('reg-lname').value == "" || document.getElementById('reg-uname').value == "" || document.getElementById('reg-email').value == "" || document.getElementById('reg-p1').value == "" || document.getElementById('reg-p2').value == "") {
		alert('Fill all fields');
	}
	else if (document.getElementById('reg-name').value != "" && document.getElementById('reg-lname').value != "" && document.getElementById('reg-uname').value != "" && document.getElementById('reg-email').value != "" && document.getElementById('reg-p1').value != "" && document.getElementById('reg-p2').value != "") {
		alert('Register Successful');
	}
}

function show_reg() {
	document.getElementById('pop2').style.display = "block";
}

function hide_reg() {
	document.getElementById('pop2').style.display = "none";
}