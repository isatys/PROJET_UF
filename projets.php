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
                  </ul>
                  </div>
        </nav>
      </div>
      </section>
    <!--PROJET-->
  <section id="Projets">       
    <div class="col-lg-12 text-center">
          <h2 class="typo section-heading text-uppercase">Projets</h2>
          <h3 class="section-subheading ">Voici mes projets que j'ai pu créer.</h3>
    </div>
    </section>
  <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/IMG/archee.jpg" style="width:100%">
  <div class="text">1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/IMG/jeux.jpg" style="width:100%">
  <div class="text">2</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/IMG/chaise.jpg" style="width:100%">
  <div class="text">3</div>
</div>
<!-- Next and previous buttons -->
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span> 
<span class="dot" onclick="currentSlide(2)"></span> 
<span class="dot" onclick="currentSlide(3)"></span> 
</div>
</body>
</html>