function validateMessage() {
    if (document.contact_form.name.value == "") {
        alert("Please give your name!");
        document.contact_form.name.focus();
        return false;
    }
    if (document.contact_form.email.value == "") {
        alert("Please give an email!");
        document.contact_form.email.focus();
        return false;
    }
	var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
	if(mailFormat.test(document.contact_form.email.value) == false) {
		alert("You have entered an invalid email address!");
		document.contact_form.email.focus();
		return false;
	}  
    if (document.contact_form.message.value == "") {
        alert("Please write something in the message!");
        document.contact_form.message.focus();
        return false;
    }
}
function validateLogin() {
    if (document.login_form.username.value == "") {
        alert("Please give an username!");
        document.login_form.username.focus();
        return false;
    }
    if (document.login_form.password.value == "") {
        alert("Please give a password!");
        document.login_form.password.focus();
        return false;
    }
	if (document.login_form.password.value.length < 6) {
        alert("Password should contain at least 6 characters!");
        document.login_form.password.focus();
        return false;
    }
}