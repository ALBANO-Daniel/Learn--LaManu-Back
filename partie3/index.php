<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP - partie 3</title>
</head>

<body>
    <nav>
        <button><a class="goBack" href="../"><<<<a></button>
        <h2>Partie 3 - exercices :</h2>
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
        <p>Créer une variable et l'initialiser à 0.
            Tant que cette variable n'atteint pas 10, il faut :<br>
            - l'afficher<br>
            - l'incrementer</p>
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
                    $i = 0; <br>
                    while ($i <= 10) {<br>
                        echo $i++ . ' ';<br>
                        }
            </p>
        </div>
    </div>
    <div id='2' class="exe">
        <h3>Exercice 2 :</h3>
        <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas supérieure à 20 : <br>
            - multiplier la première variable avec la deuxième<br>
            - afficher le résultat<br>
            - incrementer la première variable<br>
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
                < ?php<br>
                    $i = 0;<br>
                    $v = 57;<br>
                    while ($i <= 20) {<br>
                        echo $i*$v . ' ';<br>
                        $i++;<br>
                        }
            </p>
        </div>
    </div>
    <div id='3' class="exe">
        <h3>Exercice 3 :</h3>
        <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas inférieure ou égale à 10 : <br>
            - multiplier la première variable avec la deuxième<br>
            - afficher le résultat<br>
            - décrémenter la première variable<br>
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
                < ?php<br>
                    $i = 100;<br>
                    $v = 57;<br>
                    while ($i >= 10) {<br>
                    echo $i*$v . ' ';<br>
                    $i--;<br>
                    }
            </p>
        </div>
    </div>
    <div id='4' class="exe">
        <h3>Exercice 4 :</h3>
        <p>
            Créer une variable et l'initialiser à 1.
            Tant que cette variable n'atteint pas 10, il faut :<br>
            - l'afficher<br>
            - l'incrementer de la moitié de sa valeur<br>
        </p>
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
                    $i = 1;<br>
                    while($i < 10){<br>
                        echo $i . ' ';<br>
                        $i += $i/2;<br>
                        }
            </p>
        </div>
    </div>
    <div id='5' class="exe">
        <h3>Exercice 5 :</h3>
        <p>
            En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
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
                < ?php for($i=1 ; $i<=15; $i++){<br>
                    echo 'On y arrive presque.';<br>
                    }
            </p>
        </div>
    </div>
    <div id='6' class="exe">
        <h3>Exercice 6 :</h3>
        <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
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
                < ?php<br>
                    for($i=20; $i >= 0; $i--){<br>
                        echo 'C\'est presque bon.';<br>
                        }
            </p><br>
        </div>
    </div>
    <div id='7' class="exe">
        <h3>Exercice 7 :</h3>
        <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
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
                &lt;?php<br>
                    for($i=1; $i <= 100; $i+=15){<br>
                    echo 'On tient le bon bout.';<br>
                    }
            </p>
        </div>
    </div>
    <div id='8' class="exe">
        <h3>Exercice 8 :</h3>
        <p>
            En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
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
                < ?php<br>
                    for($i=200; $i<=0; $i-=12){<br>
                        echo 'Enfin !!!!';<br>
                        }
            </p>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>