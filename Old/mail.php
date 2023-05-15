<?php include('header.php') ?>


<!DOCTYPE html> 
<head> 
    <title>Send Mail</title>
    <style> 
		.header{
    		height:43px;
    		}

</style>
</head>
<body>
    <!--div class="header">
		
	</div-->
<?php
    include_once 'db_connect.php';

$result = mysqli_query($connection,"SELECT id, first_name, last_name, email, telephone, image_url, job, Description FROM employee WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
            
?>
    <div class="w3-container" style="padding:100px 16px">
        
        <form action="" method="post">
            
            <!--input type="submit" id="envoi" name="envoi" value=" <i class='fa fa-paper-plane'></i>ENVOYER"-->
            <button type="submit" type="submit" id="envoi" name="envoi" class='w3-button w3-light-grey'> <i class='fa fa-paper-plane'></i> ENVOYER</button><br/>
            <label for="nom"> Nom de expéditeur: </label>
            <input value="" type="text" placeholder="Nom du expéditeur(trice)" id="nom" name="nom"> <br/>
            <label for="email"> De : </label>
            <input value="" type="text" placeholder=" expediteur@domain.com" id="emailExpediteur" name="emailExpediteur"><br/>
      
            <label for="email"> à : </label>
            <input value="<?php echo $row['email']; ?>" type="text" placeholder="destinataires@domain.com" id="email" name="email"><br/>
            <label for="email"> cc : </label>
            <input value="<?php echo $row['email']; ?>" type="text" placeholder="autre_destinataires@domain.com" id="emailcc" name="emailcc"><br/>
            
            <label for="sujet"> Sujet : </label>
            <input type="text" placeholder="Subject" id="sujet" name="sujet"><br/>
    
            <label for="message"> Message : </label><br/>
            <textarea style="width:100%; height:500px;" id="message" name="message"></textarea><br/>
        </form>

        
<?php
    /*
    Confige dans php.ini
    ; For Win32 only.
;sendmail_from = me@example.com

; For Unix only.
sendmail_path = /usr/sbin/sendmail -t -i -f care@mydomain.com
    */
if (isset($_POST['envoi'])) {

$destinataire = $_POST['email']; // 'rsopheaktra@gmail.com';
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = $_POST['emailExpediteur']; //'rsopheaktra@gmail.com';
$nomExpediteur = $_POST['nom'];
$copie = $_POST['emailcc']; //'rsopheaktra@gmail.com';
$copie_cachee = $_POST['emailcc']; // 'rsopheaktra@gmail.com';
$objet = $_POST['sujet']; //'Test'; // Objet du message

$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
$headers .= 'From: ' .$nomExpediteur. '<' .$expediteur. '>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
$headers .= 'Cc: '.$copie."\n"; // Copie Cc
$headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc        
$message = $_POST['message']; //'<div style="width: 100%; text-align: center; font-weight: bold">Un Bonjour de Developpez.com !</div>';
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
    //$errorMessage = error_get_last();
    echo "Votre message n'a pas pu être envoyé." .error_get_last();
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);
echo 'I am : ' . `whoami`;
$result = mail('myaddress@mydomain.com','Testing 1 2 3','This is a test.');
echo '<hr>Result was: ' . ( $result === FALSE ? 'FALSE' : 'TRUE') . $result;
echo '<hr>';
echo phpinfo();
}



}



?>

    </div>
    
<script type="text/javascript" >
     	function backTo(){
     	   //alert ("Article id : " + id);
     	   window.location.replace ("/index.php");
     	}
		</script>    
</body> 
</html> 