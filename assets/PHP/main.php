<?php
  $parameters = parse_ini_file('db.ini');
 
  try {
    if (isset($_POST['name']) && isset($_POST['mail'])) {
      //CONNEXION A LA BDD
      $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //ON PREPARE NOTRE REQUETE
      $stmt = $connect->prepare("INSERT INTO client(name, message, mail) VALUES (:name, :message, :mail)");
      $stmt->bindParam(':name', $name); //ON DEFINIS LES PARAMETRES SELON NOTRE FORMULAIRE
      $stmt->bindParam(':message', $message);
      $stmt->bindParam(':mail', $mail);

      $name = $_POST['name'];
      $message = $_POST['message'];
      $mail = $_POST['mail'];

      $stmt->execute(); //ON EXECUTE NOTRE REQUETTE PRECEDEMENT PREPAREE
      header("location:http://localhost/PROJET_UF_WEB/contact.php? note=success");
    }
  }catch (\Exception $e) {
    echo $e -> getMessage() . "<br>";
    echo $e -> getCode() . "<br>";
  }
  /*ini_set("SMTP", "smtp.free.fr");

  if (isset ($_POST['message'])  && isset($_POST['mail']) && isset($_POST['name'])) {
    $position_arobase = strpos($_POST['mail'], '@');
    if($position_arobase === false)
        echo '<p>Votre email doit comporter un arobase.</p>';
    else {
        $retour = mail('isatys.riviere@free.fr', 'Envoi depuis page Contact', $_POST['message']);
        if($retour)
            echo '<p>Votre message a été envoyé.</p>';
        else
            echo '<p>Erreur.</p>';
    }
  }*/
?>