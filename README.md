Le gestionnaire de contacts
=======
# contactManager

L'objectif du projet **The Contact Manager** est de permettre à une entreprise de centraliser et d'organiser facilement ses contacts. L'application rescencera donc les contacts enregistrés et autorisera la personne connectée à en ajouter, à les modifier et à les supprimer. 

Pour cette application, il y a un dossier principal, un fichier index.php et deux dossiers: 
>l'un contenat le fichier style.css 
>l'autre contenant le fichier contact.sql il permet de:
-créer la base de données
-créer les tables 
-insérer les données
>connexion.php : 
-la class de connexion à la base de donnée 
-ses fonctions 
>et les fichiers fonctionInsertion.php, fonctionModification.php et fonctionSuppression.php : 
-ils appliquent les fonctions selon les actions faites par l'utilisateur

##Installation
Pour le bon fonctionnement de l'application chaque document doit rester dans son dossier d'origine.

1/Clonez donc le dépot Git sur votre ordinateur. 
Pour une plus grande facilité à utiliser les fonctionnalités.

2/Importez le fichier contact.sql sur votre système de gestion de données.
Ca vous évitra de créer une base de données vous mêmes et vous aurez des données préremplies.

3/Dans le fichier connexion.php établissez une connexion.
Il y a une instance de maConnexion dans $test. Sentez-vous libre de la modifier pour la connecter à votre application de gestion de données.

4/Ouvrez index.php sur votre navigateur dans le local host. Pour commencer à utiliser l'application.

##Fonctionnalités


