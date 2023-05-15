<link rel="stylesheet" href="assets/css/login-dk.css">
<div class="login" align = "center">
            <div style = "width:30em; height:30em; border: solid 1px #333333; " align = "left">
                <div style = "background-color:#333333; color:#FFFFFF; padding:3px;">
                    <b>Connexion </b>
                </div>
                <div style = "padding:6em 3em; margin:30px;text-align:center;">
                    <form action = "index.php?controller=account&action=submit_login" method = "post">
                        <label>Identifiant :</label>
                        <input type = "text" name = "username" class = "box"/>
                        
                        <br /><br /> 
                        
                        <label>Mot de passe :</label>
                        <input type = "password" name = "password" class = "box" />
                        
                        <br/><br />
                        
                        <input type = "submit" value = " Login "/>
                        <input type = "reset" value = " Reset "/>
                        
                        <br />
                        
                    </form>
                    <div style = "font-size:11px; color:#cc0000; margin-top:10px">
                        <?php echo $error; ?>
                    </div>
                </div>
            </div>
        </div>