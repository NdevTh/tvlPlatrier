function validateForm() {
  let txtUsername = document.forms["myForm"]["username"].value;
  if (txtUsername == "") {
    alert("Veuillez-vous remplir le champs de l'identifiant");
    return false;
  }

  let txtPassword = document.forms["myForm"]["password"].value;
  if ( txtPassword == "") {
    alert("Veuillez-vous remplir le champs du mot de passe...");
    return false;
  }
}

