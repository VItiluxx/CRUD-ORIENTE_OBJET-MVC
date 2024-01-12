<?php
    try{
        $serveur = "127.0.0.1";
        $bd = "faletech";
        $utilisateur = "root";
        $mdp = "";
        $encodage = "utf8";

        $connexionBd = new PDO ("mysql:host=$serveur;dbname=$bd; charset=$encodage", "$utilisateur", "$mdp", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $connexionBd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch(Exception $e)
    {
        $erreur =$e->getMessage();
        echo "ERREUR : ".$erreur;
    }
?> 
