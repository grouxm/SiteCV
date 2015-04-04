function validateForm() {
    var fname = document.forms["login"]["firstName"].value;
	var lname = document.forms["login"]["name"].value;
	var dbirth = document.forms["login"]["dateOfBirth"].value;
	var ml = document.forms["login"]["email"].value;
	var pw1 = document.forms["login"]["password"].value;
	var pw2 = document.forms["login"]["passwordConfirm"].value;
	var re = /^\d{4}\-\d{1,2}\-\d{1,2}$/;
	var re2 = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	
    if (lname == null || lname == "") {
        alert("Le nom de famille est incorrect");
        return false;
    } else if (fname == null || fname == "") {
		alert("Le prénom est incorrect");
        return false;
    } else if (!dbirth.match(re)) {
		alert("Mauvais format de date de naissance");
        return false;
    } else if (!ml.match(re2)) {
		alert("Mauvais format d'email");
        return false;
    } else if (pw1 == null || pw1 == "") {
		alert("Veuillez choisir un mot de passe");
        return false;
    } else if (pw2 == null || pw2 == "") {
		alert("Veuillez confirmer votre mot de passe");
        return false;
    } else if (pw1 != pw2) {
		alert("Le mot de passe n'est pas le même");
        return false;
    } else if (pw1.length <= 8) {
		alert("Le mot de passe doit faire au moins 7 caractères");
        return false;
    }
}