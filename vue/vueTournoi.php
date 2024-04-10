<?php
    require_once '../core/bdd.php';
?>

<html>
  <head>
    <title>insertion de données en PHP :: partie 1</title>
  </head>

<body>

    <h2>Création d'un tournoi</h2>

    <form action="#" method="POST">
    <table cellspacing="2" cellpadding="2">

        <tr>
        <td>nom</td>
        <td><input type="text" name="nom"></td>
        </tr>
        <tr>
        <td>datedebut</td>
        <td><input type="datetime-local" id="datedebut" name="datedebut"></td>
        </tr>
        <tr>
        <td>datefin</td>
        <td><input type="datetime-local" id="datefin" name="datefin"></td>
        </tr>
        <tr>
        <td>prix</td>
        <td><input type="number" name="prix"></td>
        </tr>
        <tr >
        <td>jeu</td>
        <td><select name="jeu">
            <option value="League of Legends"> League of Legends</option> 
            <option value="Fortnite"> Fortnite</option>
            <option value="Minecraft"> Minecraft</option>
            <option value="Apex Legends"> Apex Legends</option>
            <option value="Counter-Strike: Global Offensive"> Counter-Strike: Global Offensive</option>
            <option value="Escape From Tarkov"> Escape From Tarkov</option>
            <option value="Call Of Duty: Warzone"> Call Of Duty: Warzone</option>
            <option value="Grand Theft Auto V"> Grand Theft Auto V</option>
            <option value="Overwatch"> Overwatch</option>
            <option value="Tom Clancy"> Tom Clancy</option>
            <option value="Valorant"> Valorant</option>
            <option value="World of Warcraft"> World of Warcraft</option>
        </select> </td>
        </tr>
    
        <tr></tr>
            <td colspan="2"><input  name="submit" type='submit' value='Valider'></td>
        </tr>

    </table>
    </form>

    <h2>TOUT LES TOURNOIS</h2>

</body>
</html>
    



<?php
include "../crud/tournois/tournois_insertion.php";
include "../crud/tournois/tournois_select.php";


/*require_once "Saison.php";

 $saison23 = new Saison();

 if(isset($_POST["valider"])) { // on voulait reprendre la structure pour le crud mais azy on est des bolosses x) Ouais mauvais bail, ca vous a perdu
     $saison23->setUnPilote(new Pilote($_POST["nom"],$_POST["prenom"],$_POST["nation"],$_POST["naissance"]));
     var_dump($saison23->getLesPilotes());
 }


   //on inclut la connexion a la base de donnée
   require_once('../core/Connexion.php');
   require_once('../core/Dao.php');
   
   // FAUT CREER UNE CLASSE TOURNOI
   $tournoiManager = new TournoiManager();
   $tournois = $tournoiManager->getLesTournois();
*/
?>