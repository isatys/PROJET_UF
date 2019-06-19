<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/CSS/experiences.css">
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
    <!--MON EXPERIENCE PROFESSIONNELLE-->
<section class="bg-white "id="Expériences">
    <div class="col-lg-12 text-center">
        <h2 class="typo section-heading text-uppercase">Mon Expérience Professionnelle</h2>
        <h3 class="section-subheading text-muted">Pour finir, je partage avec vous mon expérience professionnelle en détailci-dessous</h3>
      </div>
    <div class="card-deck">
        <div class="col-sm-3">
          <div class="card">
            <img src="assets/IMG/equitation.jpg" class="card-img-top" alt="equitation">
            <p class="card-text">Mon stage de troisème à été fait dans un centre équestre pour découvrir le métier de monitrice et de palfrénier mais aussi d'autre comme osthéopathe équin</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <img src="assets/IMG/vente.png" class="card-img-top" alt="vente">
            <p class="card-text">Pour le stage préconniser par mon école, j'ai du faire mon expérience professionnel dans la vente grâce à l'entreprise Darty</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <img src="assets/IMG/bebe.jpg" class="card-img-top" alt="bebe">
            <p class="card-text">J'ai pu garder pendant 1 semaine et demi 8 enfants avec l'aide d'une autre babysiter.</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <img src="assets/IMG/mcdo.png" class="card-img-top" alt="mcdo">
            <p class="card-text">J'ai pu travailler chez Mcdo pendant 2 semaines à tous les postes.</p>
          </div>
        </div>
    </div>
</section>
</body>
</html>