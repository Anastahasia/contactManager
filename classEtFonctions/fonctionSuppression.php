<?php
include 'connexion.php';
$idcontact = $_POST['idcontact']; // reçu à partir du modal


$test->delete($idcontact); 
header("Location: ../index.php"); // renvoie à la page de gestion