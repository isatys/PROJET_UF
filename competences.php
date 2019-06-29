<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/CSS/competences.css">
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
                      <li class="nav-item">
                    <?php echo '<a class="nav-link" href="pageAdmin.php" style="color: aliceblue">+</a>'; ?>
                    </li>
                    </ul>
                    </div>
          </nav>
        </div>
        </section>
      <!--COMPETENCES-->
    <section name="comp" id="Compétences" action="assets/PHP/main.php" method="post">
        <div class="col-lg-12 text-center">
          <h2 >Compétences</h2>
          <h3 class="section-subheading ">Je présente ici mes compétences en informatique</h3>
        </div>
      <div class="coeur">
      <?php
                        $parameters = parse_ini_file('assets/php/db.ini');
                        $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
                        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = $connect->prepare("SELECT * FROM modifiercomp");
                        $sql->execute();
                         while ($row = $sql->fetch()) {
                         echo "<h4> ".$row['competences']." </h4>";
                         $a = 1;
                         while ($a <= $row['plus']) {
                           $a++;
                           echo "<img src='https://img.icons8.com/ios/50/000000/heart-health-filled.png' name='coeur' alt='coeur'>";
                         }
                         }
                        
                        ?>
       
          <div id="html&css">
            <h4>  HTML & CSS </h4>
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png" name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png" name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
          </div>
          <div id="python">
            <h4>  Python </h4>
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
          </div>
          <div id="JAVA">
            <h4>  Java </h4>
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png"name="coeur" alt="coeur">
          </div>
          <div id="SQL">
            <h4>  SQL </h4>
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png">
            <img src="https://img.icons8.com/ios/50/000000/heart-health-filled.png">
          </div>
        </div>
    </section>
  </body>
</html>