<?php

if(isset($_POST['sub'])){

    $pseudo=htmlspecialchars(trim($_POST['pseudo']));
    $passeword=htmlspecialchars(trim($_POST['passeword']));

    if(empty($pseudo) or empty($passeword)){
        echo "tu dois remplire les champs";
    }else
     if(isset($pseudo) and !empty($pseudo)){

        if(isset($passeword) and !empty($passeword)){

            $admin1="louis";
            $mdp1="bebe";
            $admin2="louis";
            $mdp2="bebe";

            if($pseudo===$admin1 and $passeword===$mdp1){

                $_SESSION['admin']=$pseudo;
    }else{
        echo"verifie ton pseudo";
    }
}







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if(!isset($_SESSION['admin'])){

?>

<form action="index.php" method="post">
    <input type="text" name="pseudo" placeholder="insere ton pseudo"><br><br>
    <input type="passeword" name="passeword" placeholder="******"><br><br>
    <input type="submit" name="sub" value="connexion" onclick="connexion(); return false;">
 </form>

 <?php
}
?>
</html>