<?php
if(isset($_POST['sub'])){

    $pseudo=htmlspecialchars(trim($_POST['pseudo']));
    $passeword=htmlspecialchars(trim($_POST['passeword']));

    if(empty($pseudo) or empty($passeword)){
        echo "tu dois remplire les champs";
    }else
     if(isset($pseudo) and !empty($pseudo)){

        if(isset($passeword) and !empty($passeword)){

            $admin1="isatys";
            $mdp1="01234";

            if($pseudo===$admin1 and $passeword===$mdp1){

                $_SESSION['admin']=$pseudo;
                header('Location: index.php'); // La page où tu veux rediriger le membre
    }else{
        echo"verifie ton pseudo";
    }
}
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

<form action="" method="post">
    <input type="text" name="pseudo" placeholder="insere ton pseudo"><br><br>
    <input type="passeword" name="passeword" placeholder="******"><br><br>
    <input  name="sub" value="connexion" onclick="connexion(); return false;" type="submit">
 </form>
 <?php
}
?>
</body>
</html>