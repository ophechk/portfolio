<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$serveurname;dbname=$portfolio", $username, $password); 
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connexion réussie !"

} catch (PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}

if(isset($_POST['envoyer'])){
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
            "message" => $message,
        )
    );
    
    echo "Message envoyé !";
}

?>