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
      echo "Informations delivered !"; //ON ENVOIE UN PETIT MESSAGE
    }
  }catch (\Exception $e) {
    echo $e -> getMessage() . "<br>";
    echo $e -> getCode() . "<br>";
  }
?>