
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/CSS/pageAdmin.css">
 <title>PageAdmin</title>
</head>
<body>
    <section >
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="assets/IMG/retour.png" width="30" height="30" class="d-inline-block align-top" alt="retour" id="retour">
    RETOUR
  </a>
</nav>
</section>
<div class="card">
<div class="card-body">
<form action="http://localhost/PROJET_UF_WEB/assets/PHP/AdminModif.php" method="POST">
    <input type="text" name="pseudo" placeholder="insere ton pseudo"><br><br>
    <input type="password" name="pass" placeholder="******"><br><br>
    <input  name="sub" value="connexion"  type="submit">
 </form>
</div>
</div>
</body>
</html>