<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo_Form_PHP</title>
</head>
<?php 
// Gestion background color EXERCICE 4
            if (isset($_POST['userColor'])) {
                $userColor =($_POST['userColor']);
                if ($userColor == "blue") {
                    $backgroundColor = "blue";
                } else if ($userColor == "green") {
                    $backgroundColor = "green";
                } else if ($userColor == "red") {
                    $backgroundColor = "red";
                } else {
                    $backgroundColor = "white";
                }
            }    
        ?>
<body style="background-color: <?php echo $backgroundColor; ?>;">
    <div class="container"">
        <!-- Faire l'ancre sur l'élément titre avec rappel dans le action du form permet de retourner directement sur le formulaire au lieu de remonter en haut de page.  -->
        <h2 id="formPair">test pair</h2>
        <form action="index.php#formPair" method="POST">
            <label for="testPair">Entrez un nombre</label>
            <input id="testPair" type="number" name="testPair">
            <button>tester</button>
        </form>
        <p><?php

            if(isset($_POST['testPair'])) { // Permet d'executer uniquement si key est définie. Evite le message d'erreur lorsqu'aucune donnée est saisie. 
                // Bonne pratique :  Mettre formulaire dans valeurs plus simples comme ci-dessous
                $testPair = $_POST['testPair']; 
                $nbr = $testPair;
                function EstPair($nbr) {
                return ($nbr % 2 == 0) ? true : false;
                }
                echo (EstPair($nbr)) ? "C'est pair" : "Ce n'est pas ton père";
                }
        ?></p>
    </div>
    <div class="container">
    <h4>EXERCICE 1</h4>
        <?php 
            $ville = isset($_GET['ville']) ? htmlspecialchars($_GET['ville']) : NULL;
            $transport = isset($_GET['transport']) ? htmlspecialchars($_GET['transport']) : NULL;
            echo ($ville && $transport) ? "La ville choisie est " .  $ville . " et le moyen de transport est " . $transport : "Veuillez fournir la ville et le moyen de transport"        ?>
    </div>
    <div class="container">
        <h4 id="exo2">EXERCICE 2</h4>
        <form action="index.php#exo2" method="GET">
            <label for="userAnimal">Entrez l'animal que vous préférez</label>
            <input type="text" id="userAnimal" name="userAnimal">
            <button>Valider</button>
        </form>
        <?php 
            if (isset($_GET['userAnimal'])) {
                $userAnimal = htmlspecialchars($_GET['userAnimal']);
                echo "Votre animal choisi est " . $userAnimal;
            }
        ?>
    </div>
    <div class="container">
        <h4 id="exo3">EXERCICE 3</h4>
        <form action="index.php#exo3" method="post">
            <fieldset>
                <legend>Choisissez votre pseudo</legend>
                <label for="userName">
                    <input type="text" id="userName" name="userName">
                </label>
                <legend>Choisissez la couleur de fond souhaitée</legend>
                <label for="userColor1">
                    <input type="radio" id="userColor1" name="userColor" value="blue">BLEU
                </label>
                <label for="userColor2">
                    <input type="radio" id="userColor2" name="userColor" value="green">VERT
                </label>
                <label for="userColor3">
                    <input type="radio" id="userColor3" name="userColor" value="red">ROUGE
                </label>
                <button>Envoyer</button>
            </fieldset>
        </form>
        <!-- Code PHP au dessus de body pour la prise en compte du changement BG COLOR -->
         <?php 
            if (isset($_POST['userName'])) {
                $userName = htmlspecialchars($_POST['userName']);
                echo "Votre pseudo est " . $userName;
            }
         ?>
    </div>
    <div class="container">
        <h4 id="dice">EXERCICE 4</h4>
        <form action="index.php#dice" method="POST">
            <label for="nbr">Choisissez un nombre multiple de 6</label>
            <input type="number" id="nbr" name="nbr" required>
            <button>Lancer le dés</button>
        </form>

        <?php 
            if (isset($_POST['nbr'])) {
                $dice = htmlspecialchars($_POST['nbr']);
                if ($dice % 6 == 0) {
                    $rollDice = rand(1, 6) * $dice;
                    echo "Le résultat du dés est " . $rollDice;
                } else {
                    echo "Veuillez saisir un multiple de 6";
                }
            }
        ?>
    </div>
    <div class="container">
        <h4 id="admin">EXERCICE 5</h4>
        <form action="index.php#Admin" method="POST">
            <label for="adminID">Identifiant :</label>
            <input type="text" id="adminID" name="adminID" required>
            <label for="adminPW">Mot de passe :</label>
            <input type="password" id="adminPW" name="adminPW" required>
            <button>Valider</button>
        </form>

        <?php 
        $adminCorrectName = 'admin';
        $adminCorrectPW = password_hash('1234', PASSWORD_DEFAULT);
        

        if (isset($_POST['adminID']) && isset($_POST['adminPW'])) {
            $adminID = htmlspecialchars($_POST['adminID']);
            $adminPW = htmlspecialchars($_POST['adminPW']);
            if ($adminID == $adminCorrectName && password_verify($adminPW, $adminCorrectPW)) {
                header('location:admin.php');
            } else {
                echo "Identifiant ou mot de passe incorrect";
            } 
        }
    ?>
    </div>
    <div class="container">
        <h4 id="calculator">EXERCICE 6</h4>
        <form action="#calculator" method="POST">
            <fieldset>
                <legend>LA CALCULETTE DU PAUVRE</legend>
                <label for="number1">Opérande 1 :  
                    <input type="number" id="number1" name="number1">
                </label>
                <label for="number2">Opérande 2 :
                    <input type="number" id="number2" name="number2">
                </label>
                <label for="math">
                    <select name="math" id="math">
                        <option value="add">addition</option>
                        <option value="sub">soustraction</option>
                        <option value="div">division</option>
                        <option value="multi">multiplication</option>
                    </select>
                </label>
                <button type="submit">Calculer</button>
            </fieldset>
        </form>
        <?php 
            if (isset($_POST['number1']) && isset($_POST['number2'])) {
                $n1 = $_POST['number1'];
                $n2 = $_POST['number2'];
                $math = $_POST['math'];

                if ($math == 'add') {
                    echo $n1 + $n2;
                } else if ($math == 'sub') {
                    echo $n1 - $n2;
                } else if ($math == 'multi') {
                    echo $n1 * $n2;
                } else if ($math == 'div') {
                    echo ($n2 != 0) ? $n1 / $n2 : "On ne peut pas diviser par zéro";
                }
            }
        ?>
    </div>
    <div class="container">
        <h4>EXERCICE 7</h4>
            <!-- Y revenir plus tard je ne sais pas comment faire et je bloque -->
    </div>
    <div class="container">
        <h4 id="quiz">EXERCICE 8</h4>
        <form action="index.php#quiz" method="POST">
            <fieldset>
                <legend>Talis Quiz</legend>
                <legend>Qui est l'élève le plus fort de la promotion ?</legend>
                    <input type="radio" id="question1" name="question1" value="Kevin" required>Kevin
                    <input type="radio" id="question1" name="question1" value="Kevin" required>Kevin
                    <input type="radio" id="question1" name="question1" value="Kevin" required>Kevin
                    <input type="radio" id="question1" name="question1" value="Kevin" required>Kevin
                <br>
                <legend>Qui est l'élève le plus nul de la formation ?</legend>
                    <input type="radio" id="question2" name="question2" value="Matthys" required>Matthys
                    <input type="radio" id="question2" name="question2" value="Matthys" required>Matthys
                    <input type="radio" id="question2" name="question2" value="Matthys" required>Matthys
                    <input type="radio" id="question2" name="question2" value="Matthys" required>Matthys
                <br>
                <legend>Qui est le champion support main de Ludo ?</legend>
                    <input type="radio" id="question3" name="question3" value="braum" required>Braum
                    <input type="radio" id="question3" name="question3" value="yuumi" required>Yuumi
                    <input type="radio" id="question3" name="question3" value="lux" required>Lux
                    <input type="radio" id="question3" name="question3" value="leona"required>Leona
                <br>
                <legend>Quel âge a Pédro ?</legend>
                    <input type="radio" id="question4" name="question4" value="2" required>2 ans
                    <input type="radio" id="question4" name="question4" value="10" required>10 ans
                    <input type="radio" id="question4" name="question4" value="15" required>15 ans
                    <input type="radio" id="question4" name="question4" value="Qui" required>C'est qui Pédro ? 
                <br>
                <button type="submit" style="margin-top:20px">Envoyer le Quiz</button>
            </fieldset>
        </form>
        <?php 
            if (isset($_POST['question1']) && isset($_POST['question2']) && isset($_POST['question3']) && isset($_POST['question4'])) {
                $question1 = htmlspecialchars($_POST['question1']);
                $question2 = htmlspecialchars($_POST['question2']);
                $question3 = htmlspecialchars($_POST['question3']);
                $question4 = htmlspecialchars($_POST['question4']);

                $totalCorrect = 0;

                if ($question1 == "Kevin") {
                    $totalCorrect++;
                    echo "Vous avez bien répondu à la question 1 <br>";
                } else {
                    echo "Mauvaise réponse à la question 1 <br>";
                }

                if ($question2 == "Matthys") {
                    $totalCorrect++;
                    echo "Vous avez bien répondu à la question 2 <br>";
                } else {
                    echo "Mauvaise réponse à la question 2 <br>";
                }
                
                if ($question3 == "yuumi") {    
                    $totalCorrect++;
                    echo "Vous avez bien répondu à la question 3 <br>";
                } else {
                    echo "Mauvaise réponse à la question 3 <br>";
                }

                if ($question4 == "10") {
                    $totalCorrect++;
                    echo "Vous avez bien répondu à la question 4 <br>";
                } else {
                    echo "Mauvaise réponse à la question 4 <br>";
                } 
                echo "vous avez : " . $totalCorrect . " réponses correctes";
            }
        ?>
    </div>
    <div class="container">
        <h4 id="mystery">EXERCICE 9</h4>
        <form action="index.php#mystery" method="POST">
            <fieldset>
                <legend>Le nombre mystère</legend>
                <br>
                <label for="userNbr">Tentez de devinez le nombre mystère
                    <br>
                    <input type="number" id="userNbr" name="userNbr" min=0>
                </label>
                <br>
                <button type="submit">Valider</button>
            </fieldset>
        </form>


    <?php 
        $mysteryNbr = 48;
        if (isset($_POST['userNbr'])) {
            $userNbr = $_POST['userNbr'];

            if ($userNbr == $mysteryNbr) {
                echo "Bravo ! Le nombre mystère est bien : " . $mysteryNbr;
            } else if ($userNbr < $mysteryNbr) {
                echo "Perdu ! " . $userNbr . " est plus petit que le nombre mystère <br> Rééssaye !";
            } else if ($userNbr > $mysteryNbr) {
                echo "Perdu ! " . $userNbr . " est plus grand que le nombre mystère <br> Rééssaye !";
            }
        }
    ?>
    </div>
    <div class="container">
        <h4 id="img">EXERCICE 10</h4>
        <form action="index.php#img" method="POST" enctype="multipart/form-data">
            <label for="userFile">Upload ton image 
                <input type="file" id ="userFile" name="userFile">
            </label>
            <button type="submit" name="submitImage">Enregistrer</button>
        </form>

        <?php 
            if (isset($_FILES['userFile'])) {
                $fileName = $_FILES['userFile']['name'];
                $tmpName = $_FILES['userFile']['tmp_name'];
                $location = 'uploads/';

                $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                    echo "Veuillez choisir une image au format JPG, JPEG, PNG ou GIF !";
                } else {
                    $uniqueFileName = uniqid('Image_', true) . '.' . $imageFileType;
                    move_uploaded_file($tmpName, $location.$uniqueFileName);
                    echo '<h5>Votre image téléchargée<br>';
                    echo '<img src="' . $location.$uniqueFileName . '" alt="Image téléchargée">';
                }
            }
        ?>
    </div>


<style>
    * {
        margin: 0;
        padding: 0;
    }

    .container {
        border : 1px solid black;
        padding: 20px;
        margin: 10px;
    }

    h4 {
        margin-bottom: 10px;
    }

    form {
        padding: 10px;
    }
    fieldset {
        padding: 10px;
    }

    input[type=radio] {
        margin: 10px;
    }

    input[type=text] {
        margin: 10px;
    }
</style>
</body>
</html>