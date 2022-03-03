<?php
session_start();
?>

<?php
function deconnexion() {
session_unset();
session_destroy();
header("location: ../index.php");
}
if(isset ($_POST["btn-deconnexion"])){
deconnexion();
}

?>
<h1 class="text-info text-center">Bienvenue : <?= $_SESSION['prenom']; ?></h1>


<!DOCTYPE html>
<html lang="en">
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
<header></header>

<section class="container">
<div class="container text-center">
    <h2 class="text-center text-success">Afficher les tables de multiplication</h2>
  
    <div class="text-center">
     
       
        <form action="choixTables.php" method="post">
        
     
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="1">
                    <label for="my-input" class="form-check-label">Un</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="2">
                    <label for="my-input" class="form-check-label">Deux</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="3">
                    <label for="my-input" class="form-check-label">Trois</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="4">
                    <label for="my-input" class="form-check-label">quatre</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="5">
                    <label for="my-input" class="form-check-label">Cinq</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="6">
                    <label for="my-input" class="form-check-label">six</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="7">
                    <label for="my-input" class="form-check-label">Sept</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="8">
                    <label for="my-input" class="form-check-label">Huit</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="9">
                    <label for="my-input" class="form-check-label">Neuf</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="my-input" class="form-check-input" type="checkbox" name="table[]" value="10">
                    <label for="my-input" class="form-check-label">Dix</label>
                </div>
                <div class="container">
                <button type="submit" class="mt-3 btn btn-primary">Afficher le resultat</button>
                </div>
        
        </form>
    </div>
       <div class="container">
               <h2 class="text-center text-info">Jeu de multiplication</h2>
            <form action="multiple.php" method="post">
                <div class="form-group">
                    <label for="reponse"> Quelle est la réponse :</label>
                    
                        <?php
                        $multiplicateur = [1,2,3,4,5,6,7,8,9,10];
                        $nombreMultiplier = [1,2,3,4,5,6,7,8,9,10];
                        
                        $nombreAleatoire = array_rand($multiplicateur);
                        $multiAleatoire = array_rand($nombreMultiplier);
                        
                        $reponseCorrect =  $multiAleatoire * $nombreAleatoire;
                        echo "<h2 class='text-center text-info'> " .$nombreAleatoire . " X " . $multiAleatoire . "</h2>";
                        ?>
                </div>
                
               <input type="number" class="form-control" name="multi" id="reponse">
               <input type="hidden" name="bonne_reponse" value="<?= $reponseCorrect?>">
               <button type="submit" class="btn btn-primary">Reponse</button> 
               
               
            </form>
       </div>
       <form method="POST">
            <button class="mt-3 btn-danger" name="btn-deconnexion">Déconnection</button>
        </form>
    </div>
    
</div>


</form>


<div class="container">
<h1 class="text-center">Quiz de culture Dev</h1>

<form action="question1.php" method="POST">
<label for="pseudo">Votre pseudo</label>
<input type="text" name="pseudo" class="form-control" id="pseudo">
<button name="le-jeu-commence" type="submit" class="mt-3 btn btn-primary">Commencer le jeu</button>
</form>
<?php
if(isset($_POST['le-jeu-commence'])){
    
    $pseudo = "";
    $_SESSION['pseudo'] = $pseudo;
    }


?>

</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>

</html>

