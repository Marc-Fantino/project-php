
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

<div class="container">



<?php
if(isset($_POST['multi'])){
    $reponse = $_POST['multi'];

}
if(isset($_POST['bonne_reponse'])){
    $reponseCorrect = $_POST['bonne_reponse'];
    
    }
if( $reponseCorrect == $reponse ){
        echo "<h3 class='text-center text-success'>BRAVO !</h3>";
    }else{
        echo "<h3 class='text-center text-danger'>Mauvaise réponse !</h3>";
    }
?>


<div class="text-center">
        <a href="../pages/multiplication.php" class="mt-3 btn-outline-danger">Retour</a>
        <div>

</div>
</body>
</html>