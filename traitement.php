<?php

$login = "root";
$mdp = "";
$bd = "portfolio";
$serveur = "localhost";

try {
    $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    //echo "Connexion réussie !"

} catch (PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}

if(isset($_POST['ok'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
   
    $requete = $bdd->prepare("INSERT INTO formulaire VALUES (0, :name, :email, :sujet, :message)");
    $requete->execute(
        array(
            "name" => $name,
            "email" => $email,
            "sujet" => $sujet,
            "message" => $message
        )
    );
    echo "Message envoyé !";
}

?>