<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <?php
    include 'cnx.php';
    //ecrire la requete
    $sql=$cnx->prepare("select IdClient,nomclient, prenomclient,ancienReleve, dernierReleve,nouveauReleve from client where nomcontroleur='".$_GET['Gerard Michel']"';
$sql=$cnx->prepare ("Select
    $sql->execute();
    echo "<table>";
    
    foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
    {
        echo"<tr>";
        echo "<td>".$ligne['IdClient']."</td>";
        echo "<td>".$ligne['nomclient']."</td>";
        echo "<td>".$ligne['Iprenomclient']."</td>";

        echo "<td>".$ligne['ancienReleve']."</td>";
        echo "<td>".$ligne['dernierReleve']."</td>";
        echo "<td>".$ligne['nouveauReleve']."</td>";

       
        echo "<td><a href='index1.php?code=".$ligne['idControleur']."'>Afficher les clients </td>";
        echo"</tr>";
       
    }
    echo "</table>";
    ?>
</body>

</html>