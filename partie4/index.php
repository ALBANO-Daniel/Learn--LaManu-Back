<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP - partie 4</title>
</head>

<body>
    <nav>
        <h2>exercices :</h2>
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
        <p>
            Faire une fonction qui retourne true.
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
                function ok(){<br>
                return true;<br>
                }<br>
                if( ok() == true){<br>
                echo 'function returns true';<br>
                };<br>
                # ok() return 1, true<br>
                # any truly return will activate the if statement<br>
            </p>
        </div>
    </div>
    <div id='2' class="exe">
        <h3>Exercice 2 :</h3>
        <p>
            Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
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
                &lt;?php<br>
                $chaine = "Une Chaine de caracteres.";<br>
                function ok2($arg){<br>
                return $arg;<br>
                }<br>
                echo ok($chaine);
            </p>
        </div>
    </div>
    <div id='3' class="exe">
        <h3>Exercice 3 :</h3>
        <p>
            Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.
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
                &lt;?php<br>
                $chaine1 = 'Ici la premiere, ';<br>
                $chaine2 = 'et puis la deuxieme.';<br><br>
                function chaines($arg1, $arg2){<br>
                return $arg1 . $arg2;<br>
                }<br>
                echo chaines($chaine1, $chaine2);<br>
            </p>
        </div>
    </div>
    <div id='4' class="exe">
        <h3>Exercice 4 :</h3>
        <p>
            Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br><br>
            <i>Le premier nombre est plus grand</i> si le premier nombre est plus grand que le deuxième<br>
            <i>Le premier nombre est plus petit</i> si le premier nombre est plus petit que le deuxième<br>
            <i>Les deux nombres sont identiques</i> si les deux nombres sont égaux.
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
                $num1 = 15;<br>
                $num2 = 10;<br><br>
                function compareNumbers($a,$b){<br>
                if($a>$b){<br>
                echo 'Le premier nombre est plus grand.';<br>
                } else if($a<$b){<br>
                    echo 'Le premier nombre est plus petit.';<br>
                    } else {<br>
                    echo 'Les deux nombres sont identiques.';<br>
                    }<br>
                    }<br>
                    echo compareNumbers($num1,$num2);
            </p>
        </div>
    </div>

    <div id='5' class="exe">
        <h3>Exercice 5 :</h3>
        <p>
            Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
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
                $a = 1;<br>
                $b = ', est une chaine de caracteres.';<br>
                function concat($x,$y){<br>
                return $x.$y;<br>
                }<br>
                echo concat($a,$b);
            </p>
        </div>
    </div>

    <div id='6' class="exe">
        <h3>Exercice 6 :</h3>
        <p>
            Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
            Bonjour + nom + prénom + , tu as + age + ans.
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
                &lt;?php<br>
                $nom = 'LEVRAI';<br>
                $prenom = 'Faux';<br>
                $age = 66;<br><br>
                function bonjour($nom,$prenom,$age){<br>
                echo "Bonjour $nom $prenom, tu as $age ans.";<br>
                }<br>
                echo bonjour($nom,$prenom,$age);
            </p>
        </div>
    </div>

    <div id='7' class="exe">
        <h3>Exercice 7 :</h3>
        <p>
            Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :<br><br>
            Homme<br>
            Femme<br><br>
            La fonction doit renvoyer en fonction des paramètres :<br><br>
            Vous êtes un homme et vous êtes majeur<br>
            Vous êtes un homme et vous êtes mineur<br>
            Vous êtes une femme et vous êtes majeure<br>
            Vous êtes une femme et vous êtes mineure<br><br>
            Gérer tous les cas.
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
                &lt;?php<br><br>
                $age = 17;<br>
                $gender = 'homme';<br><br>
                function verify($age,$gender){<br>
                if($age < 18 && $gender=='homme' ){ echo 'Vous êtes un homme et vous êtes mineur' ;};<br>
                    if($age >= 18 && $gender == 'homme'){ echo 'Vous êtes un homme et vous êtes majeur';};<br>
                    if($age < 18 && $gender=='femme' ){ echo 'Vous êtes une femme et vous êtes mineure' ;};<br>
                        if($age >= 18 && $gender == 'femme'){ echo 'Vous êtes une femme et vous êtes majeure';};<br>
                        };<br><br>
                        echo verify($age,$gender);
            </p>
        </div>
    </div>

    <div id='8' class="exe">
        <h3>Exercice 8 :</h3>
        <p>
            Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
            Tous les paramètres doivent avoir une valeur par défaut.
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
                $a = random_int(1,100);<br>
                $b = random_int(1,100);<br>
                $c = random_int(1,100);<br><br>
                function somme($a,$b,$c){<br>
                return $a+$b+$c;<br>
                }<br><br>
                echo somme($a,$b,$c);
            </p>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>