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
        <meta name="googlebot" content="index, home"" />
        <meta name="googlebot-news" content="index, home" />
        <meta name="slurp" content="index, home" />
        <meta name="msnbot" content="index, home" />

        <!-- Page​ Style-->
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        
        <div class="header">
            <header>
                <a href="home.php" class="active"> <!--span style="text-size:1.5em">TVL-PLATRIER </span> </br><sup>La confiance tranquille</sup --> 
                    <img style="padding:5px;width:64px; height:32px;"src="IMG-20220319-WA0000.jpg" alt="tvl-platrier.fr logo" />
                </a> 
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
                    <a href="home.php" > <img style="padding:5px;width:64px; height:32px;"src="IMG-20220319-WA0000.jpg" alt="tvl-platrier.fr logo" /> </a>
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
                    <a class="logout" href="admin/index.php?controller=account&action=logout" > Déconnexion </a>
                <?php } else { ?>
                    <a class="login" href="login.php" >Connexion</a>
                <?php } ?>
            </nav>
        </div>
        
        <main >
            <!-- main section -->
            <section data-id="about-us" class="section-main">
                <h1 class="section-h2" >Qui sommes-nous ? </h1>
                <figure>
                    <!-- 4. Image alt text -->
                    <img src="images/accueil_4.jpg" alt="Plaquiste-Second-Oeuvre" style="width:100%" >
                    <figcaption>
                        <p class="text-justify"> 
                            &emsp; Plus de 25 ans de métier, TVL-PLATRIER c'est surtout des recommandations, du bouche à l'oreille. 
                            avec son savoir être, l'entreprise renforce son statut de confiance auprès de ses clients.
                            Et avec son savoir faire, TVL-PLATRIER maîtrise parfaitement toutes les techniques de la mise en forme du plâtre, y compris les spécialités rares tels que le staff, mélange de plâtre et de filasse, 
                            mélange de plâtres et de chaux, le stuc et la gypserie qui concerne les travaux effectués directement sur les bâtiments ainsi l'acoustique sans joints.
                        </p>
                    </figcaption>
                </figure>
            </section>
            <!-- aside gloat right of class main -->
            <aside id="aside">
                <h2>Nos prestations</h2>
                <article >
                    <h3>Rénovation</h3>
                    <ul>
                        <li>Plâtrerie</li>
                        <li>Isolation</li>
                        <li>Plafonds</li>
                        <li>Correction acoustique</li>
                        <li>Protection incendie</li>
                    </ul>
                </article>
                
                <article >
                    <h3>Décoration</h3>
                    <ul>
                        <li> Staff</li>
                        <li> Stuc</li>
                        <li> Vente de décor en staff et Stuc</li>
                        <li> Gypserie</li>
                    </ul>
                </article>
                
                <article >
                    <h3>Démolition</h3>
                    <ul>
                        <li> Mûr </li>
                        <li> Cloisson</li>
                        <li> Pièce </li>
        
                    </ul>
                </article>
            </aside>
            
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
            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=23%20rue%20des%20ebenistes%20%2067170%20brumath&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">google map link html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
        </main>
        <footer style="width:100%;">
            <p>Author: <a href="www.kaiiros.fr">www.kaiiros.fr</a></p>
            <p>Contact: <a href="mailto:contact@tvl-platrier.fr">contact@tvl-platrier.fr</a></p>
        </footer>
                            <script >
            alert(document.getElementById('id').scrollIntoView());
           
                </script>
                
        <script type="text/javascript" src="js/default.js"></script>

    </body>
</html>