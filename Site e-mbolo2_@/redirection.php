
		
<?php
	echo'<script language="JavaScript" type="text/JavaScript">alert("Votre message a bien ete envoye");window.location.href="nous-ecrire.php"</script>';;
	
	
	
	
	$email_destinataire='mouwenlegan@gmail.com';
	
	if(!isset($_POST['envoi'])){
	echo'<h3>'.@$message_erreur_formulaire.'</h3>'."\n";
}
else{
		//Enregistrement du text.
	function Rec($text)
	{		
		@$text=htmlspecialchars(trim(@$text),EN_QUOTES);
		if(1===get_magic_quotes_gpc())
		{
			$text=stripslashes($text);
		}
		$text=nl2br($text);
		return $text;
	};
	//Vérification de la syntaxe d'un email.
	function IsEmail($email)
	{
		$value=preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	}
	//On recupère les données du formulaire.
	$prenom=(isset($_POST['prenom']))    ?Rec($_POST['prenom']) :'';
	$nom=(isset($_POST['nom']))          ?Rec($_POST['nom']) :'';
	$tel=(isset($_POST['tel']))    ?Rec($_POST['tel']) :'';
	$email=(isset($_POST['email']))    ?Rec($_POST['email']) :'';
	$message=(isset($_POST['message']))    ?Rec($_POST['message']) :'';
	
	//Vérication des variables et email.
	if(($prenom!='') && ($nom!='') && ($tel!='') && ($email!='') && ($message!=''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
    		$headers  = 'MIME-Version: 1.0' . "\r\n";
    		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
    				'Reply-To:'.$email. "\r\n" .'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .'Content-Disposition: inline'. "\r\n" .'Content-Transfer-Encoding: 7bit'." \r\n" .'X-Mailer:PHP/'.phpversion();
					// envoyer une copie au visiteur ?
    		if ($copie == 'oui')
    		{
    			$cible = $destinataire.';'.$email;
    		}
    		else
    		{
    			$cible = $destinataire;
    		};
     
    		// Remplacement de certains caractères spéciaux
    		$message = str_replace("&#039;","'",$message);
    		$message = str_replace("&#8217;","'",$message);
    		$message = str_replace("&quot;",'"',$message);
    		$message = str_replace('<br>','',$message);
    		$message = str_replace('<br />','',$message);
    		$message = str_replace("&lt;","<",$message);
    		$message = str_replace("&gt;",">",$message);
    		$message = str_replace("&amp;","&",$message);
     
    		// Envoi du mail
    		$num_emails = 0;
    		$tmp = explode(';', $cible);
    		foreach($tmp as $email_destinataire)
    		{

    			if (mail($email_destinataire, $message, $headers))
    				$num_emails++;
    		}
     
    		if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
    		{
    			echo '<p>'.$message_envoye.'</p>';
    		}
    		else
    		{
    			echo '<p>'.$message_non_envoye.'</p>';
    		};
    	}
    	else
    	{
    		// une des 3 variables (ou plus) est vide ...
    		echo '<p>'.@$message_formulaire_invalide.'<a href="nous-ecrire.php">Retour au formulaire</a></p>'."\n";
    	};
 }; // fin du if (!isset($_POST['envoi']));
 	
?>
	
