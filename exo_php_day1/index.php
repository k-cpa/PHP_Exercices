<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo PHP day 1</title>
</head>
<body>
    <?php include('header.php')?>

     <p>Exercice 1</p>
        <?php 
            for ($i = 0; $i <= 25; $i++) {
                echo $i . ' ';
            }
        ?>

     <p>Exercice 2</p>
        <?php 
            $i = 1;
            while ($i <=25) {
                echo $i . ' ';
                $i++;
            }
        ?>
    <p>Exercice 3</p>
        <?php 
            for ($i = 1; $i <= 25; $i++) {
                for($x = 1; $x <= $i; $x++) {
                    echo $x . ' ';
                }
                echo '<br>';
            }
        ?>
    
    <p>Exercice 4</p>
        <?php 
            $x = 0;
            for ($i = 0; $i <= 30; $i++) {
                $x = $x+$i;
            }
            echo 'La somme des nombres de 0 à 30 est :' . $x;
        ?>
    
    <p>Exercice 5</p>
        <?php 
            $i = 2;
            function EstPair($i) {
            return ($i % 2 == 0) ? true : false;
            }
            echo (EstPair($i)) ? "C'est pair" : "Ce n'est pas ton père";
        ?>
    
    <p>Exercice 6</p>
        <?php 
            for ($i = 0; $i <=20; $i++) {
               echo (EstPair($i)) ? $i : ' ';
            }
        ?>
    
    <p>Exercice 7</p>
        <?php 
            function calcHypo($b, $c) {
                $a = ($b * $b) + ($c * $c);
                $a = sqrt($a);
                return $a;
            }
            $b = 10;
            $c = 10;
            echo calcHypo($b, $c);
        ?>

    <p>Exercice 8</p>
        <?php 
            $heure = 23;
            if ($heure >= 0 && $heure < 12) {
                echo "C'est le matin";
            } else if ($heure >= 12 && $heure < 18) {
                echo "C'est l'après midi";
            } else if ($heure >= 18 && $heure <= 24) {
                echo "C'est la nuit";
            }
        ?>
    
    <p>Exercice 9</p>
        <?php 
            $i = 3;
            echo (EstPair($i)) ? "C'est bien pair" : "Ce n'est pas ton père";
        ?>

    <p>Exercice 10</p>
        <?php 
            for ($i = 0; $i <=100; $i++) {
                if ($i % 5 == 0 && $i % 3 == 0) {
                    echo 'foobar' . '<br>';
                } else if ($i % 3 == 0) {
                    echo 'foo'. '<br>';
                } else if ($i % 5 == 0) {
                    echo 'bar'. '<br>';
                } 
            }
        ?>
    
    <p>Exercice 11</p>
        <?php 
            $identitePersonne = [
                'nom' => 'Croft',
                'prenom' => 'Lara',
                'metier' => 'Archéologue',
            ];
            echo "C'est un plaisir de vous voir " . $identitePersonne['prenom'] . ' ' . $identitePersonne['nom'] . " ! " . "(" . $identitePersonne['metier'] . ")";
        ?>

    <p>Exercice 12</p>
        <?php 
            $fighters = [
                'Zelda',
                'Samus',
                'Bowser',
                'Peach',
                'Lucina',
            ];

            foreach($fighters as $fighter) {
                if (strlen($fighter) >= 6) {
                    echo $fighter . '<br>';
                }
            }
        ?> 
    
    <p>Exercice 13</p>
        <?php 
            $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            $minValue = min($numbers);

            echo "La plus petite valeur dans ce tableau d'entiers est " . $minValue
        ?>
    
    <p>Exercice 14</p>
        <?php 
            $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        
            shuffle($numbers);
            // asort garde l'index comme il était initialement. 
            // sort donne un nouvel index aux valeurs ! 
            // Bien faire attention en fonction de ce que l'on veut. 
            asort($numbers);
            foreach ($numbers as $number) {
                echo $number . ' ';
            }
        ?>

    <p>Exercice 15</p>
    <?php
        $taille = 9;
        
        echo '<table>';
        for ($x = 1; $x <= $taille; $x++) {
            echo '<tr>';
            for ($y = 1; $y <= $taille; $y++) {
                echo '<td>' . ($x * $y) . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    ?>

<?php include('footer.php')?>


<style>

    * {
        margin: 0;
        padding: 0;
    }

    header, footer {
        background-color: black;
        color: white;
        padding: 20px;
    }

    
    
    p {
        font-weight: bold;
        text-decoration: underline;
        margin-bottom: 20px;
        margin-top: 15px;
    }

    table {
        border: 1px solid black;
        margin: 20px;
    }
    
    td {
        border: 1px solid black;
    }
    
</style>
</body>
</html>