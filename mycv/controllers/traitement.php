<?php
session_start();
    


/*die();Pour arreter l'exécution du script */
/*Stockage des données */
$email    = $_POST['email'];
$password = $_POST['password'];
$submit   = $_POST['submit'];


/*Vérification de l'arrivée des données */
if(isset($submit) && isset($email) && isset($password)) {
   
    /*Vérification de la nature des données  */
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        include_once('data.php');
       
        /*Parcourir le tableau des apprenants */
        foreach ($apprenants as $key => $apprenant) {
            /*Vérification de l'email et du mot de passe */
            if ($email == $apprenant['email'] && $password == $apprenant['password']) {

                //Rédirection vers le site.
                header('Location:../views/vue.php');
                exit();
            } 
        }
        //Affichage du message d'erreur.

        $_SESSION['erreur_msg']   = "Votre adresse email ou votre mot de passe est incorrect.";
        $_SESSION['erreur_email'] = $email;
        header('Location:../index.php');
        exit();

    }else {
        $_SESSION['erreur_msg']   = "Oups! Votre adresse email n'est pas correcte.";
        header('Location:../index.php');
        exit();
    }
   
}else {
    echo "Veuillez rentrer votre adresse email et votre mot de passe.";
}

?>
   