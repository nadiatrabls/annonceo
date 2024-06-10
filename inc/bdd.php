<?php
$host='localhost';
$bdname='annonceo';
$logBdd='root';
$mdpBdd='';

try {
    // exécuter la connexion à la base de donnée 
    $bdd=new PDO('mysql:host='.$host.';dbname='.$bdname,$logBdd,$mdpBdd); //pour rendre maliable 
} catch (\PDOException $erreur) {
    // si il ya une erreur de connexion pour notre base de données on renvoie le message d'erreur
   echo $erreur->getMessage();
  // exit(); affiche un message et termine le script courant
  // die();  termine le script courant
}