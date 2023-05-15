<style >
body {
  margin: 0;
  padding: 0;
}

.content {
  display: grid;
  height: 100vh;
  place-items: center;
  padding:10px;
}
fieldset {
    font-family: sans-serif;
    border: 5px solid #1F497D;
    background: #ddd;
    border-radius: 5px;
    padding: 15px;
}

fieldset legend {
    background: #1F497D;
    color: #fff;
    padding: 5px 10px ;
    font-size: 32px;
    border-radius: 5px;
    box-shadow: 0 0 0 5px #ddd;
    margin-left: 20px;
}
            
* {
  box-sizing: border-box;
}

input[type=text], input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color:#fff;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<script>
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
</script>
<div class="content">
    <div class="container-50">
        <form name="myForm" action = "index.php?controller=account&action=submit_login" onsubmit="return validateForm()" method="post">
            <fieldset>
                <legend>Connexion:</legend>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Identifiant </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="username" name="username" placeholder="Votre Identifiant ..">
                    </div>
                </div>
                        
                <div class="row">
                    <div class="col-25">
                        <label for="password">Mot de passe </label>
                    </div>
                    <div class="col-75">
                        <input type="password" id="password" name="password" placeholder="Votre mot de passe ..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="cboDatabase">Base​de données </label>
                    </div>
                    <div class="col-75">
                        <select id="cboDatabase" name="cboDatabase">
                            <option value="stock">Garage</option> 
                        </select>
                    </div>
                </div>
    
                <div class="row" style="text-align:center;">
                    <input type="submit" value="Connexion">
                    <input type="reset" value="Réinitialiser">
                </div>
                <div class="row" style="text-align:center;">
                    <br>
                    <!-- start messages -->
<?php if ( isset($data["message"]) && $data["message"] != "" ) { ?>
<link rel="stylesheet" href="assets/css/alert.css">

<div class="<?php echo $data['message-class']; ?>">
   <span class="closebtn" >&times;</span>
   <?php echo $data["message"]; ?>
</div>
<script type="text/javascript" src="assets/js/alert.js"></script>
<?php } ?>
                </div>
            </fieldset>
        </form>
    </div>
</div>