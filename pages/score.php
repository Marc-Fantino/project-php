<?php
session_start();

// question des tableaux
$score = $_SESSION['score'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../issets/css/bootstrap.css">
    <link rel="stylesheet" href="../issets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2? family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="text-center p-5">Résultat du quiz</h1>
    
   
    <h1 class="text-center container container-sm p-4 my-2 border bg-primary text-white w-50">Score :<?=$_SESSION['score']?></h1>

    
    <?php


switch ($score) {
    case 0:
    ?>
    
    <div class="text-center container container-sm p-3 my-2 border bg-primary text-white w-50">
     <p class='alert alert-danger'>Le resultat vous donne le droit de retourner à l'école</p>
    </div>
        
    <?php
        break;
    case 1:
    ?>
     <div class="text-center container container-sm p-3 my-2 border bg-primary text-white w-50">
       <p class='alert alert-danger'> Le resultat vous donne le droit de de courir à la Fnac pour acheter un livre</p>
    </div>
    <?php
        break;
    case 2:
    ?>
       <div class="text-center container container-sm p-3 my-2 border bg-primary text-white w-50">
        <p class='text-center container container-sm p-3 my-2 border bg-primary text-white w-25'> Le resultat vous donne le droit de de reviser un peu beaucoup</p>
        </div>
    <?php
        break;
    case 3:
    ?>
       <div class="text-center container container-sm p-3 my-2 border bg-primary text-white w-50">
        <p class='text-center container container-sm p-3 my-2 border bg-primary text-white w-25'> Le resultat vous donne le droit  de rentrer chez toi</p>
        </div>
    <?php
        break;
    case 4:
    ?>
       <div class="text-center container container-sm p-3 my-2 border bg-primary text-white w-50">
        <p class='text-center container container-sm p-3 my-2 border bg-primary text-white w-25'>Le resultat vous donne le droit de de pas réviser le week end</p>
        </div>
        <?php
        break;
    case 5:
    ?>
       <div class="text-center container container-sm p-3 my-2 border bg-primary text-white w-50">
        <p class='text-center container container-sm p-3 my-2 border bg-primary text-white w-25'>Le resultat vous donne le droit de d'avoir un café offert</p>
    <?php
        break;
}
?>

<div class="text-center container container-sm p-2 my-3 border bg-warning text-white w-50">
        <a href="../pages/multiplication.php" class="text-primary">Retour</a>
        <div>
    
    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>