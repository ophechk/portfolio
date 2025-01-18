<?php

$name = $_POST["name"];
$email = $_POST["email"];
$sujet = $_POST["sujet"];
$message = $_POST["message"];

if ( ! $email) {
    die("Vous devez saisir votre email");
}

$host = "localhost";
$dbname = "portfolio";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname :$host, username: $username, password: $password, database : $dbname);

if (mysqli_connect_error()) {
    die("Erreur de connexion: " . mysqli_connect_error());
}

$sql = "INSERT INTO message (name, email, sujet, message) VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $sujet, $message);

mysqli_stmt_execute($stmt);

echo "Le formulaire à bien été envoyé.";


?>
