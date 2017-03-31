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

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
          <div class="intro-heading">bienvenue sur l'histoire de la FHC</div>
          <a href="#timeline" class="page-scroll btn btn-xl">Suivre</a>
        </div>
      </div>
    </header>

    <!-- About Section -->
     <section id="timeline">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center">
                     <h2 class="section-heading">About</h2>
                     <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">
                     <ul class="timeline">
                         <li>
                             <div class="timeline-image">
                                 <img class="img-circle img-responsive img-centered" src="img/timeline/hackerz_logo.png" alt="">
                             </div>
                             <div class="timeline-panel">
                                 <div class="timeline-heading">
                                     <h4>2 Janvier 2017</h4>
                                     <h4 class="subheading">Lancement du jeu</h4>
                                 </div>
                                 <div class="timeline-body">
                                     <p class="text-muted">
                                       Le jeu est lancer debut janvier en phase alpha sur le playstore de google.
                                       Crée et regulierement mis a jour par un seul developpeur.
                                       !
                                     </p>
                                 </div>
                             </div>
                         </li>
                         <li class="timeline-inverted">
                             <div class="timeline-image">
                                 <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                             </div>
                             <div class="timeline-panel">
                                 <div class="timeline-heading">
                                     <h4>31 Mars 2017</h4>
                                     <h4 class="subheading">Lancement du site en Alpha</h4>
                                 </div>
                                 <div class="timeline-body">
                                     <p class="text-muted">
                                       Apres plusieur heures, jours, semaines. <br>
                                       Le site est enfin dispo en phase Alpha. La plupart des fonctionalité vont continuer à etre ameliorer certaine vont disparaitre et d'autres vont naitre afin d'aidez au maximum la communauté des joueur Franconphone !
                                     </p>
                                 </div>
                             </div>
                         </li>
                       <li class="timeline-inverted">
                           <div class="timeline-image">
                               <h4>Faites<br>partie de<br>l'histoire!</h4>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
    </section>

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
