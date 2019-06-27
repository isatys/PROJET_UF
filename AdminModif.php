<?php
    if (isset($_POST['pseudo']) && isset($_POST['pass'])) {
 //CONNEXION A LA BDD
 $connect = new PDO('mysql:host=localhost;dbname=espaceadmin','root','');
 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $pseudo=htmlspecialchars(trim($_POST['pseudo']));
 $pass=htmlspecialchars(trim($_POST['pass']));

$req = $connect->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
$req->execute(array('pseudo' => $pseudo));
$resultat = $req->fetch();

if(isset($_POST['sub'])){

    if(empty($pseudo) or empty($pass)){
        echo "tu dois remplire tous les champs";

    }else 
        if($pseudo==$_POST['pseudo'] && $pass==$_POST['pass']){
        session_start();
    $_SESSION['admin']=$pseudo;
    header('Location: contact.php'); // La page je veux être rediriger 
}else{
    echo"verifie ton pseudo ou ton mot de passe";
}
     }
    }