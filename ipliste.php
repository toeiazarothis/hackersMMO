<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>
    <?php include("../model/function.php") ?>

    <title>Invitation</title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/agency.css">

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
            <li><a href="../index.php" class="text-center">Accueil</a></li>
            <li><a href="../histoire.php" class="text-center">Histoire</a></li>
            <li><a href="../tutoriel.php" class="text-center">Tutoriel</a></li>
            <li><a href="../contact.php" class="text-center">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Message d'accueil -->
    <header>
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading">
            Quoi qu'il arrive reste positif il faut i croire.
          </div>
          <a href="#client" class="page-scroll btn btn-xl">Voir les futurs victime</a>
        </div>
      </div>
    </header>
    <!-- FIN message d'accueil -->

    <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Liste de victimes potentiel</h2>
          <div class="col-md-12 text-center table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Inconnu</th>
                  <th>Pseudo</th>
                  <th>IP</th>
                  <th>Reputation</th>
                  <th>Rang particulier</th>
                  <th>Information bonus</th>
                  <th>Guilde</th>
                </tr>
              </thead>
              <?php echo listeJoueurs()?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <?php include("../footer.php");?>
  <!-- Fin footer -->
  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <!-- Contact Form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>
  <!-- Theme JavaScript -->
  <script src="../js/agency.min.js"></script>
</body>
</html>
