<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/CSS/contact.css">
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
     <!-- Clients -->
     <section class="bg-dark" class="py-5">
        <div class="container">
            <div class="col-md-2 col-sm-4">
              <a href="https://www.ynov.com/">
                <img class="img-fluid d-block mx-auto" src="assets/IMG/YNOV CAMPUS.png" alt="">
              </a>
            </div>
        </div>
      </section>
  
      <!-- FORMULAIRE -->
      <section class="bg-dark" id="Contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase typo">Contactez moi</h2>
              <h3 class="section-subheading text-muted"></h3>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <form id="contactForm" name="sentMessage" action="assets/PHP/main.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" id="name" name="name" type="text" placeholder="Votre nom *" required="required" data-validation-required-message="Please enter your name.">
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="mail" name="mail" type="mail" placeholder="Votre adresse mail " required="no-required" data-validation-required-message="Please enter your email address.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea class="form-control" id="message" name="message" placeholder="Votre message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-lg-12 text-center">
                    <div id="success"></div>
                    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer le message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Footer -->
      <footer class="bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/isatys.riviere83">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/isatys-riviere-9931a9171/">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
              </ul>
          </div>
        </div>
      </footer>
</body>
</html>