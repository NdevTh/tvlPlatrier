<style >

.txt-center { text-align: center; } 
.hide { display: none; } 
.clear { float: none; clear: both; } 
.rating { width: 90px; unicode-bidi: bidi-override; direction: rtl; text-align: center; position: relative; }
.rating > label { float: right; display: inline; padding: 0; margin: 0; position: relative; width: 1.1em; cursor: pointer; color: #000; } 
.rating > label:hover, .rating > label:hover ~ label, .rating > input.radio-btn:checked ~ label { color: transparent; } 
.rating > label:hover:before, .rating > label:hover ~ label:before, .rating > input.radio-btn:checked ~ label:before, .rating > input.radio-btn:checked ~ label:before { content: "\2605"; position: absolute; left: 0; color: #FFD700; } 
.container-form {
  border-radius: 5px;
  background-color: #fff;
  padding: 20px;
}
/* Clear floats after the columns */
.rowForm:after {
  content: "";
  display: table;
  clear: both;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 16px 5px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.imgUser {
  border-radius: 50%;
  width:25px;
  height:25px;
  margin:5px;
  float: left;
}
.commentaire {
  padding-left:25px;           
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75 {
    width: 90%;
    margin-top: 0;
  }
  input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


        </style>
            
            <article id="article">
                <div >
                    <h2>Nos réalisations</h2>
                    <img src="../images/plaquiste-second-oeuvre.jpg" class="imgUser" />
                    <p class="commentaire">
                        <strong>Rédigé : Sros</strong>
                        <br/>
                        <time datetime="2011-05-08T19:30">May 8, 7:30pm</time>
                        <span class="stars-container stars-90">★★★★★</span>
                            Rating: 4,5
                    
                    </p> 
                </div>
                <div id="ArticleBody" class="text-justify" >
                     
                            &emsp; Plus de 25 ans de métier, TVL-PLATRIER c'est surtout des recommandations, du bouche à l'oreille. 
                            avec son savoir être, l'entreprise renforce son statut de confiance auprès de ses clients.
                            Et avec son savoir faire, TVL-PLATRIER maîtrise parfaitement toutes les techniques de la mise en forme du plâtre, y compris les spécialités rares tels que le staff, mélange de plâtre et de filasse, 
                            mélange de plâtres et de chaux, le stuc et la gypserie qui concerne les travaux effectués directement sur les bâtiments ainsi l'acoustique sans joints.
                        
                </div>
            </article>
            
            
            <div id="comment" class="container-form">
                <strong >2 </strong> Commentaires : 
                <div class="commentaire">
                    <img src="../images/plaquiste-second-oeuvre.jpg" class="imgUser" />
                    <p>
                        <strong>Sros</strong>
                        <br/>
                        <time datetime="2011-05-08T19:30">May 8, 7:30pm</time>
                        <span class="stars-container stars-90">★★★★★</span>
                            Rating: 4,5
                    
                    </p>
                    <p>
                        C'était la meilleur société.
                    </p>
                </div> 
                <form method="POST" action="index.php?controller=articles&action=commentaire">
                    
                    <div class="rowForm commentaire">
                        <img src="../images/plaquiste-second-oeuvre.jpg" class="imgUser" />

                        <div class="col-25">
                            <label for="subject">Ratings: </label>
                        </div>
                        <div class="col-75">
                            <div class="rating">
                                <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                                <label for="star5">☆</label>
                                <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                                <label for="star4">☆</label>
                                <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                                <label for="star3">☆</label>
                                <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                                <label for="star2">☆</label>
                                <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                                <label for="star1">☆</label>
                                <div class="clear"></div>
                            </div>
                            
                        </div>
                    </div>
                
                    <div class="rowForm">
                        <div class="col-25">
                            <label for="subject"> </label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        </div>
                    </div>
                    
                    <div class="rowForm">
                        <input type="submit" value="Commentaire">
                    </div>
                </form>
            </div>