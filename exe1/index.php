<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <h2>exercices</h2>
        <ul id="exe-list">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <!-- ADD NEW EXE HERE with same Syntax -->
        </ul>
    </nav>
    

    <!-- ADD NEW EXE HERE With same Syntax -->
    <div id='0' class="exe">
        <!-- hidden div just to help indexation ref. on the arrays functions -->
    </div>
    <div id='1' class="exe">
        <h3>Exercice 1 :</h3>
        <?php
            include("exe1.php");
        ?>
    </div>
    <div id="2" class="exe">
        <h3>Exercice 2 :</h3>
        <?php
            include("exe2.php");
        ?>
    </div>
    <div id="3" class="exe">
        <h3>Exercice 3 :</h3>
        <?php
            include("exe3.php");
        ?>
    </div>
    <div id="4" class="exe">
        <h3>Exercice 4 :</h3>
        <?php
            include("exe4.php");
        ?>
    </div>
    <div id="5" class="exe">
        <h3>Exercice 5 :</h3>
        <?php
            include("exe5.php");
        ?>
    </div>

    <script src="index.js"></script>
</body>
</html>