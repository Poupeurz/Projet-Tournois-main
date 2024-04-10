<?php
    if (isset($_POST['nom']) && 
            isset($_POST['datedebut']) && 
            isset($_POST['datefin']) && // Angel peut mieux faire 
            isset($_POST['prix']) && 
            isset($_POST['jeu'])) { // on vérifie qu'aucun champs ne soient vides.

                // initialisation des variables, ou pas, question de préférence. 
                $nom = $_POST['nom'];
                $datedebut = $_POST['datedebut'];
                $datefin = $_POST['datefin'];
                $prix = $_POST['prix'];
                $jeu = $_POST['jeu'];
            
                // préparation de la requete SQL
                $requeteSQL = $bdd->prepare('INSERT INTO tournois (nom, datedebut, datefin, prix, jeu) VALUES (:nom, :datedebut, :datefin, :prix, :jeu)');
                
                // execution de la requete SQL
                $requeteSQL->execute(array(':nom' => $nom, ':datedebut' => $datedebut, ':datefin' => $datefin, ':prix' => $prix, ':jeu' => $jeu));
                
                // message
                echo 'Tournoi inséré avec succès !';
                echo'<br>';
        }
    
?>
