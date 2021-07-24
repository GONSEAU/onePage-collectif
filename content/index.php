<?php
require_once 'sql/Sql.php';
$sql = new Sql;
$navBar = $sql->getNav();
$Apropos = $sql->getSectionApropos();
$teamCard = $sql->getSectionTeam();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Barber Home || Mon barbier préféré</title>

  <meta name="Content-Type" content="UTF-8">
  <meta name="Content-Language" content="fr">
  <meta name="Keywords" content="Barbier Barber-home Team Barber ">
  <meta name="Description" content="Bienvenue chez Barber Home la Team Barber est prête à rendre votre poils soyeux à domicile">
  <meta name="Subject" content="barber shop">
  <meta name="Copyright" content="Robin">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="assets/img/logoRobinBlack.png" type="image/x-icon">

  <!-- Link BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- reseaux icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS -->
  <?php require_once 'assets/css/css.php'; ?>

  <!-- font -->
  <link rel="stylesheet" href="assets/fonts/Barber Street.ttf">

</head>

<body>

  <!-- HEADER template -->

  <?php require_once 'template/header.php'; ?>

  <div class="container-fluid backgroundHead"></div>

  <!-- section à propo  -->
  <section>
    <div id="apropos" class="bandeau">
      <h2>A PROPOS</h2>
      <div class="container ">
        <div class="row">
          <div class="col-md-6 col-sm-12 img1 ">
          </div>
          <div class="col-md-6 col-sm-12 padding20RL">
            <h4>Une équipe à votre service</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
              printer took a galley of type and scrambled it to make a type specimen book. It has survived
              not only five centuries, but also the leap into electronic typesetting, remaining essentially
              unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
              Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
              PageMaker including versions of Lorem Ipsum.
            </p>
          </div>
        </div>
        <div class="row sec-container-reverse">
          <div class="col-md-6 col-sm-12 padding20RL">
            <h4>C'est chez vous que ça se passe !</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
              printer took a galley of type and scrambled it to make a type specimen book. It has survived
              not only five centuries, but also the leap into electronic typesetting, remaining essentially
              unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
              Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
              PageMaker including versions of Lorem Ipsum.
            </p>
          </div>
          <div class="col-md-6 col-sm-12 img2  ">
          </div>
        </div>
      </div>
      <!-- bandeau -->
    </div>
  </section>

  <!-- section cards Team Barber  -->
  <section id="teamBarber">
    <h2>Team Barber</h2>
    <div class="container">

      <!-- premiere card  -->

      <div class="row">
        <?php for ($i = 0; $i < count($teamCard); $i++): ?>
          <div class="col-lg-4">
            <div class="card">
              <img src="assets/img/<?php echo $teamCard[$i]['photo_member']; ?>.jpg" class="rounded-circle img-thumbnail " alt="profilePhoto" title="Weber">
              <div class="card-body">
                <h5 class="card-title text-center"><?php echo $teamCard[$i]['name_member']; ?></h5>
                <p class="card-text text-center"><?php echo $teamCard[$i]['text_member']; ?></p>
              </div>
              <div class="card-footer">
                <div class="social">
                  <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official"></i></a>
                  <a href="https://twitter.com/?lang=fr" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.instagram.com/?hl=fr" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- section carousel -->
  <section class="bandeau-carousel" id="nosRéalisations">
    <h2>Nos réalisations </h2>

    <div class="container ">
      <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <!-- selecteur carousel -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <!-- img carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/test1final.jpg" class="  " alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/test2.jpg" class=" " alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/test3.png" class=" " alt="...">
          </div>
        </div>
        <!-- btn nav carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </section>

  <section id="contact">
    <?php require_once('form/contact.php'); ?>
  </section>

  <?php require_once('template/footer.php'); ?>


  <!-- Calendly badge widget begin -->
  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
  <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
  <!-- Calendly badge widget end -->

  <!-- SCRIPTS -->

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!--script font Awesom-->
  <script src="https://kit.fontawesome.com/666c6ef7e8.js" crossorigin="anonymous"></script>

  <!-- script jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <!-- script jqueryui-->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

  <!-- My script -->
  <script src="assets/js/script.js"></script>

  <!-- END SCRIPTS -->





</body>

</html>