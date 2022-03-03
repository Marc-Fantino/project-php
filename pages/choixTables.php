
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

<div class="container">
<h3 class="text-center text-info">Resultat</h3>
<?php
if(isset($_POST['table'])){
 $multiple = $_POST['table'];
 foreach ($multiple as $table){
    echo " Table du ".$table;
    for($i = 1; $i <=10 ; $i++){
        $resultat = $i * $table;
        echo "<ul class='list-group'>
        <li class='list-group-item'>
            $i X $table = $resultat
        </li>
       </ul>";
        }
 }

}


?>
<div class="text-center">
        <a href="../pages/multiplication.php" class="mt-3 btn-outline-danger">Retour</a>
        <div>

</div>
</body>
</html>