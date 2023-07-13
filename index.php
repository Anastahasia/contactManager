<?php include 'classEtFonctions/connexion.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Gestion de contacts</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1> Mes contacts </h1>    

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Numéro de téléphone</th>
                <th scope="col">Email</th>
                <th scope="col">Adresse</th>
            </tr>
        </thead>
        
        <tbody>
            <?php 
                foreach($contacts as $contact) { //récupère chaque données ligne par ligne
                    echo
                        '<tr><form action="classEtFonctions/fonctionModification.php" method="POST">
                            <td><input type="hidden" name="id" id="idcontact" value="'.$contact['idcontact'].'"/>'; //permet de récuperer l'id sans avoir à l'entrer manuellement dans la fonction
                    echo    '<td><input type="text" name="nom" id="nom" value="'.$contact['nom'] . '"></td>
                            <td><input type="text" name="prenom" id="prenom" value="'.$contact['prenom'] . '"></td>
                            <td><input type="text" name="num" id="num" value="'.$contact['num'] . '"></td>
                            <td><input type="text" name="mail" id="mail" value="'.$contact['mail'] . '"></td>
                            <td><input type="text" name="adresse" id="adresse" value="'.$contact['adresse'] . '"></td>
                            <td><button type="submit" name="modification" class="btn btn-primary" >
                                    Modifier
                                </button>
                                <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#suppression' . $contact['idcontact'] . '"> 
                                    Supprimer
                                </button>'; // créer un modal pour chaque ligne de la table contact, data-bs-target permet d'ouvrir le modal en fonction de l'id
                    echo'</form></tr>';
                }

                //modal de suppression pour chaque ligne
                foreach ($contacts as $contact){
                    echo           
                    '<form action="classEtFonctions/fonctionSuppression.php" method="POST">
                        <div class="modal fade" id="suppression' . $contact['idcontact'] .'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="idcontact" id="idcontact" value="'.$contact['idcontact'].'"/>
                                        <div> 
                                            <p>Êtes-vous sûr de vouloir supprimer ' . $contact['prenom']. ' ' . $contact['nom'] . '</p>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="suppression" class="btn btn-outline-info">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>';
                }
            ?>
        </tbody> 
    </table>

    <!-- bouton d'appel du modal d'insertion -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInsertion"> 
        Ajouter un nouveau contact 
    </button>  
        <!-- Modal d'insertion -->
    <form action="classEtFonctions/fonctionInsertion.php" method="POST">
        <div class="modal fade" id="modalInsertion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau contact</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                    <!-- formulaire d'insertion -->
                        <div class="card-group">     
                            <div class="card" style="width: 30rem;">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="leNom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="leNom" name="nom" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lePrenom" class="form-label">Prenom</label>
                                        <input type="text" class="form-control" id="lePrenom" name="prenom" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tel" class="form-label">Numéro de téléphone</label>
                                        <textarea class="form-control" id="tel" rows="2" name="num" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <textarea class="form-control" id="email" rows="2" name="mail" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lAdresse" class="form-label">Adresse</label>
                                        <textarea class="form-control" id="lAdresse" rows="2" name="adresse" required></textarea>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-outline-info">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form> 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" 
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
