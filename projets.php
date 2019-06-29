<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/CSS/projets.css">
  <script src="assets/JS/projets.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
      <!--MENU-->
      <section class="menu" id="mainNav">
      <div class="container">
        <nav id="navbar-example" class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #533a35">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                  <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
                      <?php  echo'<a class="nav-link " href="index.php" style="color: aliceblue">Accueil </a>'; ?>
                    </li>
                    <li class="nav-item">
                    <?php  echo'<a class="nav-link " href="diplomes.php" style="color: aliceblue">Diplômes </a>'; ?>
                    </li>
                    <li class="nav-item">
                    <?php echo'<a class="nav-link " href="projets.php" style="color: aliceblue">Projets</a>'; ?>
                    </li>
                    <li class="nav-item">
                    <?php echo'<a class="nav-link " href="competences.php" style="color: aliceblue">Compétences</a>'; ?>
                    </li>
                    <li class="nav-item">
                    <?php echo '<a class="nav-link " href="experiences.php" style="color: aliceblue">Expériences</a>'; ?>
                    </li>
                    <li class="nav-item">
                    <?php echo '<a class="nav-link" href="contact.php" style="color: aliceblue">Contact</a>'; ?>
                    </li>
                    <li class="nav-item">
                    <?php echo '<a class="nav-link" href="pageAdmin.php" style="color: aliceblue">+</a>'; ?>
                    </li>
                  </ul>
                  </div>
        </nav>
      </div>
      </section>   

<div class="polaroid">
  <img src="assets/IMG/chaise.jpg" alt="5 Terre" style="width:100%">
  <div class="container">
  <p> Création d'une chaise roulante pour <br> bébés handicapés avec application Android et modélisation de la chaise.</p>
  <h4> années 2017-2018 </h4>
  </div>
</div>

<div class="polaroid">
  <img src="assets/IMG/archee.jpg" alt="Norther Lights" style="width:100%">
  <div class="container">
  <p>J'ai pu integrer une Start-up ayant pour but de construire une "archeeveuse"</p>
  <h4> années 2018-2019 </h4>
  </div>
</div>
<div class="polaroid">
  <img src="assets/IMG/jeux.jpg" alt="Norther Lights" style="width:100%">
  <div class="container">
  <p>Création d'un jeu en Java à l'aide du logiciel Processing</p>
  <h4> années 2017-2018 </h4>
  </div>
  </div>
</body>
</html>