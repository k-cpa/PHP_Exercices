<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo PHP day 1</title>
</head>
<body>
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
            if($i % 2 == 0){
                echo "C'est bien pair";
            } else {
             echo "Ce n'est pas ton père";
            }
        ?>
    
    <p>Exercice 6</p>
        <?php 
            for ($i = 0; $i <=20; $i++) {
                if($i % 2 == 0){
                    echo $i . ' ';
                }
            }
        ?>
    
    <p>Exercice 7</p>
        <?php 
            $b = 10;
            $c = 10;
            $a = ($b*$b) + ($c*$c);
            $a = sqrt($a);
            echo $a;
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
            echo ($i % 2 == 0) ? "C'est bien pair" : "Ce n'est pas ton père";
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

<style>
    
    p {
        font-weight: bold;
        text-decoration: underline;
    }

    table {
        border: 1px solid black;
    }
    
    td {
        border: 1px solid black;
    }
    
</style>
</body>
</html>