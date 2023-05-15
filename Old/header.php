<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	
	<link href="styles/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="styles/mystyle.css">
        <link rel="stylesheet" href="styles/font-awesome.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	
		

	   <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="https://ct-huynh.fr/#home" class="w3-bar-item w3-button w3-wide">CT HUYNH</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i>ACCUEIL</a>
      <a href="articles.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> A PROPOS </a>
      <a href="employees.php" class="w3-bar-item w3-button"><i class="fa fa-group"></i> PERSONNAGES  </a>
      <a href="#MAP" class="w3-bar-item w3-button"><i class="fa fa-globe"></i> CARTE </a>
      <a href="index.php?logout='1'" class="w3-bar-item w3-button"><i class="fa fa-key"></i> DÉCONNEXION </a> 
      </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a class="w3-bar-item w3-button w3-large w3-padding-16">Fermer ×</a>
  <a href="index.php" class="w3-bar-item w3-button">ACCUEIL</a>
  <a href="articles.php" class="w3-bar-item w3-button">A PROPOS</a>
  <a href="employees.php" class="w3-bar-item w3-button">PERSONNAGE</a>
  <a href="https://ct-huynh.fr/#MAP" class="w3-bar-item w3-button">CARTE</a>
  <a href="index.php?logout='1'" class="w3-bar-item w3-button">DÉCONNEXION</a>
</nav>