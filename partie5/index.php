<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP - partie 5</title>
</head>

<body>
    <nav>
        <button><a class="goBack" href="../">
                <<<<a></button>
        <h2>Partie 5 - exercices :</h2>
        <ul id="exe-list">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
        </ul>
    </nav>
    <div id='0' class="exe">
        <!-- hidden div just to help indexation ref. on the arrays functions -->
    </div>
    <div id='1' class="exe">
        <h3>Exercice 1 :</h3>
        <p>Créer un tableau months et l'initialiser avec les valeurs suivantes :<br><br>
            janvier<br>
            février<br>
            mars<br>
            avril<br>
            mai<br>
            juin<br>
            juillet<br>
            aout<br>
            septembre<br>
            octobre<br>
            novembre<br>
            décembre
        </p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe1.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                &lt;?php<br>
                $months = array('janvier','fevrier','mars', 'avril', 'mai', 'juin', 'julliet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');<br>
                print_r($months);
            </p>
        </div>
    </div>
    <div id='2' class="exe">
        <h3>Exercice 2 :</h3>
        <p>
            Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
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
                &lt;span>c'est possible de "print" une seul index de deux facon : &lt;/span><br>
                &lt;?= $months[2] ?><br>
                &lt;span>, et aussi : &lt;/span><br>
                &lt;?php print_r($months[2]);
            </p>
        </div>
    </div>
    <div id='3' class="exe">
        <h3>Exercice 3 :</h3>
        <p>
            Avec le tableau de l'exercice 1 , afficher la valeur de l'index 5.
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
                &lt;?= $months(4);
            </p>
        </div>
    </div>
    <div id='4' class="exe">
        <h3>Exercice 4 :</h3>
        <p>
            Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
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
                &lt;?php<br>
                $months[7] = 'août';<br>
                print_r($months[7]);
            </p>
        </div>
    </div>
    <div id='5' class="exe">
        <h3>Exercice 5 :</h3>
        <p>
            Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.<br><br>
            5 départements en Hauts-de-France.<br>
            Aisne (02)<br>
            Nord (59)<br>
            Oise (60)<br>
            Pas-de-Calais (62)<br>
            Somme (80)
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
                &lt;?php<br>
                $hdf = array(<br>
                02 => 'Aisne',<br>
                59 => 'Nord',<br>
                60 => 'Oise',<br>
                62 => 'Pas-de-Calais',<br>
                80 => 'Somme',<br>
                );<br><br>
                print_r($array);
            </p>
        </div>
    </div>
    <div id='6' class="exe">
        <h3>Exercice 6 :</h3>
        <p>
            Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
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
                &lt;?= $hdf[59];
            </p>
        </div>
    </div>
    <div id='7' class="exe">
        <h3>Exercice 7 :</h3>
        <p>
            Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims (Marne - 51).
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
                $hdf[51] = 'Marne';<br>
                echo $hdf[51];
            </p>
        </div>
    </div>
    <div id='8' class="exe">
        <h3>Exercice 8 :</h3>
        <p>
            Avec le tableau de l'exercice 1 ($months) et une boucle, afficher toutes les valeurs de ce tableau.
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
                &lt;?php<br>
                foreach ($months as $i => $value) {<br>
                print_r($months[$i] . ' ');<br>
                }
            </p>
        </div>
    </div>

    <div id='9' class="exe">
        <h3>Exercice 9 :</h3>
        <p>
            Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
        </p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe9.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                &lt;?php<br>
                print_r($hdf);<br>
                foreach($hdf as $i => $value){<br>
                print_r($hdf[$i] . ' ');<br>
                }
            </p>
        </div>
    </div>
    <div id='10' class="exe">
        <h3>Exercice 10 :</h3>
        <p>
            Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
            Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département.
        </p>
        <h4>Execution : </h4>
        <p class='execution'>
            <?php
            include("exe10.php");
            ?>
        </p>
        <div class='code'>
            <h4> Code : </h4>
            <p>
                &lt;?php<br>
                foreach($hdf as $i => $value){<br>
                printf(" Le département $value a le numéro $i.");<br>
                }
            </p>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>