<?php
$requeteSQL = $bdd->prepare('SELECT * FROM tournoi.tournois;');
$requeteSQL->execute(); 
while ($row = $requeteSQL->fetch()) { 
    echo'<br>';
    
    echo "<table border=1 width=100%>
    <tr>
    <th>ID</th>
    <th>nom</th>
    <th>datedebut</th>
    <th>datefin</th>
    <th>prix</th>
    <th>jeu</th>
    <th>Supprimez</th>
    </tr>
    <tr>
    <td align=center width=5%>" . $row['id'] . "</td>
    <td align=center width=15%>" . $row['nom'] . "</td>
    <td align=center width=20%>" . $row['datedebut'] . "</td>
    <td align=center width=20%>" . $row['datefin'] . "</td>
    <td align=center width=10%>" . $row['prix'] . "</td>
    <td align=center width=25%>" . $row['jeu'] . "</td>
    <td align=center width=5%> 
    <a href='/crud/tournois/tournois_delete.php'>
      <img src='../images/image_croix.webp' height=100%; width=100%;>
    </a> 
  </td>
    </tr>
    </table>";
    echo'<br>';
} 
?>

</body>
</html>
