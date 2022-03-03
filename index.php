<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="issets/css/bootstrap.css">
    <link rel="stylesheet" href="issets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2? family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
<header></header>




<div class="container text-center p-4">
<h1>Formulaire de connexion</h1>
<form id="formulaire-connexion" method="POST">

              <label  for="prenom" class="form-label p-3 text-center">Votre prenom : </label>  
              <input class="form-control" type="text" id="prenom" name="prenom" required/><br/>  


              <label  for="email"class="form-label p-3">Votre email : </label>  
              <input class="form-control" type="email" id="email" name="email" required/><br/>  


              <label for="password"class="form-label p-3">Mot de passe: </label>  
              <input class="form-control" type="password" id="password" name="password" required/><br/>  

              <button type="submit"class="btn btn-primary" name="btn-connexion">connexion</button>

</form>

</div>


<?php
if(isset($_POST['btn-connexion'])){
connexion();
}

function connexion(){

    
    /*declanche un clic*/
    $mailUser = trim(htmlspecialchars($_POST['email']));
    $passwordUser = trim(htmlspecialchars($_POST['password']));
    $prenomUser = trim(htmlspecialchars($_POST['prenom']));


    if(isset($mailUser) && !empty($mailUser) && isset ($passwordUser) && !empty($passwordUser) && isset ($prenomUser) && !empty($prenomUser)){
        //login de connexion
        echo "test";
        $mail = "essai@gmail.com";
        $password1 = "1234";
        $prenom = "";
        //condition d'égalité pour établire la connexion
        
        if($mailUser == $mail && $passwordUser == $password1 || $prenomUser == $prenom){
        $_SESSION['prenom'] = $prenomUser;
        header("Location: pages/multiplication.php");
        
        }else{
        echo "mail inconnu et mot de passe incorrect";
        }
    }
}


?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>