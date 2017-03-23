<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>

    <title>Invitation</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/agency.css">

  </head>
  <body id="page-top" class="index">

    <!--  -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll"> <button type="button" class="navbar-toggle"
            data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle
              navigation</span> Menu </button> <a class="navbar-brand page-scroll"
            href="#page-top">F.H.C.</a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="text-center">Accueil</a></li>
            <li><a href="histoire.php" class="text-center">Histoire</a></li>
            <li><a href="tutoriel.php" class="text-center">Tutoriel</a></li>
            <li><a href="contact.php" class="text-center">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--  -->
    <header>
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bonjour!</div>
          <div class="intro-heading">Ici ce trouve different tutoriel</div>
          <a href="#portfolio" class="page-scroll btn btn-xl">Suivre</a>
        </div>
      </div>
    </header>

    <section id="portfolio" class="bg-light-gray">
      <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Les differents tutoriel</h2>
                <h3 class="section-subheading text-muted">Pour des joueurs casu ou pour des joueurs plus experimente ,<br>des tutoriel seront disponible regulierement ici sous différents contenues.</h3>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#Modal1" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img src="img/tutoriel/Virus_Delete_Ip_History.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Eviter les effet du virus "delete ip history"</h4>
              <p class="text-muted">Texte</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 portfolio-item">
            <a href="#Modal2" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img src="img/portfolio/TSR/tsr.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maitriser la technique du "Bounce"</h4>
              <p class="text-muted">Texte</p>
            </div>
          </div>
          <!--
          <div class="col-md-4 col-sm-4 portfolio-item">
            <a href="#Modal3" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img src="img/portfolio/POGO3/pogo3.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Po Go 3</h4>
              <p class="text-muted">Website</p>
            </div>
          </div> -->
        </div>
      </div>
    </section>


    <?php include('modal.php') ?>
    <?php include('footer.php') ?>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.js"></script>

  </body>
</html>
