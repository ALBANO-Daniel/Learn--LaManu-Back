<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP partie 2</title>
</head>

<body>
    <nav>
        <button><a class="goBack" href="../"><<<<a></button>
        <h2>Partie 2 - exercices :</h2>
        <ul id="exe-list">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            
        </ul>
    </nav>
    <div id='0' class="exe">
        <!-- hidden div just to help indexation ref. on the arrays functions -->
    </div>
    <div id='1' class="exe">
        <h3>Exercice 1 :</h3>
        <p>Créer une variable age et l'initialiser avec une valeur.
            Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe1.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                < ?php <br>
                    $age=17; <br>
                    if ($age> 17){ <br>
                    echo 'Vous etes majeur.'; <br>
                    } else { <br>
                    echo 'Vous etes mineur.'; <br>
                    } <br>
                    ?>
            </p>
        </div>
    </div>

    <div id='2' class="exe">
        <h3>Exercice 2 :</h3>
        <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
            Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.

            Bonus : L'écrire de deux manières différentes.
        </p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe2.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                < ?php <br>
                    $isEasy=true; <br>
                    if($isEasy){<br>
                    echo 'C\' est facile !!'; <br> } else { <br> echo 'C\' est difficile !!!'; }
            </p>
        </div>
    </div>

    <div id='3' class="exe">
        <h3>Exercice 3 :</h3>
        <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :<br><br>
            Homme<br>
            Femme<br><br>
            En fonction de l'âge et du genre afficher la phrase correspondante :<br><br>
            Vous êtes un homme et vous êtes majeur<br>
            Vous êtes un homme et vous êtes mineur<br>
            Vous êtes une femme et vous êtes majeure<br>
            Vous êtes une femme et vous êtes mineure<br><br>
            Gérer tous les cas.
        </p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe3.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                < ?php <br>
                    $age=18; <br>
                    $gender='Homme' ; <br>
                    if ($age < 18){ <br>
                        &nbsp; if( $gender=='Homme'){ <br>
                        &nbsp; &nbsp; &nbsp; echo 'Vous êtes un homme et vous êtes mineur' ; <br>
                        &nbsp; } else { <br>
                        &nbsp; &nbsp; &nbsp;echo 'Vous êtes une femme et vous êtes mineure' ;<br>
                        &nbsp; &nbsp;}<br>
                        } else { <br>
                        &nbsp; if( $gender=='Homme' ){ <br>
                        &nbsp; &nbsp; &nbsp; echo 'Vous êtes un homme et vous êtes majeur' ;<br>
                        &nbsp; } else { <br>
                        &nbsp; &nbsp; &nbsp;echo 'Vous êtes une femme et vous êtes majeure' ; <br>
                        &nbsp; &nbsp;}<br>
                        }
            </p>
        </div>
    </div>

    <div id='4' class="exe">
        <h3>Exercice 4 :</h3>
        <p>
            L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
            Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.
        </p>
        <table>
            <thead>
                <tr>
                    <th scope="col">Magnitude</th>
                    <th scope="col">Phrase</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td>Micro-séisme impossible à ressentir.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">2</td>
                    <td>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">3</td>
                    <td>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">4</td>
                    <td>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">5</td>
                    <td>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">6</td>
                    <td>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">7</td>
                    <td>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">8</td>
                    <td>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</td>
                </tr>
                <tr>
                    <td style="text-align: center;">9</td>
                    <td>Séisme capable de tout détruire sur une très vaste zone.</td>
                </tr>
            </tbody>
        </table>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe4.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                <img src="./img/exe4.jpg" alt="code source sur vscode">
            </p>
        </div>
    </div>

    <div id='5' class="exe">
        <h3>Exercice 5 :</h3>
        <p>Traduire ce code avec des if et des else : <br>
            < ?php <br>
                echo ($gender != 'Homme') ? "C'est une développeuse !!!" : "C'est un développeur !!!"; <br>
                ?>
        </p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe5.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                < ?php <br>

                    $original = "(\$gender != 'Homme') ? 'C'est une développeuse !!!' : C'est un développeur !!!';"; <br><br>

                    $translated = "if(\$gender != 'Homme) { echo 'C'est une développeuse !!!'; } else { echo 'C\'est un développeur !!!'; }" ;<br><br>

                    echo 'Before : ' . $original . '&lt;br>' . 'After : ' . $translated ;<br>
            </p>
        </div>
    </div>

    <div id='6' class="exe">
        <h3>Exercice 6 :</h3>
        <p>Traduire ce code avec des if et des else : <br><br>
            < ?php <br>
                echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';<br>
                ?><br>
        </p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe6.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                < ?php <br>

                    $original = " echo (\$age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur' "; <br><br>

                    $translated = "if(\$age >= 18) { echo 'Tu es majeur'; } else { echo 'Tu n\'es pas majeur'; }" ;<br><br>

                    echo 'Before : ' . $original . '&lt;br>' . 'After : ' . $translated ;<br>
            </p>
        </div>
    </div>

    <div id='7' class="exe">
        <h3>Exercice 7 :</h3>
        <p>Traduire ce code avec des if et des else : <br>
            < ?php <br>
                echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!'; <br>
                ?>
        </p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe7.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                < ?php <br>

                    $original = "echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';"; <br><br>

                    $translated = "if($isOk == false) { echo 'c\'est pas bon !!!'; } else { echo 'c\'est ok !!'; }" ;<br><br>

                    echo 'Before : ' . $original . '&lt;br>' . 'After : ' . $translated ;<br>
            </p>
        </div>
    </div>
    <div id='8' class="exe">
        <h3>Exercice 8 :</h3>
        <p>Traduire ce code avec des if et des else :<br>
            < ?php<br>
                echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';<br>
                ?>
        </p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe8.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                < ?php <br>

                    $original = "echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';"; <br><br>

                    $translated = "if($isOk) { echo 'c'est ok !!'; } else { echo 'c'est pas bon !!!'; }";<br><br>

                    echo 'Before : ' . $original . '&lt;br>' . 'After : ' . $translated ;<br>
            </p>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>