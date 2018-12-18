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
        $sql = $cnx->prepare("select idControleur, nomcontroleur, prenomcontroleur from controleur");
        $sql->execute();
        echo "<table border='1'>";
        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        // la liste des controleurs 
        {
            echo "<tr>";
                echo "<td>".$ligne['nomcontroleur']."</td>";
                echo "<td>".$ligne['prenomcontroleur']."</td>";
                echo "<td><a href='page1.php?azerty=".$ligne['idControleur']."'>Afficher la liste des controleurs</a></td>";
            echo "</tr>";
        }
        echo "</table>";

    ?>
</body>
</html>