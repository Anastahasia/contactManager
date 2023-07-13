Le gestionnaire de contacts
=======
# ContactManager

L'objectif du projet **The Contact Manager** est de permettre à une entreprise de centraliser et d'organiser facilement ses contacts. L'application rescencera donc les contacts enregistrés et autorisera la personne connectée à en ajouter, à les modifier et à les supprimer. 


## Conception

### Fichiers
Pour cette application, il y a un dossier principal, un fichier index.php et deux dossiers: 
1. l'un contenant le fichier style.css 

2.1. l'autre contenant le fichier contact.sql il permet de:
* créer la base de données
* créer les tables 
* insérer les données


2.2. le fichier connexion.php : 
* la class de connexion à la base de donnée 
* ses fonctions 


2.3. et les fichiers fonctionInsertion.php, fonctionModification.php et fonctionSuppression.php : 
* ils appliquent les fonctions selon les actions faites par l'utilisateur

### Code

Nous avons choisi d'intégrer en faisant appelle à des composants Bootstrap, car le temps est limité. Ils viennent avec le style déjà fait. Cela nous a permis de nous concentrer sur les fonctionnalités tout en garantissant un minimum d'ergonomie.

L'interface de l'application est simpliste afin de faciliter son utilisation. 
Nous avons créé un tableau qui regroupent les données sous forme d'inputs. Ainsi nous facilitons la lecture et la modification pour l'utilisateur. Les boutons sont bien visibles pour une question d'accessibilité. De plus, l'utilisateur comprend bien que chaque bouton correspond une ligne ce qui permet une fois de plus de faciliter l'utilisation. 


## Installation
Pour le bon fonctionnement de l'application chaque document doit rester dans son dossier d'origine.

1. Clonez donc le dépot Git sur votre ordinateur. 
Pour une plus grande facilité à utiliser les fonctionnalités.

2. Importez le fichier contact.sql sur votre système de gestion de données.
Cela vous évitra de créer une base de données vous mêmes et vous aurez des données préremplies.

3. Dans le fichier connexion.php établissez une connexion.
Il y a une instance de maConnexion dans $test. n'hésitez pas à la modifier pour la connecter à votre application de gestion de données.

4. Ouvrez index.php sur votre navigateur dans le local host. Pour commencer à utiliser l'application.

## Utilisations

La page est constitué d'un tableau avec les contacts enregistrées

1. Insertion

Pour insérer un contact, vous trouverez le bouton "Nouveau contact". En cliquant dessus, un pop-up s'affichera pour vous permettre d'entrer une par une les informations du nouveau contact. Vous pouvez cliquez sur le bouton "Créer" pour valider la création ou annuler en cliquant sur la petite croix en haut à droite du pop-up.

>Notez que le nom et le prénom son obligatoire. Vous pouvez ensuite n'entrez que les informations connues sur ce contact si vous n'avez que son email par exemple vous pourrez laisser les champs "Numéro de téléphone" et "Adresse" vides. 

2. Modification

Pour modifier un contact existant, changer directement l'information que vous souhaitez modifier. Lorsque vous avez terminé cliquez sur le bouton modifier de la ligne que vous modifiez pour enregistrer cette modification. Si la modification est effective la page se recharge automatiquement avec le tableau mis à jour.  

>Notez qu'il est tout à fait  possible de modifier plusieus données sur une même ligne. Cependant, une modification est irreversible.

Les modifications n'impactent pas les autres contacts du tableau de bord. En effet, la modification ce fait uniquement ligne par ligne en cliquant sur le bouton de la ligne concernée. Vous ne pourrez donc pas modifier plusieurs contacts d'un seul coup.

3. Suppression

Pour supprimer un contact, cliquez sur le bouton modifier qui correspond à sa ligne. Une demande de confirmation s'ouvrira elle désignera le contact que vous souhaitez effacer. Confirmez en cliquant "Valider". Annulez en cliquant sur "Annuler" ou sur la petite croix en haut à droite. 

>Attention : après validation le contact  sera définitivement supprimer. Vous ne pourrez pas récupérer les informations associées ! 



Vous avez toutes les informations dont vous avez besoins pour utiliser l'application The Contact Manager. N'hésitez pas à me laisser des commentaires afin d'améliorer l'application. 