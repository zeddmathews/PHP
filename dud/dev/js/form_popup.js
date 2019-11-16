function if_empty() {
	if (document.getElementById('').value == "" ||document.getElementById('') == "") {
		alert('Fill all fields');
	}
	else {
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