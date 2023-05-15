<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 1. Title tag: -->
        <title>TVL-PLATRIER</title>
        <!-- 2. Meta description tag -->
        <meta name="description" content="tvl plâtrier est une société spécialisée en Alsace ">
        <!-- 8. Canonical tag -->
        <link rel="canonical" href="https://www.tvl-platrier.fr">
        <link rel="alternate" hreflang="en" href="https://www.tvl-platrier.fr">
        <link rel="alternate" hreflang="fr" href="https://www.tvl-platrier.fr/fr">

        <!-- 7. Meta robots tag -->
        <meta name="robots" content="index, home" />
        <meta name="googlebot" content="noindex" />
        <meta name="googlebot-news" content="noindex" />
        <meta name="slurp" content="noindex" />
        <meta name="msnbot" content="noindex" />

        <!-- Page​ Style-->
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/login.css">
        
    </head>
    <body>
        <div class="header">
            <header>
                <a href="home.php" class="active"><span style="text-size:1.5em">TVL-PLATRIER </span> </br><sup>La confiance tranquille</sup></a> 
                <div class="nav-right">
                    <a href="login.php" >Connexion</a> 
                </div>
            </header>
            <nav id="myNavLeft" class="nav-left" >
                <!-- div id="myNavLeft" class="nav-left" -->
                    <a href="home.php" ><span style="text-size:1.5em">TVL-PLATRIER </span> </br><sup>La confiance tranquille</sup></a>
                    <a id="about-us" href="home.php">Qui sommes-nous ? </a>
                    <a href="notre-catalogue.html">Notre catalogue</a>
                    <a href="contact.html">Nous Contacter</a>
                    <a href="javascript:void(0);" class="icon" onclick="openNav()">
                        <!--i class="fa fa-bars"></i-->
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                <!-- /div -->
                <a class="login" href="login.php" >Connexion</a>
            </nav>
        </div>
    
        <main >
            <div class="content">
                <div class="container">
                    <form name="myForm" action = "blog/index.php?controller=account&action=submit_login" onsubmit="return validateForm()" method="post">
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
                            
                            <div class="row" style="text-align:center;">
                                <input type="submit" value="Connexion">
                                <input type="reset" value="Réinitialiser">
                            </div>
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </main>
    
    <script type="text/javascript" src="js/default.js"></script>
    <script type="text/javascript" src="js/login.js"></script>

    </body>
</html>
