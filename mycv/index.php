<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Connexion admin</title>
  <style>
    body {
      background-color: blueviolet;
    }

    .form-width {
      width: 35vw;
    }
  </style>
</head>

<body>

  <section class="login-content">
    <div class="logo">
      <h1 style="font-family:'Courier New', Courier, monospace">MyCV</h1>
    </div>

    <?php
    if (isset($_SESSION['erreur_msg'])) {
      echo '<div class="alert alert-danger">' . $_SESSION['erreur_msg'] . '</div>';
      unset($_SESSION['erreur_msg']);
    }
    ?>

    <div class="login-box form-width">
      <!--Formulaire de connexion-->
      <form class="login-form" action="controllers/traitement.php" method="POST">
        <h3 class="login-head">Connectez-vous</h3>
        <div class="form-group">
          <label class="control-label">Email</label>
          <input class="form-control" name="email" type="email" placeholder="Votre email" value="<?php if (isset($_SESSION['erreur_email'])) echo $_SESSION['erreur_email']; unset($_SESSION['erreur_email']); ?>">
        </div>
        <div class="form-group">
          <label class="control-label">Mot de passe</label>
          <input class="form-control" name="password" type="password" placeholder="Votre mot de passe">
        </div>
        <div class="form-group">
          <div class="utility">
            <div class="animated-checkbox">
              <label>
                <input type="checkbox" name="rst_connect"><span class="label-text">Restez connecté</span>
              </label>
            </div>
            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Mot de place oublié ?</a></p>
          </div>
        </div>
        <div class="form-group btn-container">
          <input type="submit" name="submit" class="btn btn-primary btn-block">
        </div>
      </form>
      <form class="forget-form">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Mot de place oublié ?</h3>
        <div class="form-group">
          <label class="control-label">EMAIL</label>
          <input class="form-control" type="text" placeholder="Email">
        </div>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
        </div>
        <div class="form-group mt-3">
          <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
        </div>
      </form>
    </div>
  </section>
  <!-- Essential javascripts for application to work-->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="assets/js/plugins/pace.min.js"></script>
  <script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
      $('.login-box').toggleClass('flipped');
      return false;
    });
  </script>
</body>

</html>