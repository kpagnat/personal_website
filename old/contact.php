<?php $page_title = "Me contacter"; include "header.php"; ?>

<div class="post">
    <h3 class="title">Me contacter</h3>
    <div class="entry">

<p>
Vous pouvez me contacter via mon adresse mail : <b><a href="mailto:kevin.pagnat(at)gmail.com" title="me contacter">kevin.pagnat(at)gmail.com</a></b><br />
Ou utiliser le formulaire ci-dessous.

</p>


<?php
// Envoi du mail
if( !empty($_POST["test_envoi"]) && $_POST["test_envoi"]=="1"){
	
	$email = $_POST["email"];
	$destinataire = htmlentities(preg_replace('!^([_.a-zA-Z0-9-]+)_at_([_.a-zA-Z0-9-]+\.[a-z]{2,4})$!', '$1@$2', 'kevin.pagnat_at_gmail.com' ));
	$sujet        = "[kevinpagnat.fr] Contact";
	$texte        = $_POST["firstname"]." ".$_POST["name"]." écrit :<br /><br />".stripslashes(nl2br(htmlentities($_POST["texte_contact"])))."<br /><br />Contact : ".$email;
	$headers      = "Content-type:text/html\nFrom:kevinpagnat.fr\r\n";
			
	if(mail($destinataire, $sujet, $texte, $headers)){
?>
	<p class="mail_ok">
    	Votre message a bien été envoyé. Merci.
    </p>
<?php
	}
}

?>
        
<form action="contact.php" id="contact_form" method="post">
	<fieldset>
		<legend>Informations sur vous</legend>
        <p>
            <label for="form_name">Nom : </label>
            <input type="text" id="form_name" name="name" />
        </p>
        <p>
            <label for="form_firstname">Prénom : </label>
            <input type="text" id="form_firstname" name="firstname" />
        </p>
        <p>
            <label for="form_email">E-mail : </label>
            <input type="text" id="form_email" name="email" />
        </p>
	</fieldset>
	<fieldset>
    	<legend>Votre message</legend>
        <p>
            <label for="description">Texte :</label><br />
			<textarea rows="5" cols="55" name="texte_contact" id="description"></textarea>
        </p>
		
	</fieldset>

    <p>
    	<input type="hidden" name="test_envoi" value="1" />
        <input type="submit" name="submit" value="Envoyer" />
    </p>
</form>
   
   
    </div>
</div>







<?php include "bottom.php"; ?>