<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/CSS/diplomes.css">
  <script src="assets/JS/main.js"></script>
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
                  </ul>
                  </div>
        </nav>
      </div>
      </section>
     <!--Diplômes-->
  <section class="bg-white" id="Diplômes">
      <div class="col-lg-12 text-center">
          <h3 class="typo section-heading text-uppercase">Mes Diplômes</h2>
          <h4 class="section-subheading text-muted">Ici, sera décrit mes diplômes <br> dont j'ai acquis mais aussi ce dont <br>je suis entrain de passer et ce dont j'aimerai passer.</h3>
        </div>
    <div class="container">
          </div>
      <div class="card-deck">
            <div class="card">
                <img src="assets/IMG/Bac.jpg" height=40%  class="card-img-top" alt="Baccalauréat">
              <div class="card-body">
                <h5 class="card-title">Baccalauréat</h5>
                <p class="card-text">J'ai passée, le baccalauréat en science de l'ingenieur avec une option ISN dans le lycée Jules Ferry, cannes.</p>
                <p class="card-text"><small class="text-muted">Avant</small></p>
              </div>
            </div>
            <div class="card"style="width: 50%;">
                <img src="assets/IMG/Bachelor.jpg" class="card-img-top"  alt="Bachelor">
              <div class="card-body">
                <h5 class="card-title">Bachelor</h5>
                <p class="card-text">Actuellement en Bachelor 1ère année, sur 3 ans en ingésup dans le campus d'Ynov sur Aix-en-Provence.</p>
                <p class="card-text"><small class="text-muted">De nos jours</small></p>
              </div>
            </div>
            <div class="card" style="width: 50%;">
              <img src="assets/IMG/master.jpg" class="card-img-top" alt="Master">
              <div class="card-body">
                <h5 class="card-title">Master</h5>
                <p class="card-text">Ainsi j'aimerai après mon bachelor continuer sur un master en 2 ans, toujours en Ingésup.</p>
                <p class="card-text"><small class="text-muted">Plus tard</small></p>
              </div>
            </div>
          </div>
    </div>
  </section>
</body>
</html>