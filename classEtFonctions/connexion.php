<?php
class maConnexion{

    private $nomBaseDeDonnees/* = ""*/;
    private $motDePasse/* = ""*/;
    private $utilisateur/* = "root"*/;
    private $hote/* = "localhost"*/;
    private $connexionPDO;

    public function __construct($nomBaseDeDonnees, $motDePasse, $utilisateur, $hote){
        $this ->nomBaseDeDonnees = $nomBaseDeDonnees;
        $this ->motDePasse = $motDePasse;
        $this ->utilisateur = $utilisateur;
        $this ->hote = $hote;

        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4";
            $this->connexionPDO = new PDO($dsn, $this ->utilisateur, $this ->motDePasse);
            $this->connexionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "<h6>Tu es connectée ma belle!<h6> ";

        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }

    }

    public function select($table,$colonne){
        try {
            $requete = "SELECT $colonne FROM $table";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat ->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultat;
            
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }

    }

    public function insertion($nom, $prenom, $num, $mail, $adresse){
        try {
            $requete = "INSERT INTO contact (nom, prenom, num, mail, adresse) VALUES(:nom, :prenom, :num, :mail, :adresse)";
            $requete_prepare = $this->connexionPDO->prepare($requete);

            $requete_prepare->bindParam(':nom',$nom,PDO::PARAM_STR);
            $requete_prepare->bindParam(':prenom',$prenom,PDO::PARAM_STR);
            $requete_prepare->bindParam(':num',$num,PDO::PARAM_STR);
            $requete_prepare->bindParam(':mail',$mail,PDO::PARAM_STR);
            $requete_prepare->bindParam(':adresse',$adresse,PDO::PARAM_STR);

            $requete_prepare->execute();
            echo 'insertion reussie';

            return $requete_prepare;
            
        }catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function update($nom, $prenom, $num, $mail, $adresse, $id){
        try{
            $requete = "UPDATE contact SET nom = ?, prenom = ?, num = ?, mail = ?, adresse = ? WHERE idcontact = ?";
            $requete_prepare = $this->connexionPDO->prepare($requete);

            $requete_prepare->bindValue(1, $nom,PDO::PARAM_STR);
            $requete_prepare->bindValue(2, $prenom,PDO::PARAM_STR);
            $requete_prepare->bindValue(3, $num,PDO::PARAM_STR);
            $requete_prepare->bindValue(4, $mail,PDO::PARAM_STR);
            $requete_prepare->bindValue(5, $adresse,PDO::PARAM_STR);
            $requete_prepare->bindValue(6, $id,PDO::PARAM_INT);

            $requete_prepare->execute();
            echo 'modification reussie';
            return $requete_prepare;
            

        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function delete($id){
        try{
            $requete = "DELETE FROM contact WHERE idcontact = ?";
            $requete_prepare = $this->connexionPDO->prepare($requete);

            $requete_prepare->bindValue(1, $id,PDO::PARAM_INT);

            $requete_prepare->execute();
            echo 'modification reussie';
            return $requete_prepare;
            

        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

}

$test = new maConnexion('carnet', '', 'root', 'localhost');
$contacts = $test->select('contact', '*');
