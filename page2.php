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
        $sql = $cnx->prepare("select idClient, nomclient, prenomclient, ancienReleve,dernierReleve from client");
        $sql->execute();
        echo "<table border='1'>";
        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        // la liste des clients en fonction du conteroleur
        {
            echo "<tr>";
            echo "<td>".$ligne['IdClient']."</td>";
            echo "<td>".$ligne['nomclient']."</td>";
            echo "<td>".$ligne['Iprenomclient']."</td>";
    
            echo "<td>".$ligne['ancienReleve']."</td>";
            echo "<td>".$ligne['dernierReleve']."</td>";
            echo "<td>".$ligne['nouveauReleve']."</td>";
    
                echo "<td><a href='page2.php?azerty=".$ligne['idControleur']."'>creer nouveau client </a></td>";
            echo "</tr>";
        }
        echo "</table>";

    ?>
</body>
</html>