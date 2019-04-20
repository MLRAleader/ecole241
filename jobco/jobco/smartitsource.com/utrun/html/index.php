<!doctype html>
<html lang="en">

<!-- Mirrored from smartitsource.com/utrun/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2019 20:51:59 GMT -->

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Utrun is a App Landing Page Template">
<meta name="keywords" content="app landingpage, html5, css3, jquery, bootstrap">
<meta name="author" content="Anik">
<!-- Page Title -->
<title>JobConnect</title>
<!-- Place favicon.ico in the root directory -->
<link rel="apple-touch-icon" href="apple-touch-icon.html">
<!-- Flat icon Fonts css-->
<link href="assets/icon-fonts/flaticon.css" rel="stylesheet" media="screen">
<!-- Costom Web Fonts css-->
<link href="assets/web-fonts/fonts.css" rel="stylesheet" media="screen">
<!-- Bootstrap css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<!-- Animate Tab css -->
<link href="assets/css/tab.css" rel="stylesheet" media="screen">
<!--Wow Animate css -->
<link href="assets/css/animate.css" rel="stylesheet" media="screen">
<!-- Font Awesome icon css-->
<link href="assets/fontawesome-free-5.3.1/css/all.min.css" rel="stylesheet" media="screen">
<!-- Carousel css -->
<link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
<!-- Carousel default css -->
<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
<!-- Style css -->
<link href="assets/css/style.css" rel="stylesheet" media="screen">
<!-- Responsive css -->
<link rel="stylesheet" href="assets/css/responsive.css">
<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="assets/images/normal/logo1.png" />
<!--Modernizr Js-->

<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>

<style>
.colorBtn {
background: blue;
}

.colorBtnHover:hover {
background: blue;
}
/*DEBUT CARTE DE PROFIL*/

.card-profil1{
    width: 350px; height: 250px;
    margin: 0 auto; 
    transition: all .3s ease-in;
    box-shadow: 5px 3px 15px #999;  
    border: 1px solid white;
}

.card-profil2{
    width: 350px; height: 250px;
    margin: 0 auto; 
    transition: all .3s ease-in;
    box-shadow: 5px 3px 15px #999;  
    border: 1px solid white;
}

.card-profil3{
    width: 350px; height: 375px;
    margin: 0 auto; 
    transition: all .3s ease-in;
    box-shadow: 5px 3px 15px #999;  
    border: 1px solid white;
}

.card-profil4{
    width: 350px; height: 300px;
    margin: 0 auto; 
    transition: all .3s ease-in;
    box-shadow: 5px 3px 15px #999;  
    border: 1px solid white;
}

/*FIN DE LA CARTE DE PROFIL*/

</style>
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- Preloader css -->
<div id="loading">
<div class="lds-dual-ring"></div>
</div>
<!-- Preloader css -->
<!-- Start Header -->
<header id="header-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top sticky-hidden">
<div class="container">
<!--Zone logo-->
<a class="navbar-brand logo-blue" href="index.php"><img src="assets/images/normal/logo1.png" alt="Footer Logo" width="160"></a>
<a class="navbar-brand logo-light" href="index.php"><img src="assets/images/normal/logo1.png" alt="Footer Logo" width="100"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse main-menu navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link utrun-scroll" href="#amazing-features">Partenaires<span class="sr-only">(current)</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link utrun-scroll" href="#pourquoi">Pourquoi Job
Connect
</a>
</li>
<li class="nav-item">
<a class="nav-link utrun-scroll" href="#pricing-table-section">Comment ça marche</a>
</li>
<li class="nav-item">
<a class="nav-link utrun-scroll" href="#client-section">Formules</a>
</li>
<li class="nav-item">
<a class="nav-link utrun-scroll" href="#">Les clients</a>
</li>
<li class="nav-item">
<a class="nav-link utrun-scroll" href="#">contact</a>
</li>
<!-- <li class="nav-item">
<a class="nav-link download-list hvr-sweep-to-blue" href="#">Download</a>
</li> -->
</ul>
</div>
</div>
</nav>
<!-- Navigation -->
</header>
<!-- End Header -->
<!-- Banner Area -->
<section id="banner-area">
<div class="container">
<div class="row">
<!-- Start Col -->
<div class="col-lg-6 col-md-6">
<div class="free-trial">
<h1>Maximiser Vos Chances <br>D'obtenir Un Emploi.</h1>
<p>Envoyez-nous votre CV, nos experts en recrutement vont l'évaluer, l'améliorer et l'enregistrer dans leur base de
données.</p>
<div class="trial-form">
<?php
if (isset($_POST['submit']) && isset($_POST['email'])) {
if (preg_match('/@/', $_POST['email']) == true) { //Vérification de l'email.
if (!empty($_FILES)) {
$file_name = $_FILES['fichier']['name'];
$file_extension = strrchr($file_name, ".");
$file_tmp_name = $_FILES['fichier']['tmp_name'];
$file_dest = 'files/' . $file_name;

$extension_autorisee = array('.pdf', 'PDF', 'docx');
if (in_array($file_extension, $extension_autorisee)) {
  if (move_uploaded_file($file_tmp_name, $file_dest)) {
    ?>
    <span class="text-success">Fichier envoyer avec succès</span>
  <?php
  //Redirection vers la zone de payement.

} else {
  ?>
    <span class="text-danger">Une erreur est survenu lors de l\'envoi du fichier</span>
  <?php
}
} else {
?>
  <span class="text-danger">Seuls les fichiers PDF sont autorisés.</span>
<?php
}
}
} else {
?>
<span class="text-danger">Oups!!! L'adresse est incorrecte.</span>
<?php
}
}


?>
<form method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="exampleInputEmail1">Entrez votre adresse email</label>
<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse email">
<small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit.</small>
</div>
<label for="exampleInputEmail1">Sélectionnez un CV</label>
<div class="form-group">
<input type="file" name="fichier">
</div>
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" name="accepte" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1"><span class="text-info">J'accepte</span> les termes & conditions d'utilisation de ce service</label>
</div>
<input type="submit" name="submit" value="Envoyer" class="btn btn-danger colorBtn colorBtnHover">
</form>
</div>
</div>
</div>
<!-- End Col -->
<!-- Start Col -->
<div class="col-lg-6 col-md-6">
<div class="working-person">
<img src="assets/images/normal/person.png" alt="">
</div>
</div>
<!-- End Col -->
</div>
</div>
</section>
<!-- Banner Area -->

<!--   Client Logo Area -->
<!-- Grow business section -->


<!-- Grow business section -->
<!-- Pourquoi JobConnect -->
<section id="pourquoi" class="bg-white defalut-space">
  <div class="container">
  <div class="row">
  <section id="friendly-interface" class="bg-white defalut-space">
  <div class="container-fluid">
  <!--  Start Row -->
  <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

  </ol>
  <div class="carousel-inner">
  <div style="position: relative; overflow: hidden;" class="carousel-item active">
  <img style="height: 400px; filter: contrast(50%); width: 600px" src="assets/images/client-logo/statistik.jpg" class="d-block w-100" alt="images">
  <div class="carousel-caption d-none d-md-block" style="margin-bottom: 2em; position: absolute; left: 10em;  color:#fff;   font-size: 40px; font-weight: bold;">
  <h5></h5>
  <p style="width: 500px;">90 % des CV sont disqualifiés <br><br> à cause de la forme <br><br><span style="font-size:20px; ">(Etude réalisée par le cabinet HAKKI COM 2016)</span>
  </p>
  <h3></h3>
  </div>
  </div>
  <div class="carousel-item">
  <img style="height: 400px; filter: contrast(50%);" src="assets/images/client-logo/satistik2.jpg" class="d-block w-100" alt="images">
      <h5></h5>
<!-- <p style="width: 700px;">Seulement 2 % des CV physiques <br><br> déposés en<br><br> entreprise parviennent aux <br><br> ressources humaines <br><br><span style="font-size:20px; ">(Alt emploi Gabon)</span> -->
    </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span   class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
  </div>
  </div>
<!--Début pourquoi2 JobConnect-->
    
<!--Fin Pourquoi2 JoBConnect-->
</section>
<!--Fin Pourquoi JoBConnect-->


<!-- Zone Partenaires-->
<section id="amazing-features" class="bg-gray defalut-space">
<div class="container">
<div class="card-group">
<div class="card mr-md-3">
<img src="http://jobconnect.pro/webroot/images/partenaires/mr.png" class="img-responsive serviceImage" alt="Service" />
<div class="card-body">
<h5 class="card-title">MandealR, un partenaire RH et en gestion de carrière professionnelle.</h5>
</div>
</div>
<div class="card mr-md-3">
<img src="http://jobconnect.pro/webroot/images/partenaires/yorha.png" class="img-responsive serviceImage" alt="Service" />
<div class="card-body">
<h5 class="card-title">Yorha consulting, un partenaire au service du RH et consulting comptable.</h5>

</div>
</div>
<div class="card">
<img src="http://jobconnect.pro/webroot/images/partenaires/alt.jpg" class="img-responsive serviceImage" alt="Service" />
<div class="card-body">
<h5 class="card-title">Altemploi, un partenaire au de l'employabilité.</h5>
</div>
</div>
</div>
<!-- Fin Zone Partenaires-->

</div>
</section>
<!-- Aamzing Features Section -->
<!-- Pricing Table Section -->
<section id="pricing-table-section" class="bg-white defalut-space">
<div class="row">
<!--  Start Col -->
<div class="col-lg-8  col-md-8 offset-2">
<div class="tab-features">
<!-- Nav tabs -->
<ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#one" role="tab" aria-selected="true"><span><i class="flaticon-bulb"></i></span></a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#two" role="tab" aria-selected="false"><span><i class="flaticon-design"></i></span></a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#three" role="tab" aria-selected="false"><span><i class="flaticon-search"></i></span></a>
</li>
</ul>
<!-- Tab panes -->
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane container fade show active no-padding" id="one" role="tabpanel" aria-labelledby="pills-home-tab">
<!--  Start row -->
<div class="row">
<div class="col-lg-4 col-md-4 padding-left">
<div class="tab-thumb" data-toggle="modal" data-target="#exampleModal">
<img src="assets/images/normal/tab-thumb.png" alt="Tab-img">
</div>
</div>
<div class="col-lg-8 col-md-8">
<div class="tab-info">
<h2>Soumission de votre CV.</h2>
<p>Soumettez votre CV à l'appréciation de nos coachs partenaires.</p>
</div>
</div>
</div>
<!--  End row -->
</div>
<div class="tab-pane container fade no-padding" id="two" role="tabpanel" aria-labelledby="pills-profile-tab">
<!--  Start row -->
<div class="row">
<div class="col-lg-4 col-md-4 padding-left">
<div class="tab-thumb">
<img src="assets/images/normal/tab-thumb.png" alt="Tab-img">
</div>
</div>
<div class="col-lg-8 col-md-8">
<div class="tab-info">
<h2>Paiement du service</h2>
<p>Payez grâce à Airtel Money, votre coaching en fonction de votre bourse.</p>
</div>
</div>
</div>
<!--  End row -->
</div>
<div class="tab-pane container fade no-padding" id="three" role="tabpanel" aria-labelledby="pills-profile-tab">
<!--  Start row -->
<div class="row">
<div class="col-lg-4 col-md-4 padding-left">
<div class="tab-thumb">
<img src="assets/images/normal/tab-thumb.png" alt="Tab-img">
</div>
</div>
<div class="col-lg-8 col-md-8">
<div class="tab-info">
<h2>Coaching et enregistrement du CV</h2>
<p>Amélioration et introduction de votre CV dans la base de nos partenaires recrutement.</p>
</div>
</div>
</div>
<!--  End row -->
</div>
<div class="tab-pane container fade no-padding" id="four" role="tabpanel" aria-labelledby="pills-profile-tab">
<!--  Start row -->
<div class="row">
<div class="col-lg-4 col-md-4 padding-left">
<div class="tab-thumb">
<img src="assets/images/normal/tab-thumb.png" alt="Tab-img">
</div>
</div>
</div>
<!--  End row -->
</div>
</div>
</div>
</div>
<!--  End Col -->
</div>
</section>
<!-- Pricing Table Section -->

<!--  Client Section -->
<section id="client-section" class="bg-white defalut-space">
<div class="container">
<!--Début Zone Formules -->
<div class="row">
<section id="pricing-table-section" class="bg-white defalut-space">
<div class="container">
<!--  Start Row -->
<div class="row">
<div class="col-lg-12">
<div class="default-title text-center">
<h1>Formules</h1>
<p>Nous vous proposons nos meilleurs services à moindre cout</p>
</div>
</div>
</div>
<!--  End Row -->
<!--  Start Row -->
<div class="row ">
<div class="cd-pricing-container cd-has-margins">
<div class="cd-pricing-switcher">
<p class="fieldset">

<label for="monthly-2" class="active" style="background-color: blue;">FORMULES</label>


</p>
</div> <!-- .cd-pricing-switcher -->
<ul class="cd-pricing-list cd-bounce-invert">
<li>
<ul class="cd-pricing-wrapper">
  <li data-type="monthly" class="is-visible">
    <header class="cd-pricing-header normal-bg1">
      <div class="cd-price">
        <h3> <span class="cd-value">3000fr</span></h3>
      </div>
      <h2>Etudiants</h2>
    </header> <!-- .cd-pricing-header -->
    <div class="cd-pricing-body">
      <ul class="cd-pricing-features">
        <li><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 191 191" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,191.99519v-191.99519h191.99519v191.99519z" fill="none"></path>
                <g fill="#c80080">
                  <g id="surface1">
                    <path d="M95.5,7.52063c-1.91,0 -3.83492,0.49242 -5.53602,1.49219c-0.02984,0 -0.04476,0.01492 -0.07461,0.02985c0,0 -20.09977,12.23594 -40.22938,24.75539c-10.05734,6.26719 -20.11469,12.59406 -27.72484,17.5332c-3.79016,2.47703 -6.96852,4.59594 -9.25156,6.2075c-1.14899,0.8207 -2.07414,1.49219 -2.80531,2.08906c-0.35813,0.29844 -0.67149,0.56703 -1.01469,0.92516c-0.17906,0.17906 -0.35812,0.37305 -0.59687,0.71625c-0.22383,0.3432 -0.67149,0.77594 -0.7461,2.14875c-0.1343,2.3875 0.56703,2.50687 0.92516,3.0739c0.3432,0.56703 0.74609,1.07438 1.20867,1.67125c0.94008,1.16391 2.16367,2.55164 3.62602,4.13336c0.52226,0.55211 1.2982,1.32805 1.88015,1.93985c0,12.66867 0.02985,39.14008 0.04477,45.25805c-2.31289,1.37281 -3.74539,3.86477 -3.74539,6.56562c0,0.88039 0.16414,1.76078 0.46258,2.59641c-2.58148,2.08906 -4.28258,5.20773 -4.28258,8.74422c0,4.50641 2.34273,8.34133 4.37211,11.71367c2.02938,3.38727 4.05875,6.01352 4.05875,6.01352c0.71625,0.94008 1.83539,1.49219 3.01422,1.49219c1.17883,0 2.29797,-0.53719 3.02914,-1.46234c0,0 2.02938,-2.59641 4.07367,-5.95383c2.0443,-3.37235 4.37211,-7.25203 4.37211,-11.8032c0,-3.53648 -1.70109,-6.65515 -4.28258,-8.74422c0.29844,-0.83562 0.46258,-1.71602 0.46258,-2.59641c0,-2.65609 -1.38773,-5.1182 -3.64094,-6.50594c0,-4.95406 -0.02984,-22.53203 -0.04477,-37.17039c0.29844,0.29844 0.53719,0.56703 0.85055,0.86547c7.08789,7.10281 13.11633,12.8925 14.17578,13.92211c-3.83492,2.02938 -7.52062,6.84914 -7.52062,14.4593c0,7.83399 4.84961,15.28 12.42992,17.42875c4.87945,12.37024 11.08695,25.35227 19.30891,35.61852c8.44578,10.54977 19.3089,18.39867 32.55953,18.63742c0.20891,0.02985 0.40289,0.04477 0.6118,0.04477h0.01492c0.01492,0 0.01492,0 0.02984,0c0.01492,0 0.02985,0 0.04477,0c0.14922,0 0.31336,-0.01492 0.4775,-0.04477c13.29539,-0.19398 24.18836,-8.05781 32.66398,-18.63742c8.22195,-10.26625 14.42945,-23.24828 19.30891,-35.61852c7.58031,-2.14875 12.42992,-9.59476 12.42992,-17.42875c0,-7.61015 -3.6857,-12.42992 -7.52062,-14.4593c1.05945,-1.02961 7.08789,-6.8193 14.1907,-13.92211c3.83492,-3.84985 7.68477,-7.78922 10.60945,-10.95266c1.46234,-1.58172 2.68594,-2.96945 3.62601,-4.13336c0.46258,-0.59687 0.86547,-1.10422 1.2236,-1.67125c0.3432,-0.56703 1.04453,-0.6864 0.91023,-3.0739c-0.07461,-1.38774 -0.52227,-1.82047 -0.76102,-2.16367c-0.22383,-0.32828 -0.40289,-0.52226 -0.58195,-0.70133c-0.3432,-0.35813 -0.65656,-0.62672 -1.02961,-0.92516c-0.71625,-0.59687 -1.6414,-1.26836 -2.79039,-2.08906c-2.28305,-1.61156 -5.46141,-3.73047 -9.26649,-6.2075c-7.59523,-4.93914 -17.65258,-11.26602 -27.70992,-17.5332c-20.12961,-12.51945 -40.22938,-24.75539 -40.22938,-24.75539c-0.02984,-0.01492 -0.04477,-0.02985 -0.07461,-0.02985c-1.7011,-0.99977 -3.62602,-1.49219 -5.53602,-1.49219zM95.5,15.39938c0.53719,0 1.07437,0.14922 1.5668,0.43273c0.07461,0.04477 20.055,12.19117 40.09508,24.66586c10.04242,6.25226 20.08485,12.57914 27.59055,17.45859c3.76031,2.44719 6.87899,4.53625 9.01281,6.02844c0.20891,0.14922 0.2686,0.20891 0.44766,0.3432c-0.67148,0.79086 -1.31313,1.55188 -2.29797,2.61133c-2.79039,3.02914 -6.58055,6.90883 -10.40055,10.72883c-6.19258,6.2075 -10.29609,10.14687 -12.415,12.17625v-17.26461c0,-1.37281 -0.70133,-2.64117 -1.88015,-3.35742c0,0 -19.86102,-12.04195 -51.71922,-12.04195c-31.8582,0 -51.71922,12.04195 -51.71922,12.04195c-1.17883,0.71625 -1.88016,1.98461 -1.88016,3.35742v17.26461c-2.1189,-2.02938 -6.22242,-5.96875 -12.415,-12.17625c-2.5964,-2.58148 -4.80484,-4.9093 -7.07297,-7.28187c-0.2686,-0.43273 -0.64164,-0.80578 -1.05945,-1.0893c-0.70133,-0.74609 -1.67125,-1.68617 -2.28305,-2.34273c-0.96992,-1.07437 -1.61156,-1.85031 -2.29797,-2.62625c0.19398,-0.14922 0.25367,-0.19398 0.46258,-0.3432c2.13383,-1.50711 5.2525,-3.59617 9.01281,-6.02844c7.5057,-4.89437 17.54812,-11.20633 27.59055,-17.45859c20.04008,-12.47469 40.02047,-24.6211 40.09508,-24.66586c0.49242,-0.28351 1.02961,-0.43273 1.5668,-0.43273zM95.5,65.05938c27.66516,0 43.28836,8.66961 45.72062,10.07227v15.17555c-6.01352,-1.99953 -20.7414,-6.38656 -45.72062,-6.38656c-24.97922,0 -39.70711,4.38703 -45.72063,6.38656v-15.17555c2.43227,-1.40266 18.05547,-10.07227 45.72063,-10.07227zM95.5,91.79938c24.41219,0 40.63227,4.78992 45.84,6.56562v5.20773l4.23781,-0.44765c0,0 1.88016,-0.14922 3.64094,0.71625c1.7757,0.85055 3.58125,2.08906 3.58125,7.78922c0,5.35695 -3.46187,10.1618 -8.02797,10.62438l-2.34274,0.23875l-0.83562,2.19352c-4.80484,12.44485 -11.10188,25.51641 -18.86125,35.21562c-7.75937,9.6843 -16.65281,15.81719 -27.2175,15.81719c-0.01492,0 -0.01492,0 -0.02984,0c-10.56469,0 -19.45812,-6.13289 -27.2175,-15.81719c-7.75937,-9.69922 -14.05641,-22.77078 -18.86125,-35.21562l-0.83563,-2.19352l-2.34273,-0.23875c-4.5661,-0.46258 -8.02797,-5.26742 -8.02797,-10.62437c0,-5.70015 1.80555,-6.93867 3.58125,-7.78922c1.76078,-0.86547 3.64094,-0.71625 3.64094,-0.71625l4.23781,0.44765v-5.20773c5.20773,-1.7757 21.42781,-6.56562 45.84,-6.56562zM19.1,133.7c2.19352,0 3.82,1.65633 3.82,3.70063c0,1.0893 -1.49219,4.89437 -3.26789,7.81906c-0.26859,0.44766 -0.26859,0.38797 -0.53719,0.79086c-0.26859,-0.43273 -0.28351,-0.37305 -0.56703,-0.83562c-1.79063,-2.95453 -3.26789,-6.83422 -3.26789,-7.7743c0,-2.0443 1.62648,-3.70063 3.82,-3.70063z"></path>
                  </g>
                </g>
              </g>
            </svg></span></li>
        <li style="font-size: 14px;">REVUE DE LA CLARTÉ ET DE LA STRUCTURE</li>
        <li style="font-size: 14px;">REVUE DES COMPÉTENCES</li>
        <li style="font-size: 14px;">REVUE DE L'EXPÉRIENCE PROFESSIONNELLE</li>
        <li style="font-size: 14px;">ENREGISTREMENT DU CV DANS LA BASE DES PARTENAIRES</li>
        <li style="font-size: 14px;">PAS DE SUGGESTION FORMATION</li>
        <li style="font-size: 14px;"><b>24H CHRONO</b></li>

      </ul>
    </div> <!-- .cd-pricing-body -->
  </li>
  <li data-type="yearly" class="is-hidden">

  </li>
</ul> <!-- .cd-pricing-wrapper -->
</li>
<li class="cd-popular">
<ul class="cd-pricing-wrapper">
  <li data-type="monthly" class="is-visible">
    <header class="cd-pricing-header normal-bg2">
      <div class="cd-price">
        <h3> <span class="cd-value">5000fr</span></h3>
      </div>
      <h2>Professionnel</h2>
    </header> <!-- .cd-pricing-header -->
    <div class="cd-pricing-body">
      <ul class="cd-pricing-features">
        <li><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 191 191" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,191.99519v-191.99519h191.99519v191.99519z" fill="none"></path>
                <g fill="#c80080">
                  <g id="surface1">
                    <path d="M103.14,15.28c-18.93586,0 -32.66398,7.4311 -39.87125,18.38375c-6.77453,10.2961 -7.43109,23.38258 -2.865,35.45437c-1.68617,2.08906 -3.10375,4.80485 -2.74562,9.0725c0,0.07461 0,0.16414 0,0.23875c0.64164,4.65563 2.0443,7.93844 3.82,10.26625c0.86547,1.13406 2.14875,1.16391 3.22313,1.79063c0.64164,4.13336 1.86523,8.32641 3.58125,11.69875c0.96992,1.91 1.93985,3.59617 2.98438,5.01375c0.46258,0.62672 1.07438,1.02961 1.55187,1.55188c-0.04477,3.26789 -0.23875,6.2075 -0.4775,9.31125h-0.11938c-0.67148,-0.01492 -1.32805,0.14922 -1.91,0.4775c0,0 -6.49102,4.0886 -11.81813,11.57938c-23.62133,5.46141 -39.39375,24.42711 -39.39375,41.78125c0,2.10398 1.71602,3.82 3.82,3.82h63.62688c0.73117,0.22383 1.53695,0.22383 2.26812,0h13.60875c0.73117,0.22383 1.53695,0.22383 2.26812,0h63.38812c2.10398,0 3.82,-1.71602 3.82,-3.82c0,-20.92047 -18.87617,-37.78219 -39.75188,-41.42312c-0.98484,-1.31313 -5.02867,-6.58055 -10.74375,-10.74375c-0.07461,-0.08953 -0.14922,-0.16414 -0.23875,-0.23875c-0.19398,-0.1343 -0.40289,-0.22383 -0.59687,-0.35813c-0.67148,-0.53719 -1.52203,-0.83562 -2.3875,-0.83562c-0.22383,-3.22312 -0.31336,-6.25227 -0.35813,-9.43063c0.41781,-0.50734 1.02961,-0.85055 1.4325,-1.4325c1.01469,-1.44742 2.05922,-3.22313 2.98438,-5.13313c1.64141,-3.37234 2.92469,-7.34156 3.70063,-11.22125c1.2236,-0.62672 2.62625,-0.67148 3.58125,-1.91c1.83539,-2.40242 2.90977,-5.81953 3.3425,-10.505c0.23875,-2.77547 0.04477,-5.28234 -0.83562,-7.40125c-0.28352,-0.67148 -0.76102,-1.2982 -1.19375,-1.91c1.23852,-2.67102 2.02937,-5.73 2.3875,-9.19188c0.52227,-4.95406 0.31336,-10.47515 -1.07438,-15.87687c-1.38773,-5.40172 -3.96922,-10.65422 -8.1175,-14.68312c-3.58125,-3.4768 -8.60992,-5.61063 -14.44438,-6.2075l-2.98437,-5.96875c-0.64164,-1.32805 -1.98461,-2.16367 -3.46187,-2.14875zM100.87188,23.15875l2.62625,5.2525c0.64164,1.32805 1.98461,2.16367 3.46187,2.14875c5.31219,0 8.98297,1.7757 11.81812,4.53625c2.83516,2.76055 4.83469,6.71485 5.96875,11.10188c1.13406,4.38703 1.37281,9.08742 0.955,13.13125c-0.41781,4.04383 -1.68617,7.40125 -2.62625,8.595c-0.76102,0.96992 -0.99977,2.26812 -0.64164,3.44695c0.35812,1.17883 1.25344,2.1189 2.43227,2.5218c-0.01492,0.02985 -0.07461,0.07461 0,0.23875c0.2686,0.65656 0.62672,2.01445 0.4775,3.82c-0.3432,3.71555 -1.26836,5.73 -1.91,6.56562c-0.64164,0.83562 -0.96992,0.71625 -0.83562,0.71625c-1.85031,0.02985 -3.41711,1.38773 -3.70063,3.22312c-0.49242,3.25297 -1.99953,7.26695 -3.58125,10.505c-0.79086,1.62648 -1.5668,3.04406 -2.26812,4.05875c-0.70133,1.01469 -1.44742,1.64141 -1.07438,1.4325c-1.14898,0.67148 -1.88015,1.89508 -1.91,3.22312c0,5.19281 0.37305,8.49055 0.71625,13.8475c0,0.11938 0,0.23875 0,0.35813c0,0.04477 0,0.07461 0,0.11938c0,0.07461 0,0.16414 0,0.23875c0,0.38797 -0.02984,0.79086 -0.23875,1.19375c-0.2089,0.41781 -0.56703,0.80578 -1.07437,1.31312c-0.99977,0.98485 -2.58148,1.92492 -4.2975,2.74563c-1.53695,0.73117 -2.9993,1.28328 -4.17813,1.67125c-0.19398,0.05969 -0.41781,0.17906 -0.59687,0.23875c-0.74609,0.22383 -1.55187,0.41781 -1.79063,0.4775h-6.2075c-0.64164,-0.16414 -3.49172,-0.92515 -6.56562,-2.3875c-1.71602,-0.8207 -3.29773,-1.76078 -4.2975,-2.74563c-0.99977,-0.98484 -1.31312,-1.74586 -1.31312,-2.50687c0.02985,-0.52227 -0.05969,-1.05945 -0.23875,-1.55187c0.32828,-4.93914 0.59687,-8.04289 0.59687,-13.37c0.01492,-1.37281 -0.71625,-2.65609 -1.91,-3.3425c0.28352,0.16414 -0.46258,-0.32828 -1.19375,-1.31312c-0.73117,-0.98484 -1.59664,-2.35765 -2.3875,-3.93937c-1.59664,-3.14852 -3.02914,-7.19234 -3.3425,-10.505c-0.16414,-1.83539 -1.62648,-3.29773 -3.46187,-3.46188c0.1343,0.02985 0.04477,0 -0.23875,0c-0.14922,-0.08953 -0.35813,-0.26859 -0.59688,-0.59687c-0.67148,-0.88039 -1.62648,-3.04406 -2.14875,-6.56562c0,-0.07461 0,-0.04477 0,-0.11938c-0.01492,-0.05969 0.01492,-0.05969 0,-0.11938c-0.05969,-2.89484 1.73094,-4.5064 1.4325,-4.2975c1.49219,-1.04453 2.0443,-2.98437 1.31312,-4.65562c-4.68547,-10.59453 -4.01398,-21.93515 1.67125,-30.56c5.40172,-8.20703 15.59336,-14.10117 31.15688,-14.68313zM69.715,128.56687c0.43273,1.79063 0.94008,3.64094 1.55187,5.84938c1.41758,5.13313 3.26789,11.08695 5.13312,16.83187c2.31289,7.08789 4.2975,12.72836 5.73,16.83187h-11.57937l-11.57937,-14.56375l7.40125,-5.2525c1.31312,-0.89531 1.92492,-2.5218 1.55187,-4.05875l-2.74563,-10.38562c1.58172,-2.17859 3.17836,-3.98414 4.53625,-5.2525zM121.04625,129.52188c2.16367,2.10398 3.82,4.11844 4.65563,5.13313l-2.62625,9.55c-0.37305,1.53695 0.23875,3.16344 1.55188,4.05875l7.40125,5.2525l-11.57938,14.56375h-11.57937c1.4325,-4.10352 3.41711,-9.74398 5.73,-16.83187c1.86523,-5.74492 3.71555,-11.69875 5.13313,-16.83187c0.50735,-1.85031 0.92516,-3.3425 1.31312,-4.89437zM78.42937,132.02875c1.35789,0.96992 2.79039,1.73094 4.17813,2.3875c2.05922,0.98485 4.04383,1.65633 5.61062,2.14875l3.46187,8.595l-4.2975,14.8025c-1.17883,-3.43203 -2.34273,-6.95359 -3.70063,-11.10188c-1.85031,-5.67031 -3.76031,-11.53461 -5.13312,-16.47375c-0.04477,-0.1343 -0.08953,-0.22383 -0.11938,-0.35813zM112.57063,132.02875c-0.02984,0.1343 -0.07461,0.22383 -0.11937,0.35813c-1.37281,4.93914 -3.28281,10.80344 -5.13313,16.47375c-1.35789,4.14828 -2.5218,7.66985 -3.70063,11.10188l-4.2975,-14.8025l3.46188,-8.595c1.5668,-0.49242 3.55141,-1.1639 5.61062,-2.14875c0.70133,-0.32828 1.44742,-0.67148 2.14875,-1.07438c0.40289,-0.22383 0.79086,-0.46258 1.19375,-0.71625c0.28352,-0.17906 0.55211,-0.40289 0.83562,-0.59687zM58.255,137.75875l1.55188,5.84938l-8.595,6.08812c-0.85055,0.6118 -1.40265,1.55187 -1.53695,2.59641c-0.1343,1.02961 0.16414,2.07414 0.8207,2.89484l10.26625,12.8925h-33.18625c2.10398,-11.60922 13.20586,-25.54625 30.67937,-30.32125zM132.62562,138.11688c15.33969,3.40219 28.47094,15.87688 30.67938,29.96312h-33.06688l10.26625,-12.8925c0.41781,-0.4775 0.70133,-1.05945 0.83563,-1.67125c0.01492,-0.16414 0.01492,-0.31336 0,-0.4775c0.08953,-1.31313 -0.49242,-2.56656 -1.55187,-3.3425l-8.595,-6.08812z"></path>
                  </g>
                </g>
              </g>
            </svg></span></li>
        <li style="font-size: 14px;">REVUE DE LA CLARTÉ ET DE LA STRUCTURE</li>
        <li style="font-size: 14px;">REVUE DES COMPÉTENCES</li>
        <li style="font-size: 14px;">REVUE DE L'EXPÉRIENCE PROFESSIONNELLE</li>
        <li style="font-size: 14px;">ENREGISTREMENT DU CV DANS LA BASE DES PARTENAIRES</li>
        <li style="font-size: 14px;">PAS DE SUGGESTION FORMATION</li>
        <li style="font-size: 14px;"><b>48H CHRONO</b></li>

      </ul>
    </div> <!-- .cd-pricing-body -->
  </li>
  <li data-type="yearly" class="is-hidden">


  </li>
</ul> <!-- .cd-pricing-wrapper -->
</li>
<li>
<ul class="cd-pricing-wrapper">
  <li data-type="monthly" class="is-visible">
    <header class="cd-pricing-header normal-bg1">
      <div class="cd-price">
        <h3> <span class="cd-value">7000fr</span></h3>
      </div>
      <h2>Expert</h2>
    </header> <!-- .cd-pricing-header -->
    <div class="cd-pricing-body">
      <ul class="cd-pricing-features">
        <li><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 191 191" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,191.99519v-191.99519h191.99519v191.99519z" fill="none"></path>
                <g fill="#c80080">
                  <path d="M116.50254,11.44508l-0.29098,1.79063c-5.26378,-1.10613 -10.76212,-1.7757 -13.07156,-1.7757c-8.595,0 -21.41241,0.80954 -23.50195,1.1266c-30.56764,4.74444 -47.41927,24.5247 -51.50285,60.4709l-15.38445,26.51617c-2.72366,4.90106 -1.03898,10.86492 3.97668,13.65352l11.60176,5.80461l3.76031,27.58309c1.67698,10.45916 10.66502,18.05804 20.86824,17.6302l11.98227,0.00746v15.28746h68.76h7.64l0.06715,-24.47188c0,-10.92902 3.46373,-22.16346 10.70644,-31.99996c2.76163,-3.75433 6.34565,-11.2839 9.28887,-17.83164l9.23664,-9.23664l-9.43062,-13.1014c0.95706,-1.87225 1.76338,-3.82151 2.41734,-5.84937l15.91418,-2.79039v-3.2082v-15.66051l-15.9291,-2.60387c-0.65888,-2.03033 -1.46363,-3.98207 -2.42481,-5.85684l9.27395,-13.22078l-13.34016,-13.34016l-13.0641,9.38586c-1.88725,-0.97247 -3.85259,-1.79032 -5.9016,-2.45465l-2.77547,-15.85449zM123.00102,19.08508h5.96129l2.44719,13.98926l2.40988,0.60434c3.14682,0.785 6.10473,2.02881 8.80391,3.66332l2.15621,1.30567l11.52715,-8.2891l4.21543,4.21543l-8.19211,11.68383l1.27582,2.12637c1.61861,2.69427 2.85056,5.62747 3.63347,8.75914l0.6118,2.43973l14.04894,2.29797v5.95383l-14.06387,2.47703l-0.59687,2.40988c-0.77491,3.12695 -2.00814,6.06609 -3.62601,8.75914l-1.29074,2.15621l8.31894,11.55699l-4.21543,4.21543l-11.66891,-8.19211l-2.13383,1.2982c-2.67899,1.63054 -5.65026,2.88159 -8.78899,3.67824l-2.3875,0.60434l-2.47703,13.9818h-5.97621l-2.32035,-13.94449l-2.43973,-0.60434c-3.15199,-0.77861 -6.11966,-2.01653 -8.83375,-3.6484l-2.12637,-1.28328l-11.57937,8.11004l-4.22289,-4.22289l8.19957,-11.46746l-1.30566,-2.14875c-1.65086,-2.7275 -2.89321,-5.69211 -3.67824,-8.85614l-0.59688,-2.40988l-13.86988,-2.45465v-5.98367l13.86988,-2.31289l0.6118,-2.42481c0.79341,-3.17705 2.03514,-6.15191 3.67824,-8.87106l1.29074,-2.12636l-8.08766,-11.56445l4.22289,-4.22289l11.48985,8.20703l2.14875,-1.29074c2.7005,-1.62098 5.67333,-2.854 8.82629,-3.62602l2.45465,-0.59687zM126.06,45.83254c-10.50339,0 -19.1,8.59661 -19.1,19.1c0,10.50339 8.59661,19.1 19.1,19.1c10.50339,0 19.1,-8.59661 19.1,-19.1c0,-10.50339 -8.59661,-19.1 -19.1,-19.1zM126.06,53.47254c6.37443,0 11.46,5.08557 11.46,11.46c0,6.37443 -5.08557,11.46 -11.46,11.46c-6.37443,0 -11.46,-5.08557 -11.46,-11.46c0,-6.37443 5.08557,-11.46 11.46,-11.46z"></path>
                </g>
              </g>
            </svg></span></li>
        <li style="font-size: 14px;">REVUE DE LA CLARTÉ ET DE LA STRUCTURE</li>
        <li style="font-size: 14px;">REVUE DES COMPÉTENCES</li>
        <li style="font-size: 14px;">REVUE DE L'EXPÉRIENCE PROFESSIONNELLE</li>
        <li style="font-size: 14px;">ENREGISTREMENT DU CV DANS LA BASE DES PARTENAIRES</li>
        <li style="font-size: 14px;">PAS DE SUGGESTION FORMATION</li>
        <li style="font-size: 14px;"><b>72H CHRONO</b></li>

      </ul>
    </div> <!-- .cd-pricing-body -->
  </li>
  <li data-type="yearly" class="is-hidden">

  </li>
</ul> <!-- .cd-pricing-wrapper -->
</li>
</ul> <!-- .cd-pricing-list -->
</div> <!-- .cd-pricing-container -->
</div>
<!--  End Row -->
</div>
</section>
<!-- KEVINN MODIF END -->
</div>
<!--Fin Zone Formules -->
</div>
</section>
<!--  Client Section -->

<!--Footer Section-->
<footer id="footer-bottom">
<div class="container">
<!-- Start Row -->
<div class="row">
<!-- Start Col -->
<div class=" col-lg-6 col-md-6">
<div class="copy-text text-left">
<p>© 2019 Copyright, All Rights Reserved by <a href="https://themeforest.net/user/smartit-source/portfolio">JobConnect</a></p>
</div>
</div>
<!-- End Col -->
<!-- Start Col -->
<div class="pt-25 col-lg-6 col-md-6">
<!-- <div class="footer-menu float-right">
<ul>
<li><a href="#">Privacy & Conditions </a></li>
<li><a href="#"> Help </a></li>
<li><a href="#">Blog</a></li>
</ul>
</div> -->
</div>
<!-- End Col -->
</div>
<!-- End Row -->
</div>
</footer>
<!--  Footer Bottom Area -->
<!-- Back to scroll  -->
<div class="top-arrow">
<span class="scroll-top-top">
<i class="fas fa-arrow-up"></i>
</span>
</div>
<!-- Back to scroll  -->
<!--All Jquery Library Files -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- jquery.easing.min js  -->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- Bootstrap js  -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Carousel js  -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- aos Js -->
<script src="assets/js/aos.js"></script>
<!-- tab Js -->
<script src="assets/js/tab.js"></script>
<!-- main Js -->
<script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from smartitsource.com/utrun/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2019 20:52:55 GMT -->

</html>