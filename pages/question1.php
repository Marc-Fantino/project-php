<?php
session_start();


// question des tableaux
$question = array(

                array(
                "Questionone" =>"Comment faire un saut de ligne HTML ?",
                    "reponse1" => "&lt;tr&gt;",
                    "reponse2" => "&lt;br&gt;",
                    "reponse3" => "&lt;cr&gt;",
                    "reponse4" => "&lt;dr&gt;",
                    "reponse5" => "&lt;sautDeLigne&gt;"
                    
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

    <h1 class="text-center text-info">Quiz de culture Dev</h1>
    
   


<?php
    foreach ($question as $tableau){
?>
    <form method="post">
    <!--Afficher la question-->
    <div class="text-center container container-sm p-3 my-2 border bg-primary text-white w-50">
            <h2 class=" alert alert-sucess text-center"></h2>
             <h3 id="question" class="text-sucess"><?= $tableau['Questionone'] ?></h3>
        </div>
        <div id="row" class="container container-sm p-3 my-2 border bg-white text-primary w-25">
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
        
        <button type="submit" name="validerReponse" id="btn-ok" class="mt-2 btn btn-warning ms-5">Valider votre r??ponse</button>
        </div>
       
        
    </form>
    
<?php
//traitement de la question
// declenche un click
if(isset($_POST['validerReponse'])){
    // on va initialiser le score pour chaque nouvelle parti
    $_SESSION['score'] = 0;
    //on garde la r??ponse par le joueur
    $reponseOk = trim(htmlspecialchars($_POST['reponse']));
    
    
    // resultat des reponses donn??es
    if($reponseOk == $tableau['reponse2']){
        //on augmente le score
        $_SESSION['score'] += 1;
        //on affiche la bonne r??ponse et l'etape suivante
        echo "<p class='mt-2 alerte alerte-success text-center p-3'>Bien jou?? la r??ponse etait = " . $tableau['reponse2'] . "</p>";
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
        
        <!--On affiche un lien pour continuer le jeu-->
        <a href="question2.php" class="btn btn-success bg-success text-center p-3">Passer ?? la question suivante</a>
        <?php
    }else{
        //si la r??ponse n'est pas correct
        $_SESSION['score'] += 0;
        // on affiche la bonne r??ponse et le message d'erreur
        echo "<p class='mt-2 alerte alerte-warning text-center p-3'>Et non la r??ponse etait = " . $tableau['reponse2'] . "</p>";
        
        ?>
        
         <a href="question2.php" class="btn btn-sucess bg-danger text-center p-3">Passer ?? la question suivante</a>
         
         <style>
        #btn-ok{
        display: none;}
        #question{
        display: none;}
        #row{
        display: none;}
        
        </style>
      
         
        <?php
    }

    }
}

?>



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>