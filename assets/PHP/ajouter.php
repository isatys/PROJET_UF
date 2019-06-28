<?php
$param = parse_ini_file('db.ini');

  try {
    $dbh = new PDO($param['host'], $param['user'], $param['pass']);
  } catch (PDOException $e) {
      echo("Erreur de connexion");
      exit;
  }

  if(isset($_POST['nom'])) {
    $nom=$_POST['nom'];
  } else {
    $nom="";
  }

  if(isset($_POST['coeurs'])) {
    $coeur=$_POST['coeurs'];
  } else {
    $coeur="";
  }



  if(empty($nom)) {
    echo '<font color="red">Veuillez remplir tout les champs</font>';
    return;
  } else {
    $query = "INSERT INTO modifiercomp(competences, plus) VALUES(?, ?)";
    $sql = $dbh->prepare($query);
    $sql->execute([$nom, $coeur]);
    $dbh = null;
    echo('Competence ajoutée');
    var_dump($nom);
    // header('location: ../../modifier.php');
    exit;
  }
?>