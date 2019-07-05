<?php
    if (isset($_POST['pseudo']) && isset($_POST['pass'])) {
 //CONNEXION A LA BDD
 $connect = new PDO('mysql:host=localhost;dbname=espaceadmin','root','');
 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $pseudo=htmlspecialchars(trim($_POST['pseudo']));
 $pass=htmlspecialchars(trim($_POST['pass']));

$req = $connect->prepare('SELECT id,pseudo, pass FROM membres WHERE pseudo =:pseudo AND pass = :pass');
$req->execute(array('pseudo' => $pseudo,
'pass'=> $pass));
$resultat = $req->fetch();
if(isset($_POST['sub'])){

    if(empty($pseudo) or empty($pass)){
        echo "tu dois remplire tous les champs";

    }else 
    {
        if (!$resultat) {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else {
            $_SESSION['admin']=$pseudo;
            header('Location:http://localhost/PROJET_UF_WEB/modifier.php'); // La page je veux être rediriger 
        }
     }
    }
}
?>