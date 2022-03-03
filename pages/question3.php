<?php
session_start();

// question des tableaux
$question = array(

                array(
                    "Questionone3" =>"Comment faire appel à un fichier CSS ?",
                    "reponse1" => "&lt;link rel ='superstylessheet'&gt;",
                    "reponse2" => "&lt;invocation-CSS&gt;",
                    "reponse3" => "&lt;link rel='stylesheet' href='css/style.css'&gt;",
                    "reponse4" => "&lt;on-demande-au-formateur&gt;",
                    "reponse5" => "&lt;#CSS&gt;"
                ),
);
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

<div class="container-fluid" id="questionnaire">

    <h1 class="text-center">Quiz de culture Dev</h1>
    



<?php
    foreach ($question as $tableau){
?>
    <form method="post">
    <!--Afficher la question-->
    <div class="text-center container container-sm p-3 my-2 border bg-primary text-white w-50">
             <h2 class="text-sucess"><?= $tableau['Questionone3'] ?></h2>
        </div>
        <div id="row" class="container container-sm p-3 my-2 border bg-white text-primary w-50">
        <div class="mt-2">
        
        <input type="radio" name="reponse" class="form-check-input" id="radio1" value="<?=$tableau['reponse1'] ?>">
        <label for="radio1"><?=$tableau['reponse1']?></label>
        
        </div>
        
        <div class="mt-2">
        
        <input type="radio" name="reponse" class="form-check-input" id="radio1" value="<?= $tableau['reponse2'] ?>">
        <label for="radio1"><?= $tableau['reponse2']?></label>
        
        </div>
        
        <div class="mt-2">
        <input type="radio" name="reponse" class="form-check-input" id="radio1" value="<?= $tableau['reponse3'] ?>">
        <label for="radio1"><?= $tableau['reponse3']?></label>
        
        </div>
        
        <div class="mt-2">
        <input type="radio" name="reponse" class="form-check-input" id="radio1" value="<?= $tableau['reponse4'] ?>">
        <label for="radio1"><?= $tableau['reponse4']?></label>
        
        </div>
        
        <div class="mt-2">
        <input type="radio" name="reponse" class="form-check-input" id="radio1" value="<?= $tableau['reponse5'] ?>">
        <label for="radio1"><?= $tableau['reponse5']?></label>
        
        </div>
        
        <button type="submit" name="validerReponse" class="mt-2 btn btn-warning ms-5">Valider votre réponse</button>
        </div>
       
        
    </form>
    
<?php
//traitement de la question
// declenche un click
if(isset($_POST['validerReponse'])){
    // on va initialiser le score pour chaque nouvelle parti
    //$_SESSION['score'] = 0;
    //on garde la réponse par le joueur
    $reponseOk = trim(htmlspecialchars($_POST['reponse']));
    
    // resultat des reponses données
    if($reponseOk ===$tableau['reponse3']){
        //on augmente le score
        $_SESSION['score'] += 1;
        //on affiche la bonne réponse et l'etape suivante
        echo "<p class='mt-2 alerte alerte-success p-3'>Bien joué la réponse etait = " . $tableau['reponse3'] . "</p>";
        echo "<p class='mt-2 alerte alerte-success p-3'>Votre score est de = " . $_SESSION['score'] . "</p>";
        ?>
        <!--On affiche un lien pour continuer le jeu-->
        <a href="question4.php" class="btn btn-success bg-success">Passer à la question suivante</a>
        <style>
        #btn-ok{
        display: none;}
        #question{
        display: none;}
        #row{
        display: none;}
        </style>
        <?php
    }else{
        //si la réponse n'est pas correct
        $_SESSION['score'] += 0;
        // on affiche la bonne réponse et le message d'erreur
        echo "<p class='mt-2 alerte alerte-warning p-3'>Et non la réponse etait = " . $tableau['reponse3'] . "</p>";
        echo "<p class='mt-2 alerte alerte-success p-3'>Votre score est de = " . $_SESSION['score'] . "</p>";
        ?>
           <style>
        #btn-ok{
        display: none;}
        #question{
        display: none;}
        #row{
        display: none;}
        </style>
         <a href="question4.php" class="btn btn-sucess bg-danger">Passer à la question suivante</a>
        <?php
    }

    }
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>