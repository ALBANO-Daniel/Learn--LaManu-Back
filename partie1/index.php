<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP - Partie 1</title>
</head>

<body>
    <nav>
        <button><a class="goBack" href="../"><<<<a></button>
        <h2>Partie 1 - exercices :</h2>
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
        <!-- hidden empty div just to help optimize indexation ref. on the arrays functions -->
    </div>
    <div id='1' class="exe">
        <h3>Exercice 1 :</h3>
        <p>Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.</p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe1.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                < ?php $name='Roger' ; echo $name; ?>
            </p>
        </div>
    </div>
    <div id='2' class="exe">
        <h3>Exercice 2 :</h3>
        <p>Créer trois variables lastname , firstname et age <br>
            et les initialiser avec les valeurs de votre choix. <br>
            Attention age est de type entier. Afficher leur contenu.
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
                    $firstname = 'Roger'; <br>
                    $lastname = 'Blunt'; <br>
                    $age = 12; <br>
                    // settype($age, "int");<br>
                    echo $firstname . '&lt;br>' . $lastname . '&lt;br>' . $age . '&lt;br>';<br>
            </p>
        </div>
    </div>
    <div id='3' class="exe">
        <h3>Exercice 3 :</h3>
        <p>
            Créer une variable km. L'initialiser à 1. Afficher son contenu.<br>
            Changer sa valeur par 3. Afficher son contenu.<br>
            Changer sa valeur par 125. Afficher son contenu.<br>
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
                    $km = 1; <br>
                    echo $km . "&lt;br>"; <br>
                    $km = 3; <br>
                    echo $km . "&lt;br>"; <br>
                    $km = 125; <br>
                    echo $km . "&lt;br>"; <br>
            </p>
        </div>
    </div>
    <div id='4' class="exe">
        <h3>Exercice 4 :</h3>
        <p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
            Les afficher.</p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe4.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                < ?php<br>
                    $var_string = 'one string';<br>
                    $var_boolean = true;<br>
                    $var_int = 12;<br>
                    $var_float = 25.1334;<br><br>

                    echo "String: " . $var_string . '&lt;br>' <br>
                    . "Boolean: " . $var_boolean . '&lt;br>' <br>
                    . "Integer: " . $var_int . '&lt;br>' <br>
                    . "Float: " . $var_float . '&lt;br>';<br>
            </p>
        </div>
    </div>
    <div id='5' class="exe">
        <h3>Exercice 5 :</h3>
        <p>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.<br>
            Donner une valeur à cette variable et l'afficher.</p>
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
                    $my_int;<br>
                    settype($my_int, "int");<br>
                    echo $my_int . '&lt;br>';<br>
                    $my_int = 2.4;<br>
                    echo $my_int;<br>
            </p>
        </div>
    </div>
    <div id='6' class="exe">
        <h3>Exercice 6 :</h3>
        <p>Créer une variable name et l'initialiser avec la valeur de votre choix.
            Afficher : Bonjour + name + , comment vas tu ?. </p>
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
                    $name='Lila' ; <br>
                    echo 'Bonjour ' . $name . ', comment vas tu ?' ;
            </p>
        </div>
    </div>
    <div id='7' class="exe">
        <h3>Exercice 7 :</h3>
        <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
            Afficher : Bonjour + lastname + firstname + , tu as + age + ans.
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
                < ?php $firstname='Louise' ; <br> $lastname='Lecroix' ; <br> $age=45; <br> echo 'Bonjour ' . $lastname . $firstname . ', tu as ' . $age . ' ans.' ;
            </p>
        </div>
    </div>
    <div id='8' class="exe">
        <h3>Exercice 8 :</h3>
        <p>Créer 3 variables.
            Dans la première mettre le résultat de l'opération 3 + 4.
            Dans la deuxième mettre le résultat de l'opération 5 * 20.
            Dans la troisième mettre le résultat de l'opération 45 / 5.
            Afficher le contenu des variables.
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
                    $one=3 + 4; <br>
                    $two=5 * 20; <br>
                    $three=45 / 5;<br>
                    echo '1 : ' . $one . '&lt;br>' . '2 : ' . $two . '&lt;br>' . '3 : ' . $three ;
            </p>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>