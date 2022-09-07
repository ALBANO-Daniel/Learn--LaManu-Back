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
        <p>

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
                    for($i=0; $i &lt;21; $i--){<br>
                    echo 'C\'est presque bon.';<br>
                    }
            </p><br>
        </div>
    </div>
    <div id='7' class="exe">
        <h3>Exercice 7 :</h3>
        <p>

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
                < ?php<br>
                    for($i=1; $i >= 100; $i+=15){<br>
                    echo 'On tient le bon bout.';<br>
                    }
            </p>
        </div>
    </div>
    <div id='8' class="exe">
        <h3>Exercice 8 :</h3>
        <p>

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