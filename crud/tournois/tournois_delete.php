<?php


$requeteSQL = $bdd->prepare('DELETE * FROM tournoi.tournois');
$requeteSQL->execute();
echo 'eeeeeee';

if (mysqli_query($conn, $sql)) {
    echo "Les donnees ont ete supprimees avec succes.";
} else {
    echo "Erreur de suppression des donnees : " . mysqli_error($conn);
}

echo 'alo';
?>