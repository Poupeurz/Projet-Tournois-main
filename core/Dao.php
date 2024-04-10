<?php
require_once 'Connexion.php'; 
require_once '../role/Joueur.php'; 
require_once '../role/Tournoi.php'

class Dao
{
   // attribut utilisé dans les scripts qui accèderont à la base de données
   private PDO $sgbd;
   public function __construct()
    {
        $connexion = new Connexion();
        $this->sgbd = $connexion->getConnexion();
    }

    public function getLesTournois(): array
{
    $tournois = [];
    $requete = "SELECT id, nom, datedebut, datefin, prix, jeu FROM tournoi";
    
    try {
        $resultat = $this->sgbd->query($requete);
        
        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $tournoi = new Tournoi(
                $ligne["id"],
                $ligne["nom"],
                $ligne["datedebut"],
                $ligne["datefin"],
                $ligne["prix"],
                $ligne["jeu"]
            );
            $tournois[] = $tournoi;
        }
    } catch (PDOException $e) {
        // Gérer l'erreur de requête ici
    }
    
    return $tournois;
}
    // fonction pour créer un tournoi
    public function insertTournoi($unTournoi)
        {
            $requete = "insert into pilote (nom, prenom, nationalite, dateNaiss) ";
            $requete .= "values ('".$unTournoi->getNom()."','".$unTournoi->getPrenom().
                        "','".$unTournoi->getNationalite()."','".$unTournoi->getDateNaiss()."');";
            // préparer la requête
            $result = $this->sgbd->prepare($requete);
            // exécuter la requête
            $result->execute();
            echo "Un tournoi a bien été ajouté dans la base de données";
        }




    public function getLesJoueurs() : array
    {
        $lesjoueurs = array();
        $requete = "select * from joueur;";
        // préparer la requête
        $result = $this->sgbd->prepare($requete);
        // exécuter la requête
        $result->execute();
        // on récupère le resultat du select dans un tableau nommé $lignes
        $lignes = $result->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($lignes);
        // boucle qui traite les lignes du select
        foreach ($lignes as $ligne) {
            // on instancie un nouveau pilote avec chaque ligne de la table
            $joueur = new Joueur (
                $ligne["login"],
                $ligne["prenom"],
                $ligne["nom"],
                $ligne["dateNaiss"],
                $ligne["courriel"]
            );
            $joueur->setId($ligne["id"]);
            array_push($lesjoueurs,$joueur);
        }
        //var_dump($lesPilotes);
        return $lesjoueurs;
    }
}