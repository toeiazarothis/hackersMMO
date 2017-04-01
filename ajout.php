<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <?php include("model/function.php") ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>
    <link rel="shortcut icon" href="img/ .png"/>
    <!-- Balise OpenGraph -->
    <!-- <meta property="og:title" content="Azarothis Technologie a votre ecoute"/>
    <meta property="og:type" content="website">
    <meta property="og:description" content="Pour prendre contact avec l'entreprise Azarothis Technologie rien de mieux que cette page.">
    <meta property="op:markup_version" content="v0.1">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="http://patrick.hol.es/CV/contact.php">
    <meta property="og:image" content="http://patrick.hol.es/CV/img/header/header-bg.jpg"> -->
    <title>La creation</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
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
            <li><a href="ajout.php"><i class="fa fa-plus"></i></a></li>
            <li><a href="ipliste.php"><i class="fa fa-database"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <header>
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bonjour!</div>
          <div class="intro-heading">Quoi qu'il arrive reste positif il faut i croire.</div>
          <a href="#Ajout" class="page-scroll btn btn-xl">Ajouter des informations</a>
        </div>
      </div>
    </header>
    <!-- Header -->

    <!-- Formulaire ajout joueur -->
    <section id="Ajout">
      <div class="container text-center">
        <h2 class="section-heading">Ajouter des informations</h2>
        <h3 class="section-subheading text-muted">Il vous suffit de remplir le formulaire integralement.</h3>

        <div class="row">
          <div class="col-md-10 col-md-offset-1 text-center">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseJoueur" aria-expanded="false" aria-controls="collapseJoueur">Ajout Nouveau Joueur</button> <br>
            <div class="collapse" id="collapseJoueur">
              <div class="well">
                <form class="form-horizontal" role="form" method="post" action="traitement.php">
                  <div class="form-group">
                		<label for="name" class="col-sm-2 control-label">Pseudo</label>
                		<div class="col-sm-10">
                			<input type="text" class="form-control" id="Pseudo" name="Pseudo" placeholder="Pseudo" value="" required="">
                		</div>
                	</div>
                  <div class="form-group">
                		<label for="name" class="col-sm-2 control-label">IP</label>
                		<div class="col-sm-10">
                			<input type="text" class="form-control" id="IP" name="IP" placeholder="IP" value="" required="">
                		</div>
                	</div>
                  <div class="form-group">
                		<label for="name" class="col-sm-2 control-label">Reputation</label>
                		<div class="col-sm-10">
                			<input type="number" class="form-control" id="Reputation" name="Reputation" placeholder="Reputation" value="" required="">
                		</div>
                	</div>
                	<div class="form-group">
                		<label for="email" class="col-sm-2 control-label">Rang Particulier</label>
                		<div class="col-sm-10">
                       <select class="form-control" id="Rang_Special" name="Rang_Special" required="">
                         <option value="Joueur Lambda">Joueur Lambda</option>
                         <option value="Membre de la FHC">Membre de la FHC</option>
                         <option value="Top 100">Top 100</option>
                         <option value="Moderateur">Moderateur</option>
                         <option value="Developpeur">Developpeur</option>
                       </select>
                		</div>
                	</div>
                  <div class="form-group">
                		<label for="name" class="col-sm-2 control-label">Informations sup</label>
                		<div class="col-sm-10">
                			<input type="text" class="form-control" id="Informations_Sup" name="Informations_Sup" placeholder="Informations Supplementaire" value="">
                		</div>
                	</div>
                  <div class="form-group">
                		<label for="name" class="col-sm-2 control-label">Nom de guilde</label>
                		<div class="col-sm-10">
                			<input type="text" class="form-control" id="Nom_De_Guilde" name="Nom_De_Guilde" placeholder="Nom complet de la guilde" value="">
                		</div>
                	</div>
                  <div class="form-group">
                		<label for="name" class="col-sm-2 control-label">Abreviation guilde</label>
                		<div class="col-sm-10">
                			<input type="text" class="form-control" id="Blason_Guilde" name="Blason_Guilde" placeholder="Abreviation de la guilde" value="">
                		</div>
                	</div>
                	<div class="form-group">
                		<div class="col-sm-8 col-sm-offset-2">
                      <input name="reset"  type="reset" value="Effacer" class="btn btn-danger">
                      <input name="submit" type="submit" value="Envoyer"class="btn btn-success">
                		</div>
                	</div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin du formulaire d'ajout -->
    <!-- Footer -->
    <?php include("footer.php");?>
    <!-- Fin footer -->
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
