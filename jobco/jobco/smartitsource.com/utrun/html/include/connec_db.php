<?php
try {
$db=new PDO('mysql:host=localhost;dbname=jobconnect','root','');
} catch (PDOExecption $e) {
    die('Erreur:'.$e->getMesssage());
}













?>