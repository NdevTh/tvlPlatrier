<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
 
<link rel="stylesheet" href="assets/css/layout.css">
<div id="dkfixed" class="dkfixed nav-fixed" >
<div class="header">
  <div class="header-left"> <span style="text-size:1.5em">TVL-PLATRIER </span> 
   </br>La confiance tranquille
  </div>
  <div class="header-right">
   <a href="#"> 
     <span class="fa-stack has-badge" data-count="8,888,888">
       <i class="fa fa-circle fa-stack-2x"></i>
       <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
     </span> 
   </a>
    
   <a href="javascript:showDropdown() " >
     <img class="user-image" data-src="assets/images/img_avatar.png" alt="avatar" />
     <div id="myDropdown" class="dropdown-content">
        <a href="index.php?controller=account&action=DataEdit"> Modifier le mot de passe </a>
        <a href="index.php?controller=account&action=logout"> Déconnexion </a>
     </div>
   </a>
  </div>
  <div class="topnav" style="clear:both;margin-left:100px;text-decoratio:none;">
    <a href="#">Paramètres</a>
    <a href="#">Données</a>
    <a href="#">Stocks</a>
    <a href="#">Statistiques</a>
    <a href="#">Trésorerie</a>
    <a href="#">Comptabilité</a>
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function showDropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>    
    
      
  
</header>
  
  <style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 260px;
  overflow: auto;
  right: 0;
  text-align:left;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 60px;
  position: fixed;
  z-index: 1;
  top: 130px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 0;
  white-space: nowrap;
  padding-top:5%;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 20px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
#main {
  top: 0;
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 60px;
  margin-bottom:150px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<link rel="stylesheet" href="assets/css/table.css">
<div id="mySidebar" class="sidenav" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
  <button class="dropdown-btn" onclick="javascript:location.href='index.php?controller=transaction'" > <i class="material-icons">home</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Accueil</span> </button>
  
  <button class="dropdown-btn">  <i class="material-icons">directions_car</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Véhicules
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=vehicles" > &emsp;&nbsp;&nbsp;<i class="material-icons">list</i><span class="icon-text"></span>Liste des véhicule </a>
    <a href="index.php?controller=vehicles&action=ajouter" > &emsp;&nbsp;&nbsp;<i class="material-icons">add_circle_outline</i><span class="icon-text"></span>Ajouter un véhicule </a>
    <a href="index.php?controller=transaction&action=destockage" > &emsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span>Modifier ce véhicule </a>
    <a href="index.php?controller=transaction&action=destockage" > &emsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span>Supprimer ce véhicule </a>
    <a href="index.php?controller=transaction&action=destockage" > &emsp;&nbsp;&nbsp;<i class="material-icons">filter_alt</i><span class="icon-text"></span>Filtre Historique Vo/Vn </a>
    <a href="index.php?controller=transaction&action=destockage" > &emsp;&nbsp;&nbsp;<i class="material-icons">filter_alt</i><span class="icon-text"></span>Filtre Vo/Vn non vendu </a>
  </div>
  
  <button class="dropdown-btn"> <i class="material-icons">person</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Clients 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=clients" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">list</i><span class="icon-text"></span> Liste des clients </a>
    <a href="index.php?controller=clients&action=ajouter" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">person_add_alt_1</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">person_remove_alt_1</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>
  
  <button class="dropdown-btn"> <i class="material-icons">business</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Fournisseurs 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=suppliers" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">list</i><span class="icon-text"></span> Liste des fournisseurs </a>
    <a href="index.php?controller=suppliers&action=ajouter" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add_business</i><span class="icon-text"></span> Ajouter un fournisseur </a>
    <a href="index.php?controller=suppliers&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce fournisseur </a>
    <a href="index.php?controller=suppliers&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce fournisseur </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">inventory</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Articles 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=articles" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">list</i><span class="icon-text"></span> Liste des articles </a>
    <a href="index.php?controller=articles&action=ajouter" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">handyman</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Main d'œuvre 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=workforces" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">list</i><span class="icon-text"></span> Liste de Main d'œuvre </a>
    <a href="index.php?controller=workforces&action=ajouter" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">payment</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Forfaits 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=payments" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">list</i><span class="icon-text"></span> Liste de Main d'œuvre </a>
    <a href="index.php?controller=payments&action=ajouter" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">shopping_cart</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Commandes
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=transaction&action=stockage-state" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">description</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Devis 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=transaction&action=stockage-state" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">description</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Ordre Réparation 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=transaction&action=stockage-state" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">file_copy</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Facture 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=transaction&action=stockage-state" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">preview</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Avoirs 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=transaction&action=stockage-state" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">calendar_today</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Agenda 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=transaction&action=stockage-state" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">event</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Planning Travail
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=transaction&action=stockage-state" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

  <button class="dropdown-btn"> <i class="material-icons">today</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Planning Loc/Prêt 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php?controller=transaction&action=stockage-state" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">add</i><span class="icon-text"></span> Ajouter un client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">edit</i><span class="icon-text"></span> Modifier ce client </a>
    <a href="index.php?controller=supplier&action=evaluation" > &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">delete_outline</i><span class="icon-text"></span> Supprimer ce client </a>
  </div>

</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  
    var elems = document.querySelectorAll(".active");
    [].forEach.call(elems, function(el) {
       el.classList.remove("active");
    });

    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if ( dropdownContent.classList.contains("dropdown-container") ) {
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        dropdownContent.style.display = "block";
    }
    }
  });
}

var mini = true;

        function toggleSidebar() {
            if (mini) {
                console.log("opening sidebar");
                document.getElementById("mySidebar").style.width = "300px";
                document.getElementById("main").style.marginLeft = "300px";
                this.mini = false;
            } else {
                console.log("closing sidebar");
                document.getElementById("mySidebar").style.width = "60px";
                document.getElementById("main").style.marginLeft = "60px";
                
                this.mini = true;
            }
        }

</script>
  
    <div id="main"> 
        <?= $content ?>
    </div>

    
    
<footer >
  <p style="color:blue;"> Created & Designed by <a href="http://www.kaiiros.fr" target="_blank"> Kaiiros.fr  </a> </p>
</footer>

<script type="text/javascript" src="assets/js/layout.js"></script>