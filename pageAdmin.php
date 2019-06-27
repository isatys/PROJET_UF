
<!--
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
                header('Location: AdminModif.php'); // La page je veux être rediriger 
    }else{
        echo"verifie ton pseudo";
    }
}
     }
    }
?>
if(!isset($_SESSION['admin'])){

?>

}
?>
!-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="AdminModif.php" method="post">
    <input type="text" name="pseudo" placeholder="insere ton pseudo"><br><br>
    <input type="password" name="pass" placeholder="******"><br><br>
    <input  name="sub" value="connexion" onclick="connexion(); return false;" type="submit">
 </form>
</body>
</html>