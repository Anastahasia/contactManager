<?php
include 'connexion.php';
$nom = $_POST['nom']; // reçu à partir du modal d'insertion
$prenom = $_POST['prenom'];
$num = $_POST['num'];
$mail = $_POST['mail'];
$adresse = $_POST['adresse'];

$test->insertion($nom, $prenom, $num, $mail, $adresse); 
header("Location: ../index.php"); // renvoie à la page de gestion

?>