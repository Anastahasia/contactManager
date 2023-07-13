<?php
include_once 'connexion.php';

//reçoit les POST pour déclencher la fonction update() de la class maConnexion
$nom = $_POST['nom']; // reçu à partir du formulaire
$prenom = $_POST['prenom'];
$num = $_POST['num'];
$mail = $_POST['mail'];
$adresse = $_POST['adresse'];
$id = $_POST['id'];

$test->update($nom,$prenom,$num,$mail,$adresse,$id);
header("Location: ../index.php"); // renvoie à la page de gestion