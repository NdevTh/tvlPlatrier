<div class="article-row" >
    <?php for($id=1; $id<=6; $id++) { ?>
    <div class="article-column">
        <a href="index.php?controller=articles&action=lire&id=<?php echo $id; ?>">
            <article id="article">
                <h2>Nos réalisations</h2>
                <figure>
                    <img data-src="../images/salle_de_sport.jpg" alt="Plaquiste-Second-Oeuvre" style="width:100%; height:225px;">
                    <figcaption>Salle de Sport</figcaption>
                </figure>
                <p class="article-content">
                    <time datetime="2011-05-08T19:30">May 8, 7:30pm</time>
                    <span class="stars-container stars-90">★★★★★</span>
                    Rating: 4,5 - 56 votes - 12 mins - 152 cal
                </p>
            </article>
        </a>
    </div>
    <?php } ?>
</div>