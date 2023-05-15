<?php session_start(); ?>
<?php $_SESSION["folder"] = "home"; $_SESSION["currentURL"] = basename($_SERVER['SCRIPT_FILENAME']) . $_SERVER['QUERY_STRING']; ?>

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
        
    </head>
    <body>
        
        <div class="header">
            <header>
                <a href="home.php" class="active"><span style="text-size:1.5em">TVL-PLATRIER </span> </br><sup>La confiance tranquille</sup></a> 
                <div class="nav-right">
                    <?php if (isset( $_SESSION["username"]) && !empty( $_SESSION["username"]) ) { ?>
                         <a href="login.php" > <?php echo $_SESSION["username"]; ?> </a>
                         <a class="login" href="admin/index.php?controller=account&action=logout" > Déconnexion </a>
                    <?php } else { ?>
                         <a href="login.php" >Connexion</a>
                    <?php } ?>
                </div>
            </header>
            <nav id="myNavLeft" class="nav-left" >
                <!-- div id="myNavLeft" class="nav-left" -->
                    <a href="home.php" ><span style="text-size:1.5em">TVL-PLATRIER </span> </br><sup>La confiance tranquille</sup></a>
                    <a id="about-us" href="home.php">Qui sommes-nous ? </a>
                    <a href="notre-catalogue.php">Notre catalogue</a>
                    <a href="contact.html">Nous Contacter</a>
                    <a href="javascript:void(0);" class="icon" onclick="openNav()">
                        <!--i class="fa fa-bars"></i-->
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                <!-- /div -->
                <?php if (isset( $_SESSION["username"]) && !empty( $_SESSION["username"]) ) { ?>
                    <a class="login" href="login.php" > <?php echo $_SESSION["username"]; ?> </a>
                    <a class="login" href="admin/index.php?controller=account&action=logout" > Déconnexion </a>
                <?php } else { ?>
                    <a class="login" href="login.php" >Connexion</a>
                <?php } ?>
            </nav>
        </div>
        
        <main >
            
            <div class="clear"></div>
            
            <h2 class="section-h2" >Nos réalisations</h2>

            <div class="article-row" >
                
                <div class="article-column">
                    <article id="article">
                        <figure>
                            <img src="images/salle_de_sport.jpg" alt="Plaquiste-Second-Oeuvre" style="width:100%; height:225px;">
                            <figcaption>Salle de Sport</figcaption>
                        </figure>
                        <p class="article-content">
                            <header>
                                <h2>Nos réalisations</h2>
                            </header>
                        
                            <time datetime="2011-05-08T19:30">May 8, 7:30pm</time>
                            <span class="stars-container stars-90">★★★★★</span>
                            Rating: 4,5 - 56 votes - 12 mins - 152 cal
                        </p>
                    </article>
                </div>
                
                <div class="article-column">
                    <article id="article">
                        <figure>
                            <img src="images/decors_3.jpg" alt="Plaquiste-Second-Oeuvre" style="width:100%; height:225px;">
                            <figcaption>Salle de Sport</figcaption>
                        </figure>
                        <p class="article-content">
                            <header>
                                <h2>Nos réalisations</h2>
                            </header>
                        
                            <time datetime="2011-05-08T19:30">May 8, 7:30pm</time>
                            <span class="stars-container stars-90">★★★★★</span>
                            Rating: 4,5 - 56 votes - 12 mins - 152 cal
                        </p>
                    </article>
                </div>
                
                <div class="article-column">
                    <article id="article">
                        <figure>
                            <img src="images/demolition.jpg" alt="Plaquiste-Second-Oeuvre" style="width:100%; height:225px;">
                            <figcaption>Salle de Sport</figcaption>
                        </figure>
                        <p class="article-content">
                            <header>
                                <h2>Nos réalisations</h2>
                            </header>
                        
                            <time datetime="2011-05-08T19:30">May 8, 7:30pm</time>
                            <span class="stars-container stars-90">★★★★★</span>
                            Rating: 4,5 - 56 votes - 12 mins - 152 cal
                        </p>
                    </article>
                </div>
                
            </div>
            <div class="article-row" >
                
                <div class="article-column">
                    <article id="article">
                        <figure>
                            <img src="images/salle_de_sport.jpg" alt="Plaquiste-Second-Oeuvre" style="width:100%; height:225px;">
                            <figcaption>Salle de Sport</figcaption>
                        </figure>
                        <p class="article-content">
                            <header>
                                <h2>Nos réalisations</h2>
                            </header>
                        
                            <time datetime="2011-05-08T19:30">May 8, 7:30pm</time>
                            <span class="stars-container stars-90">★★★★★</span>
                            Rating: 4,5 - 56 votes - 12 mins - 152 cal
                        </p>
                    </article>
                </div>
                
                <div class="article-column">
                    <article id="article">
                        <figure>
                            <img src="images/decors_3.jpg" alt="Plaquiste-Second-Oeuvre" style="width:100%; height:225px;">
                            <figcaption>Salle de Sport</figcaption>
                        </figure>
                        <p class="article-content">
                            <header>
                                <h2>Nos réalisations</h2>
                            </header>
                        
                            <time datetime="2011-05-08T19:30">May 8, 7:30pm</time>
                            <span class="stars-container stars-90">★★★★★</span>
                            Rating: 4,5 - 56 votes - 12 mins - 152 cal
                        </p>
                    </article>
                </div>
                
                <div class="article-column">
                    <article id="article">
                        <figure>
                            <img src="images/salle_de_sport.jpg" alt="Plaquiste-Second-Oeuvre" style="width:100%; height:225px;">
                            <figcaption>Salle de Sport</figcaption>
                        </figure>
                        <p class="article-content">
                            <header>
                                <h2>Nos réalisations</h2>
                            </header>
                        
                            <time datetime="2011-05-08T19:30">May 8, 7:30pm</time>
                            <span class="stars-container stars-90">★★★★★</span>
                            Rating: 4,5 - 56 votes - 12 mins - 152 cal
                        </p>
                    </article>
                </div>
                
            </div> 
            
        </main>
        <footer>
            <p>Author: <a href="www.kaiiros.fr">www.kaiiros.fr</a></p>
            <p>Contact: <a href="mailto:contact@tvl-platrier.fr">contact@tvl-platrier.fr</a></p>
        </footer>
                            <script >
            alert(document.getElementById('id').scrollIntoView());
           
                </script>
                
        <script type="text/javascript" src="js/default.js"></script>

    </body>
</html>